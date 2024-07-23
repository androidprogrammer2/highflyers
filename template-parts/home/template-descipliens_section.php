<?php 
$our_disciplines_title = get_field('our_disciplines_title');
$select_classes_types = get_field('select_classes_types');
$select_ages = get_field('select_ages');
?>
<div class="disciplines-sec">
    <div class="container">
        <div class="disciplines-title-block">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <?php
                    if(!empty($our_disciplines_title)){ echo '<h3>'.$our_disciplines_title.'</h3>'; } 

                    $terms_Classes = get_terms( array(
                        'taxonomy'   => 'Classes_type',
                        'include'   => $select_classes_types,
                        'hide_empty' => true,
                    ) );
                
                    $terms_ages = get_terms( array(
                        'taxonomy'   => 'ages',
                        'include'    => $select_ages,
                        'orderby'    =>'ID',
                        'hide_empty' => true,
                    ) );

                    $recreational_arg = array(
                        'post_type' => 'recreational_pro',
                        'posts_per_page' => 5,
                        'post_status'   => 'publish',
                        'tax_query'     => array(
                            array(
                                'taxonomy' => 'program_type',
                                'field'    => 'slug',
                                'terms'    => array('recreational-programs'),
                            ),
                        ),
                    );
                    $recreational_posts = new WP_Query($recreational_arg);
                    ?>
                    <ul class="explore-tab list-unstyled m-0 p-0 gap-4 flex-wrap" id="home_filter_by_classes">
                            <?php foreach ($terms_Classes as $term__class) :
                                ?>
                                <li><a href="javascript:void(0);" data-slug="<?php echo esc_html($term__class->slug); ?>"><?php echo esc_html($term__class->name); ?></a>
                        </li>
                        <?php  endforeach; ?>
                    </ul>
                    <ul class="explore-tab list-unstyled m-0 p-0 gap-4 flex-wrap d-non" id="home_filter_by_ages">
                        <li><a href="javascript:void(0);" class="active" data-slug="">All Ages</a></li>
                                <?php foreach ($terms_ages as $term_age) :
                                    ?>
                                    <li><a href="javascript:void(0);" data-slug="<?php echo esc_html($term_age->slug); ?>"><?php echo str_replace('Ages ', '', $term_age->name); ?></a>
                        </li>
                            <?php  endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-5 d-none d-md-block">
                    <?php 
                    $explore_all_class = get_field('explore_all_class');
                    $explore_all_class_button_text = get_field('explore_all_class_button_text');
                    if(!empty($explore_all_class['url'])){ ?>
                    <a href="<?php echo $explore_all_class['url']; ?>" class="all-class-arrow d-flex gap-3">
                        <div class="wrap-all-class">
                            <?php echo $explore_all_class_button_text; ?>
                        </div>
                        <span class="circle-arrow"></span>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                
                <?php if($recreational_posts->have_posts()){ ?>
                <div class="content-sec">
                    <ul class="list-unstyled  p-0" id="home_recreational_wrapper">
                        <?php while($recreational_posts->have_posts()){ $recreational_posts->the_post();
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
                        <?php } wp_reset_postdata(); ?>
                        <li id="home_explore_by_age">
                            <a href="javascript:void(0);" class="wrap-disciplin-box changes-tabs">
                                <h6>Explore our classes by age</h6>
                                <span class="circle-arrow"></span>
                            </a>
                        </li>
                        <li id="home_explore_by_classes">
                            <a href="javascript:void(0);" class="wrap-disciplin-box changes-tabs">
                                <h6>Explore our classes by discipline</h6>
                                <span class="circle-arrow"></span>
                            </a>
                        </li>

                    </ul>
                </div>
                <?php } ?>
            </div>
            <?php 
            $all_classes_repeater = get_field('all_classes_repeater');
            ?>
            <div class="col-lg-5 justify-content-end ">
                <?php 
                if(!empty($all_classes_repeater)){

                ?>
                <ul class="list-unstyled p-0 m-0 mt-4 mt-lg-0 post-main-sec">
                    <?php foreach($all_classes_repeater as $all_class_detail){
                        $program_image = $all_class_detail['program_image'];
                        $program_title = $all_class_detail['program_title'];
                        $program_age = $all_class_detail['program_age'];
                        $program_content = $all_class_detail['program_content'];
                        $learn_more_cta = $all_class_detail['learn_more_cta'];
                        ?>
                    <li>
                        <a href="<?php echo ($learn_more_cta['url'])? $learn_more_cta['url']:'javascript:void(0);' ?>" class="post-blog-link">
                            <div class="wrap-post-info">
                                <div class="wrap-post-img">
                                    <?php //if(!empty($program_image)){ echo wp_get_attachment_image($program_image['id'] , '' , '' , array('class' => '', 'alt' => '')); } ?>
                                    <img src="<?php echo $program_image['url']; ?>" alt="">
                                    <?php 
                                    if(!empty($program_age)){echo '<span class="age-btn-tag">
                                        '.$program_age.'
                                    </span>';}
                                    ?>
                                </div>
                                <div class="post-detail-wrap">
                                    <?php 
                                    if(!empty($program_title)){ echo '<h6>'.$program_title.'</h6>'; }
                                    if(!empty($program_content)){ echo '<p>'.$program_content.'</p>'; }
                                    if (!empty($learn_more_cta['url']) && $learn_more_cta['title']) {
                                         echo '<span class="small-btn">'.$learn_more_cta['title'].'</span>';
                                     }
                                     ?>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </div>
        </div>
        <div class="all-class-arrow-mobile d-md-none">
            <?php 
                $explore_all_class = get_field('explore_all_class');
                $explore_all_class_button_text = get_field('explore_all_class_button_text');
                if(!empty($explore_all_class['url'])){ ?>
                <a href="<?php echo $explore_all_class['url']; ?>" class="all-class-arrow d-flex gap-3">
                    <div class="wrap-all-class">
                        <?php echo $explore_all_class_button_text; ?>
                    </div>
                    <span class="circle-arrow"></span>
                </a>
                <?php } ?>
            </div>
    </div>

    <div class="bottom-img-wrap">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/06/Group-1-1-1.png" alt="">
    </div>
</div>