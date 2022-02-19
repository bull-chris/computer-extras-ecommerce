<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Computer_Extras
 */

?>
	<!-- Footer settings for Computer Extras site -->
	<footer id="colophon" class="site-footer">
		<!-- Site links -->
		<div class="site-links">
			<a>About Us</a>
			<span class="sep"> | </span>
			<a>Contact Us</a>
		</div>
		<!-- Wordpress Info -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'compextra' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'compextra' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'compextra' ), 'compextra', '<a href="https://chrisbull-webdevelopment.ca/">Chris Bull</a>' );
				?>
		</div>
		<!-- Site socials -->
		<div class="site-socials">
			<a>Twitter</a>
			<span class="sep"> | </span>
			<a>Facebook</a>
		</div>
		<!-- site copyright -->
		<div class="site-copyright">
			<p>Copyright 2022 Chris Bull</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
