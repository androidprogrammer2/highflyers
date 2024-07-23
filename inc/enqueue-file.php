<?php

/**
 * Enqueue scripts and styles.
 */

 function highfly_scripts() {
	wp_enqueue_style( 'highflyers-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'highflyers-style', 'rtl', 'replace' );

 // css
 wp_enqueue_style ('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css' , '' , time() , false);
 wp_enqueue_style ('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.min.css' , '' , time() , false);
 wp_enqueue_style ('slick-css', get_template_directory_uri().'/assets/css/slick.min.css' , '' , time() , false);
 wp_enqueue_style ('slick-theme-css', get_template_directory_uri().'/assets/css/slick-theme.min.css' , '' , time() , false);
 wp_enqueue_style ('our-facility-img-text', get_template_directory_uri().'/assets/css/our-facility-img-text.css' , '' , time() , false);
 wp_enqueue_style ('innerbanner', get_template_directory_uri().'/assets/css/innerbanner.css' , '' , time() , false);
 wp_enqueue_style ('simple-img', get_template_directory_uri().'/assets/css/simple-img.css' , '' , time() , false);
 wp_enqueue_style ('about-gym-set', get_template_directory_uri().'/assets/css/about-gym-set.css' , '' , time() , false);
 wp_enqueue_style ('about-international-stage', get_template_directory_uri().'/assets/css/about-international-stage.css' , '' , time() , false);
 wp_enqueue_style ('swiper-css', get_template_directory_uri().'/assets/css/swiper.css' , '' , time() , false);
 wp_enqueue_style ('home-css', get_template_directory_uri().'/assets/css/home.css' , '' , time() , false);
 wp_enqueue_style ('our-team', get_template_directory_uri().'/assets/css/our-team.css' , '' , time() , false);
 wp_enqueue_style (' get-in-touch', get_template_directory_uri().'/assets/css/get-in-touch.css' , '' , time() , false);
 wp_enqueue_style ('testimonials', get_template_directory_uri().'/assets/css/testimonials.css' , '' , time() , false);
 wp_enqueue_style ('map', get_template_directory_uri().'/assets/css/map.css' , '' , time() , false);
 wp_enqueue_style ('faq', get_template_directory_uri().'/assets/css/faq.css' , '' , time() , false);
 wp_enqueue_style ('404', get_template_directory_uri().'/assets/css/404.css' , '' , time() , false);
 wp_enqueue_style ('one-column-bg-sec', get_template_directory_uri().'/assets/css/one-column-bg-sec.css' , '' , time() , false);
 wp_enqueue_style ('blog-css', get_template_directory_uri().'/assets/css/blog-post.css' , '' , time() , false);
 wp_enqueue_style ('contact', get_template_directory_uri().'/assets/css/contact.css' , '' , time() , false);
 wp_enqueue_style ('recreational-programs', get_template_directory_uri().'/assets/css/recreational-programs.css' , '' , time() , false);
 wp_enqueue_style ('competitive', get_template_directory_uri().'/assets/css/competitive-programs.css' , '' , time() , false);
 wp_enqueue_style ('program-css', get_template_directory_uri().'/assets/css/program.css' , '' , time() , false);
 wp_enqueue_style ('custom', get_template_directory_uri().'/assets/css/custom.css' , '' , time() , false);


// js
 wp_enqueue_script('jquery-min', get_template_directory_uri().'/assets/js/jquery-3.7.1.min.js' ,'' , time() , true);
 wp_enqueue_script('magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.js' ,'' , time() , true);
 wp_enqueue_script('slick-js', get_template_directory_uri().'/assets/js/slick.min.js' ,'' , time() , true);
 wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js' ,'' , time() , true);
 wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/js/swiper.js' ,'' , time() , true);
 wp_enqueue_script('home-js', get_template_directory_uri().'/assets/js/home.js' ,'' , time() , true);
 wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js' ,'' , time() , true);
 wp_enqueue_script('dev-custom', get_template_directory_uri().'/assets/js/dev-custom.js' ,'' , time() , true);
 wp_localize_script( 'dev-custom', 'ajax_object', array(
	'ajax_url' => admin_url('admin-ajax.php'),
	'nonce' => wp_create_nonce('load_more_posts_nonce')
 ) );

}
add_action( 'wp_enqueue_scripts', 'highfly_scripts' );