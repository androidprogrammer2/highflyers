<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package highflyers
 */
$map_text           = get_field('map_text' , 'option');
$map_icon_repeater  = get_field('map_icon_repeater' , 'option');
$footer_logo        = get_field('footer_logo' , 'option');
$get_in_touch_text  = get_field('get_in_touch_text' , 'option');
$stay_connected_text= get_field('stay_connected_text' , 'option');
$logo_repeater      = get_field('logo_repeater' , 'option');
$copyright_text     = get_field('copyright_text' , 'option');
$terms_condition    = get_field('terms_&_condition' , 'option');
$privacy_policy     = get_field('privacy_policy' , 'option');
$website_by_text    = get_field('website_by_text' , 'option');
?>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start text-center">
                        <?php if(!empty($map_text)){ echo '<h6>'.$map_text.'</h6>'; } ?>
                    </div>
                    <?php if(!empty($map_icon_repeater)){ ?>
                    <div class="col-lg-8">
                        <div class="flag-slider flag-slider d-flex gap-2 justify-content-lg-end  justify-content-center mt-4 mt-lg-0">
                            <?php foreach($map_icon_repeater as $map_icons){
                                $map_image = $map_icons['map_image'];
                            ?>
                            <div class="wrap-fla-img position-relative">
                                 <img src="<?php echo $map_image['url']; ?>" alt="<?php echo $map_image['alt']; ?>">
                                 <div class="tooltip"><?php echo $map_image['alt']; ?></div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="footer-mid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 ">
                        <a class="d-flex justify-content-center  justify-content-lg-start mb-5 mb-lg-0" href="<?php echo home_url(); ?>">
                            <img src="<?php echo $footer_logo['url']; ?>" alt="Footer Logo">
                        </a>
                    </div>
                    <div class="col-lg-9 main-center-link ">
                        <div class="row">
                            <div class="col-lg-3 col-main-lik">
                                <h6 class="footer-title text-black"><?php _e('Recreational Programs' , 'highflyers'); ?></h6>
                                <?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-5',
										'menu_class' => 'footer-link-wrap one',
									)
								);
								?>
                            </div>
                            <div class="col-lg-3 col-main-lik">
                                <h6 class="footer-title text-black"><?php _e('Competitive Programs' , 'highflyers'); ?></h6>
                                <?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-6',
										'menu_class' => 'footer-link-wrap two',
									)
								);
								?>
                            </div>
                            <div class="col-lg-3 col-main-lik">
                                <?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-7',
										'menu_class' => 'footer-link-wrap three',
									)
								);
								?>
                            </div>
                            <div class="col-lg-3 col-main-lik">
                                <div class="info-wrap-main">
                                    <h4 class="footer-info-title"><?php echo $get_in_touch_text; ?></h4>
                                    <a class="d-block" href="mailto:<?php echo do_shortcode( '[tap-to-email]' ); ?>">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/mail.svg"
                                            alt="">
                                        <span><?php echo do_shortcode( '[tap-to-email]' ); ?></span>
                                    </a>
                                    <a class="d-block" href="tel:<?php echo do_shortcode( '[tap-to-telephone]' ); ?>">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/Phone.svg"
                                            alt="">
                                        <span><?php echo do_shortcode( '[tap-to-telephone]' ); ?></span>
                                    </a>
                                    <?php $address = get_field('address' , 'option'); ?>
                                    <a target="<?php echo $address['target']; ?>" class="d-block" href="<?php echo $address['url']; ?>">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/location.png"
                                            alt="">
                                        <span><?php echo $address['title']; ?></span>
                                    </a>
                                </div>
                                <h4 class="footer-info-title"><?php echo $stay_connected_text; ?></h4>
                                <?php echo  do_shortcode( '[social-icons-header]' ); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <?php if(!empty($logo_repeater)){ ?>
                <div class="row justify-content-center">
                    <div class="brand-log">
                        <?php foreach($logo_repeater as $logo_image){ 
                            $logo_images = $logo_image['logo_images'];
                            $logo_link  = $logo_image['logo_link'];
                            ?>
                                <a href="<?php echo $logo_link['url']; ?>"><img src="<?php echo $logo_images['url']; ?>" alt=""></a>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="footer-last">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center text-lg-start"> <span class="text-white">
                            <?php if(!empty($copyright_text)){echo $copyright_text; } ?>
                        </span></div>
                    <div class="col-lg-6 text-center text-lg-start my-4 my-lg-0">
                        <div class="footer-bottom-link">
                            <ul class="m-0 p-0">
                                <li>
                                    <?php if (!empty($terms_condition['url']) && $terms_condition['title']) {
                                        echo '<a href="' . $terms_condition['url'] . '" class="">' . $terms_condition['title'] . '</a>';
                                    } ?>
                                </li>
                                <li>
                                    <?php if (!empty($privacy_policy['url']) && $privacy_policy['title']) {
                                        echo '<a href="' . $privacy_policy['url'] . '" class="">' . $privacy_policy['title'] . '</a>';
                                    } ?>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 text-lg-end text-center">
                        <div class="text-white">
                            <?php echo $website_by_text; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>