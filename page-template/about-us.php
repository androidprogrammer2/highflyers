<?php /*Template Name: About Us */

get_header();

get_template_part( 'template-parts/template', 'common_banner' );
get_template_part( 'template-parts/about-us/template', 'gymnastics' );
get_template_part( 'template-parts/about-us/template', 'our_experiance' );
get_template_part( 'template-parts/about-us/template', 'gym_set_up' );
get_template_part( 'template-parts/about-us/template', 'international' );
get_template_part( 'template-parts/about-us/template', 'all_abilities' );
get_template_part( 'template-parts/template', 'above_footer' );

get_footer();

?>