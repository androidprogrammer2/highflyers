<?php /*Template Name: Standard Subpage */

    get_header();
    
    get_template_part( 'template-parts/template', 'common_banner' );
    get_template_part( 'template-parts/sub-page/template', 'sub_page_content' );
    get_template_part( 'template-parts/template', 'above_footer' );

    get_footer();

?>