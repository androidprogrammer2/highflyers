<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package highflyers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e('Skip to content', 'highflyers'); ?></a>

        <?php 
			$header_logo 	= get_field('header_logo' , 'option');
			$parent_portal 	= get_field('parent_portal' , 'option');
			$faqs 			= get_field('faqs' , 'option');
            $blog_url 			= get_field('blog_url' , 'option');
			$header_email 	= get_field('header_email' , 'option');
			?>

        <header id="masthead" class="site-header">
            <div class="main_header">
                <div class="container">
                    <div class="row align-items-center  align-items-lg-center">
                        <div class="wrap-logo">
                            <div class="logo">
                                <a href="<?php echo home_url(); ?>" class="custom-logo-link">
                                    <img src="<?php echo $header_logo['url']; ?>" class="custom-logo" alt="Highflyers">
                                </a>
                            </div>
                        </div>
                        <div class="wrap-main-link d-lg-block d-none">
                            <div class="top-info-bar">
                                <div class="d-flex  justify-content-between align-items-center">
                                    <ul class="list-unstyled list-unstyled m-0 d-flex gap-4">
                                        <li>
                                            <?php if (!empty($parent_portal['url']) && $parent_portal['title']) {
												echo '<a target="_blank" href="' . $parent_portal['url'] . '" class="d-flex gap-2 align-items-center"><img src="'.get_stylesheet_directory_uri().'/assets/images/user.svg"><span class="text-link">'.$parent_portal['title'].'</span></a>';
											} ?>
                                        </li>
                                        <li>
                                            <?php if (!empty($faqs['url']) && $faqs['title']) {
												echo '<a target="" href="' . $faqs['url'] . '" class="d-flex gap-2 align-items-center"><img src="'.get_stylesheet_directory_uri().'/assets/images/question.svg"><span class="text-link">'.$faqs['title'].'</span></a>';
											} ?>
                                        </li>
                                        <li>
                                            <?php if (!empty($blog_url['url']) && $blog_url['title']) {
												echo '<a target="" href="' . $blog_url['url'] . '" class="d-flex gap-2 align-items-center"><span class="text-link">'.$blog_url['title'].'</span></a>';
											} ?>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled list-unstyled m-0 m-0 d-flex gap-4">
                                        <li>
                                            <a href="mailto:<?php echo $header_email; ?>"
                                                class="d-flex gap-2 align-items-center">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/mail.svg"
                                                    alt="">
                                                <span
                                                    class="text-link"><?php echo $header_email; ?></span>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="tel:<?php echo do_shortcode( '[tap-to-telephone]' ); ?>"
                                                class="d-flex gap-2 align-items-center">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/Phone.svg"
                                                    alt="">
                                                <span
                                                    class="text-link"><?php echo do_shortcode( '[tap-to-telephone]' ); ?></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-link-nav">
                                <nav id="site-navigation" class="main-navigation">
                                    <?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id' => 'primary-menu',
										)
									);
									?>
                                </nav>
                                <nav id="site-navigation" class="main-navigation">
                                    <?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-2',
											'menu_id' => 'secondPrimary-menu',
										)
									);
									?>
                                </nav>
                                <!-- #site-navigation -->
                            </div>
                        </div>
                        <div class="menu-icon d-lg-none">
                            <a href="javascript:void(0)" class="menubar-btn">
                                <svg width="27" height="19" viewBox="0 0 27 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="27" height="3" rx="1" fill="#000"></rect>
                                    <rect y="8" width="27" height="3" rx="1" fill="#000"></rect>
                                    <rect y="16" width="27" height="3" rx="1" fill="#000"></rect>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- #masthead -->

        <div class="offcanvas-bg">

        </div>
        <div class="mobile-menu-wp">
            <span class="menubar-btn-close">
                <img class="d-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/close.svg"
                    alt="" />
            </span>
            <div class="wrap-mobile-menu">
                <nav class="mobile-menu-items">
                    <div class="menu-main-menu-container">
                        <?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-3',
								'menu_class' => 'menu-link-wrap',
							)
						);
						?>
                    </div>
                </nav>
                <div class="wrap-other-link">
                    <ul class="list-unstyled list-unstyled  d-block">
                        <li>
                            <?php if (!empty($parent_portal['url']) && $parent_portal['title']) {
												echo '<a target="_blank" href="' . $parent_portal['url'] . '" class="d-flex gap-2 align-items-center"><img src="'.get_stylesheet_directory_uri().'/assets/images/user.svg"><span class="text-link">'.$parent_portal['title'].'</span></a>';
											} ?>
                        </li>
                        <li>
                            <?php if (!empty($faqs['url']) && $faqs['title']) {
												echo '<a target="" href="' . $faqs['url'] . '" class="d-flex gap-2 align-items-center"><img src="'.get_stylesheet_directory_uri().'/assets/images/question.svg"><span class="text-link">'.$faqs['title'].'</span></a>';
											} ?>
                        </li>
                    </ul>
                    <ul class="list-unstyled list-unstyled m-0 m-0 d-block">
                        <li>
                            <a href="mailto:<?php echo $header_email; ?>"
                                class="d-flex gap-2 align-items-center">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/mail.svg" alt="">
                                <span class="text-link"><?php echo $header_email; ?></span>
                            </a>

                        </li>
                        <li>
                            <a href="tel:<?php echo do_shortcode( '[tap-to-telephone]' ); ?>"
                                class="d-flex gap-2 align-items-center">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/Phone.svg" alt="">
                                <span class="text-link"><?php echo do_shortcode( '[tap-to-telephone]' ); ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>