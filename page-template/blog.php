<?php /*Template Name: Blog */

    echo get_header();

    get_template_part( 'template-parts/template', 'common_banner' );
    get_template_part( 'template-parts/blog/template', 'blog_content' );

    get_footer();

?>