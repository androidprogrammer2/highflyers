<?php 
function load_more_posts(){
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'load_more_posts_nonce')) {
        wp_send_json_error('Invalid nonce');
        wp_die();
    }

    $page = isset($_POST['page'])? $_POST['page'] : '';
    $select_val = isset($_POST['select_val'])? $_POST['select_val'] : '';

    $args_lising = array(
        'post_type'         => 'post', 
        'posts_per_page'    => 4,
        'orderby'           => 'date',
        'order'             => 'DESC', 
    );

    if(!empty($page)){
        $args_lising['paged'] = $page;
    }
    if(!empty($select_val)){
        $args_lising['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => array($select_val),  
            ),
        );
    }
    
    $query_listing = new WP_Query($args_lising);

    if($query_listing->have_posts()){
        ob_start(); 
        while($query_listing->have_posts()){ $query_listing->the_post(); 
            $post_title = get_the_title();
            $post_permalink = get_permalink();
            $post_thumbnail_url = get_the_post_thumbnail_url();
            $categories = get_the_category();
            $category_list = join( ', ', wp_list_pluck( $categories, 'name' ) );
            $image          = "";
            $dummy_image = home_url().'/wp-content/uploads/2024/07/New-Project.png';

            if(!empty($post_thumbnail_url)){
                $image = $post_thumbnail_url;
            }else{
                $image = $dummy_image;
            }
        ?>
        <li>
            <a href="<?php echo $post_permalink; ?>" class="blog-post-box">
                <div class="post-item">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
                <div class="post-content">
                    <?php 
                        if(!empty($category_list)){ echo '<h6>'.$category_list.'</h6>'; }
                        if(!empty($post_title)){ echo '<h4>'.$post_title.'</h4>'; }
                    ?>
                </div>
            </a>
        </li>
   <?php } wp_reset_postdata(); 
    }
    $listing_list = ob_get_clean();

    ob_start();

    $max_num_pages = $query_listing->max_num_pages;
    if($max_num_pages != $page && $query_listing->have_posts()){ ?>
        <a href="javascript:void(0)" class="theme-btn" id="load_more_btn"><?php _e('View more posts' , 'highflyers'); ?></a>
    <?php 
    }else{
        echo '';
    }
    $max_page = ob_get_clean();

    ob_start();
        $per_page = 4;
        $current = $paged = isset($_POST['page']) ? absint($_POST['page']) : 1;
                
        $first = ( $per_page * $current ) - $per_page + 1;
        $last  = min( $query_listing->found_posts, $per_page * $current ) + 1;
        printf( _nx( '%2$d / %3$d posts', '%2$d / %3$d posts', $query_listing->found_posts, 'with first and last result', 'woocommerce' ), $first, $last, $query_listing->found_posts + 1 );

        $_result_count = ob_get_clean();
        // wp_reset_postdata();

    echo json_encode(array('blog_listing'=>$listing_list , 'max_page' => $max_page , 'result_count' => $_result_count));
    wp_die();
}

add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
add_action('wp_ajax_load_more_posts', 'load_more_posts');

function filter_program_classes(){

    $cat_slug = isset($_POST['cat_slug'])? $_POST['cat_slug'] : '';
    $age_slug = isset($_POST['age_slug'])? $_POST['age_slug'] : '';
    $age_true = isset($_POST['age_true'])? $_POST['age_true'] : '';
    $cat_true = isset($_POST['cat_true'])? $_POST['cat_true'] : '';

    $recreational_arg = array(
        'post_type' => 'recreational_pro',
        'posts_per_page' => 11,
        'post_status'   => 'publish',
        'suppress_filters' => true,
    );

    $tax_query = array();

    $tax_query[] = array(
        'taxonomy' => 'program_type',
        'field'    => 'slug',
        'terms'    => array('recreational-programs'),
    );

    if(!empty($cat_slug)){
        $tax_query[] = array(
            'taxonomy' => 'Classes_type',
            'field'    => 'slug',
            'terms'    => array($cat_slug),
        );
    }

    if(!empty($age_slug)){
        $tax_query[] = array(
            'taxonomy' => 'ages',
            'field'    => 'slug',
            'terms'    => array($age_slug),
        );
    }

    if(!empty($tax_query)){
        $tax_query['relation'] = 'AND';
        $recreational_arg['tax_query'] = $tax_query;
    }

    $recreational_posts = new WP_Query($recreational_arg);
    
    if($recreational_posts->have_posts()){
    ob_start();

     include(get_template_directory() . '/template-parts/recreational-programs/template-program_loop.php');
    
      ?>
        <li id="explore_by_age" style="<?php echo ($cat_true == true)?'display:flex':'display:none'; ?>">
            <a href="javascript:void(0);" class="wrap-disciplin-box changes-tabs">
                <h6><?php _e('Explore our classes by age' , 'highflyers'); ?></h6>
                <span class="circle-arrow"></span>
            </a>
        </li>
        <li id="explore_by_classes" style="<?php echo ($age_true == true)?'display:flex':'display:none'; ?>">
            <a href="javascript:void(0);" class="wrap-disciplin-box changes-tabs">
                <h6><?php _e('Explore our classes by discipline' , 'highflyers'); ?></h6>
                <span class="circle-arrow"></span>
            </a>
        </li>
     <?php  }else{
        echo 'No Program Found';
     }

     $program_list = ob_get_clean();

     echo json_encode(array('program_list' => $program_list));
     wp_die();

}


add_action('wp_ajax_nopriv_filter_program_classes', 'filter_program_classes'); 
add_action('wp_ajax_filter_program_classes', 'filter_program_classes');


// Home Filter

function home_filter_program_classes(){

    $cat_slug = isset($_POST['cat_slug'])? $_POST['cat_slug'] : '';
    $age_slug = isset($_POST['age_slug'])? $_POST['age_slug'] : '';
    $age_true = isset($_POST['age_true'])? $_POST['age_true'] : '';
    $cat_true = isset($_POST['cat_true'])? $_POST['cat_true'] : '';

    $recreational_arg = array(
        'post_type' => 'recreational_pro',
        'posts_per_page' => 5,
        'post_status'   => 'publish',
        'suppress_filters' => true,
    );

    $tax_query = array();

    $tax_query[] = array(
        'taxonomy' => 'program_type',
        'field'    => 'slug',
        'terms'    => array('recreational-programs'),
    );

    if(!empty($cat_slug)){
        $tax_query[] = array(
            'taxonomy' => 'Classes_type',
            'field'    => 'slug',
            'terms'    => array($cat_slug),
        );
    }

    if(!empty($age_slug)){
        $tax_query[] = array(
            'taxonomy' => 'ages',
            'field'    => 'slug',
            'terms'    => array($age_slug),
        );
    }

    if(!empty($tax_query)){
        $tax_query['relation'] = 'AND';
        $recreational_arg['tax_query'] = $tax_query;
    }

    $recreational_posts = new WP_Query($recreational_arg);
    
    if($recreational_posts->have_posts()){
    ob_start();

    while($recreational_posts->have_posts()){ $recreational_posts->the_post();
        $recreational_id        = get_the_ID();
        $recreational_title     = get_the_title($recreational_id);
        $recreational_excerpt   = get_the_excerpt($recreational_id);
        $listing_page_text      = get_field('listing_page_text' , $recreational_id);
        $information_repeater   = get_field('information_repeater' , $recreational_id);
        $term_obj_list          = get_the_terms( $recreational_id, 'ages' );
        $terms_string           = join(', ', wp_list_pluck($term_obj_list, 'name'));
        $permalink              = get_the_permalink( $recreational_id );
        $thumbnail_url          = get_the_post_thumbnail_url( $recreational_id );
        ?>
    <li>
        <a href="<?php echo $permalink; ?>" class="wrap-disciplin-box">
            <div class="wrap-dic-img">
                <?php 
                if(!empty($thumbnail_url)){
                    echo '<img src="'.$thumbnail_url.'" alt="">';
                }else{
                ?>
                <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/06/f-02.png" alt="">
                <?php }
                if(!empty($terms_string)){echo '<span class="age-btn-tag">
                    '.$terms_string.'
                </span>';}
                ?>
            </div>
            <div class="wrap-inner-box">
                <?php
                 if(!empty($recreational_title)){ echo '<h6>'.$recreational_title.'</h6>'; } 
                 if(!empty($information_repeater)){
                    echo '<ul class="list-unstyled m-0 p-0 d-flex justify-content-between  main-wrp-items">';
                        foreach($information_repeater as $info){
                            echo '<li>'.$info['title'].'</li>
                            <li>'.$info['content'].'</li>';
                        }
                    echo '</ul>';
                 }
                ?>
            </div>
            <?php 
                if(!empty($listing_page_text)){
                    echo '<span class="w-100 btn-primary d-block">
                    '.$listing_page_text.'
                    </span>';
                } 
            ?>
        </a>
    </li>
    <?php }
      ?>
        <li id="home_explore_by_age" style="<?php echo ($cat_true == true)?'display:flex':'display:none'; ?>">
            <a href="javascript:void(0);" class="wrap-disciplin-box changes-tabs">
                <h6>Explore our classes by age</h6>
                <span class="circle-arrow"></span>
            </a>
        </li>
    <?php 
    ?>
        <li id="home_explore_by_classes" style="<?php echo ($age_true == true)?'display:flex':'display:none'; ?>">
            <a href="javascript:void(0);" class="wrap-disciplin-box changes-tabs">
                <h6>Explore our classes by discipline</h6>
                <span class="circle-arrow"></span>
            </a>
        </li>
     <?php   }else{
        echo 'No Program Found';
     }

     $program_list = ob_get_clean();

     echo json_encode(array('program_list' => $program_list));
     wp_die();

}


add_action('wp_ajax_nopriv_home_filter_program_classes', 'home_filter_program_classes'); 
add_action('wp_ajax_home_filter_program_classes', 'home_filter_program_classes');

echo 'How are you';
echo 'How are you';




echo 'Hello from Bhaumil';


echo 'hello brijesh ';






