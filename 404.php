<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package highflyers
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php dd_woocommerce_breadcrumb();
	$main_title 		= get_field('main_title','option');
	$page_content 		= get_field('page_content','option');
	$return_home_cta 	= get_field('return_home_cta','option');
	$have_a_question_cta= get_field('have_a_question_cta','option');
	$right_side_image 	= get_field('right_side_image','option');
	?>
	<section class="error-404 not-found m-0">
		<div class="error-row">
				<div class="error-left">
					<div class="error-text">
						<?php
							if(!empty($main_title)){ echo '<h1>'.$main_title.'</h1>'; } 
							if(!empty($page_content)){ echo $page_content; } 
							echo '<div class="btn-div">';
								if (!empty($return_home_cta['url']) && $return_home_cta['title']) {
									echo '<a href="' . $return_home_cta['url'] . '" class="theme-btn">' . $return_home_cta['title'] . '</a>';
								}
								if (!empty($have_a_question_cta['url']) && $have_a_question_cta['title']) {
									echo '<a href="' . $have_a_question_cta['url'] . '" class="theme-btn border-btn">' . $have_a_question_cta['title'] . '</a>';
								}
							echo '</div>';
						?>
					</div>
				</div>
				<div class="error-right">
					<div class="error-404-img">
						<?php if(!empty($right_side_image)){ echo wp_get_attachment_image($right_side_image['id'] , 'full' , '' , array('class' => '', 'alt' => $right_side_image['alt'])); } ?>
					</div>
				</div>
		</div>
	</section><!-- .error-404 -->


	</main><!-- #main -->

<?php
get_footer();
