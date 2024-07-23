<?php
get_header();
?>
    <?php get_template_part( 'template-parts/program-child/child-banner/template', 'program_child_banner' );?>
	<main id="primary" class="site-main">

		<?php
            while ( have_posts() ){
                the_post();
                get_template_part( 'template-parts/program-child/template', 'program_single_lists');
            }
		?>
        <?php get_template_part( 'template-parts/program-child/above-footer/template', 'program_child_question_footer' );?>
	</main>

<?php

get_footer();