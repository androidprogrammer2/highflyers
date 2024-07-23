<?php 
$experience_title           = get_field('experience_title');
$experience_texts           = get_field('experience_texts');
$experience_dark_button     = get_field('experience_dark_button');
$experience_light_button    = get_field('experience_light_button');
$best_gym_cover_image       = get_field('best_gym_cover_image');
?>
<section class="our-experience">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="title_with_btn mb-4 mb-md-0">
                    <?php
                        if(!empty($experience_title)){ echo '<h2 class="mb-4">'.$experience_title.'</h2>'; } 
                        if (!empty($experience_dark_button['url']) && $experience_dark_button['title']) {
                            echo '<a href="' . $experience_dark_button['url'] . '" class="theme-btn mb-2 me-2">' . $experience_dark_button['title'] . '</a>';
                        }
                        if (!empty($experience_light_button['url']) && $experience_light_button['title']) {
                            echo '<a href="' . $experience_light_button['url'] . '" class="theme-btn border-btn">' . $experience_light_button['title'] . '</a>';
                        }
                    ?>
                </div>
            </div>
            <?php if(!empty($experience_texts)){ ?>
                <div class="col-md-8 ps-xl-5">
                    <div class="content-block">
                        <?php echo $experience_texts; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section> <!--our-experience -->

<?php if(!empty($best_gym_cover_image)){ ?>
    <section class="simpleimg_sec">
        <?php echo wp_get_attachment_image($best_gym_cover_image['id'] , 'full'); ?>
    </section> <!--simpleimg_sec -->
<?php } ?>