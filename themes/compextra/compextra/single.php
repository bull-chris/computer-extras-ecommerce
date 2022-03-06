<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Computer_Extras
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			?>
			<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'compextra' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'compextra' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// Disable comments, uncomment if wanted in the future
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
