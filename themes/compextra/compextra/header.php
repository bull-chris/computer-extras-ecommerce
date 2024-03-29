<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Computer_Extras
 */

?>
<!-- Beginning of the HTML document -->
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<!-- Beginning of the body content -->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Page div -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'compextra' ); ?></a>

	<!-- Header for Computer Extras -->
	<header id="masthead" class="site-header">
		<!-- Custom Logo -->
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
		</div>

		<!-- E-commerce store nav links -->
		<nav id="store-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-store',
					'menu_id'        => 'store-menu',
				)
			);
			?>
		</nav>
		<!-- Newsfeed, About Page, Contact Page navigation -->
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-main',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
	</header><!-- #masthead -->
