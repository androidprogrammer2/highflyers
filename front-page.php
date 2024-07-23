<?php 
get_header();
?>
<?php
get_template_part( 'template-parts/home/template', 'home_banner_section' );
get_template_part( 'template-parts/home/template', 'home_feature_sec' );
get_template_part( 'template-parts/home/template', 'descipliens_section' );
get_template_part( 'template-parts/home/template', 'party_sections' );
get_template_part( 'template-parts/home/template', 'home_Purpose_sec' );
get_template_part( 'template-parts/home/template', 'home_team_sec' );
get_template_part( 'template-parts/home/template', 'our_achievements' );
get_template_part( 'template-parts/home/template', 'testimonial' );
get_template_part( 'template-parts/home/template', 'social_section' );

get_footer();
?>