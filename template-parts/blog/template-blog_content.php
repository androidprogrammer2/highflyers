<section class="blog-post">
    <div class="container">
        <div class="row">
            <?php 
            $args = array(
                'posts_per_page' => 1, 
                'post_status'    => 'publish',
            );
            $latest_post_query = new WP_Query($args);
            if ($latest_post_query->have_posts()) : 
                while ($latest_post_query->have_posts()) : $latest_post_query->the_post(); 
                    $post_title = get_the_title();
                    $post_permalink = get_permalink();
                    $image          = "";
                    $post_thumbnail_url = get_the_post_thumbnail_url();
                    $categories = get_the_category();
                    $category_list = join( ', ', wp_list_pluck( $categories, 'name' ) );
                    $dummy_image = home_url().'/wp-content/uploads/2024/07/New-Project.png';

                    if(!empty($post_thumbnail_url)){
                        $image = $post_thumbnail_url;
                    }else{
                        $image = $dummy_image;
                    }

            
                    echo '<div class="col-md-5">
                                <div class="left-blog">
                                    <a href="' . esc_url($post_permalink) . '" class="blog-post-box">
                                        <div class="post-item">
                                            <img src="' . esc_url($image) . '" alt="' . esc_attr($post_title) . '">
                                        </div>
                                        <div class="post-content">
                                            <h6>'.$category_list.'</h6>
                                            <h2>' . esc_html($post_title) . '</h2>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        ';
                endwhile; wp_reset_postdata();
            endif; 
            $args_lising = array(
                'post_type'         => 'post', 
                'posts_per_page'    => 4,
                'offset'            => 1,
                'orderby'           => 'date',
                'order'             => 'DESC', 
            );
            
            $query_listing = new WP_Query($args_lising);
            $found_pots    = $query_listing->found_posts + 1;
            ?>
            <div class="col-md-7">
                <div class="right-blog">
                    <div class="d-flex mb-4 align-items-center justify-content-between">
                        <div class="post-count">
                            5 /  <?php echo $found_pots; ?> Posts
                        </div>
                        <?php 
                        $terms = get_terms(array(
                            'taxonomy' => 'category',
                            'hide_empty' => true,
                            'exclude'   => array(35),
                        ));
                        ?>
                        <div class="select-post">
                            <select  name="filter_post" id="filter_post_cat">
                                <option value=""><?php _e('All Posts', 'highflyers') ?></option>
                                <?php 
                                foreach ($terms as $term) {
                                    echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="loading"><span></span></div>
                    <?php 
                    

                    if($query_listing->have_posts()){
                    ?>
                    <div class="blogpost-list">
                        <ul id="blog_loop_wrapper">
                            <?php while($query_listing->have_posts()){ $query_listing->the_post(); 
                                 $post_title = get_the_title();
                                 $post_permalink = get_permalink();
                                 $post_thumbnail_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_home_url() . '/wp-content/uploads/2024/06/post-1.png';
                                 $categories = get_the_category();
                                 $category_list = join( ', ', wp_list_pluck( $categories, 'name' ) );
                                ?>
                            <li>
                                <a href="<?php echo $post_permalink; ?>" class="blog-post-box">
                                    <div class="post-item">
                                        <img src="<?php echo $post_thumbnail_url; ?>" alt="">
                                    </div>
                                    <div class="post-content">
                                        <?php 
                                            if(!empty($category_list)){ echo '<h6>'.$category_list.'</h6>'; }
                                            if(!empty($post_title)){ echo '<h4>'.$post_title.'</h4>'; }
                                        ?>
                                    </div>
                                </a>
                            </li>
                            <?php } wp_reset_postdata(); ?>
                        </ul> 
                        <div id="load_more_btn_wrapper">
                            <a href="javascript:void(0)" class="theme-btn" id="load_more_btn"><?php _e('View more posts' , 'highflyers'); ?></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section><!--blog-post -->