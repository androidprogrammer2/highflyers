
<?php 
$banner_feature_posts = get_field('banner_feature_posts');
$featured_title = get_field('featured_title');
?>
<div class="feature-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-wrap-feature">
                    <div class="feature-title">
                        <?php if(!empty($featured_title)){ echo '<h3>'.$featured_title.'</h3>'; } ?>
                    </div>
                    <div class="feature-slider">
                        <?php 
                        if(!empty($banner_feature_posts)){
                            foreach($banner_feature_posts as $banner_feature_post){
                                $id = $banner_feature_post->ID;
                                $permalink = get_permalink( $id);
                                $title = get_the_title( $id);
                                $featured_image = get_the_post_thumbnail_url($id);
                                $day = get_field( 'day', $id);
                                $categories = wp_get_post_terms($id, 'ages');
                                $thumbnail_id = get_post_thumbnail_id($id);
                                ?>                        
                                <div class="slider-items">
                                    <a href="<?php echo $permalink; ?>">
                                    <?php 
                                    foreach ($categories as $category) {
                                        echo '<div class="tag-age">';
                                        echo $category->name;
                                        echo '</div>';
                                    }
                                    ?>
                                    <div class="wrap-img-feature">
                                        <?php if($thumbnail_id){ ?>
                                            <?php echo  wp_get_attachment_image($thumbnail_id , 'full') ?>
                                        <?php } else{ ?>
                                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/06/f-02.png" alt="">
                                        <?php } ?>
                                    </div>
                                    <div class="wrap-title-items">
                                        <h6><?php echo $title;?></h6>
                                        <span><?php echo $day ;?></span>
                                    </div>
                                    </a>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>