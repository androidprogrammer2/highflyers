<?php
$purpose_background_image = get_field('purpose_background_image');
$purpose_title = get_field('purpose_title');
$purpose_texts = get_field('purpose_texts');
$purpose_video = get_field('purpose_video');
$purpose_right_side = get_field('purpose_right_side');
$purpose_gallery_images = get_field('purpose_gallery_images');
$purpose_video_title = get_field('purpose_video_title');
?>
<div class="popup-sec"
    style="background-image:url(<?php echo $purpose_background_image['url']; ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title-box text-end">

                    <?php if(!empty($purpose_title)){echo '<h2>'.$purpose_title.'</h2>';} ?>
                    <?php if(!empty($purpose_texts)){echo wpautop($purpose_texts);} ?>

                    <div class="wrap-icon-btn">
                        <a class="theme-btn border-btn white-btn popup-youtube"
                            href="<?php echo $purpose_video ; ?>">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.72974 11.9999V5.93774L12.9797 8.96884L18.2297 11.9999L12.9797 15.031L7.72974 18.0621V11.9999Z"
                                    fill="#DB9F05" stroke="#DB9F05" stroke-width="2" stroke-linejoin="round" />
                            </svg><!-- 
                            <span> Watch Our Video </span> -->
                            <?php if(!empty($purpose_video_title)){echo '<span>'.$purpose_video_title.'</span>';} ?>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="facility-wrap">
                    <div class="row">
                        <?php 
                        if(!empty($purpose_right_side)){
                            $counter = 0;
                            foreach($purpose_right_side as $purpose_right_sides){
                                $purpose_right_side_icon = $purpose_right_sides['purpose_right_side_icon'];
                                $purpose_right_side_title = $purpose_right_sides['purpose_right_side_title'];
                                if ($counter % 2 == 0) {
                                    echo '<div class="col-lg-6">';
                                }
                                ?>
                                    <div class="wrap-facility-item text-center">
                                        <img src="<?php echo esc_url($purpose_right_side_icon['url']); ?>" alt="<?php echo esc_attr($purpose_right_side_title); ?>">
                                        <h4 class="text-white"><?php echo $purpose_right_side_title; ?></h4>
                                    </div>
                                <?php
                                if ($counter % 2 == 1) {
                                    echo '</div>';
                                }
                        
                                $counter++;
                            }
                            if ($counter % 2 != 0) {
                                echo '</div>';
                            }
                        }
                        ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gallery-slider slider-gallery-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="popup-gallery">
                    <?php 
                    if(!empty($purpose_gallery_images)){
                        foreach($purpose_gallery_images as $purpose_gallery_image){
                            $images = $purpose_gallery_image['url'];
                            $image_desc = $purpose_gallery_image['description'];
                            ?>
                                <a class="img-popup" href="<?php echo $images; ?>" title="<?php echo $image_desc; ?>">
                                    <span class="popup-wrap">
                                        <img class="pop-icon"
                                            src="<?php echo get_template_directory_uri();?>/assets/images/MagnifyingGlassPlus.svg"
                                            alt="">
                                        <img src="<?php echo $images; ?>" alt="">
                                    </span>
                                </a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popup sec For mobile-->
<div class="popup-sec-mobile">
    <div class="title-box">
       
            <?php if(!empty($purpose_title)){echo '<h2>'.$purpose_title.'</h2>';} ?>
            <?php if(!empty($purpose_texts)){echo wpautop($purpose_texts);} ?>

        <div class="wrap-icon-btn">
            <a class="theme-btn border-btn white-btn popup-youtube" href="<?php echo $purpose_video ; ?>">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.72974 11.9999V5.93774L12.9797 8.96884L18.2297 11.9999L12.9797 15.031L7.72974 18.0621V11.9999Z"
                        fill="#DB9F05" stroke="#DB9F05" stroke-width="2" stroke-linejoin="round" />
                </svg>
                <?php if(!empty($purpose_video_title)){echo '<span>'.$purpose_video_title.'</span>';} ?>
            </a>
        </div>

    </div>
    <div class="facility-slider"
        style="background-image:url(https://dddemo.net/wordpress/2024/highflyers/wp-content/uploads/2024/06/prf.jpg)">
        <?php 
        if(!empty($purpose_right_side)){
            foreach($purpose_right_side as $purpose_right_sides){
                $purpose_right_side_icon = $purpose_right_sides['purpose_right_side_icon'];
                $purpose_right_side_title = $purpose_right_sides['purpose_right_side_title'];
                ?>
                    <div class="slider-facility-img">
                        <div class="slider-facility-items d-flex justify-content-center gap-3 align-items-center">
                        <img src="<?php echo esc_url($purpose_right_side_icon['url']); ?>" alt="<?php echo esc_attr($purpose_right_side_title); ?>">
                        <h4 class="m-0 text-white"><?php echo $purpose_right_side_title; ?></h4>
                        </div>
                    </div>
                <?php
            }
        }
        ?>
        
    </div>
</div>