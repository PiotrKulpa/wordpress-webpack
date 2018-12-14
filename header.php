<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webpack-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,400" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="nav-search-input-wrapper">

	<div class="nav-search-input">
		<div class="nav-search-close"><i class="fas fa-window-close"></i></div>
		<!-- ?php get_search_form(); ? -->
		<form role="search" method="get" class="search-form" action=<?php echo site_url(); ?>>
				<label>
					<span class="screen-reader-text">Szukaj:</span>
					<input type="search" class="search-field" placeholder="Szukaj …" value="" name="s">
				</label>
				<span class="nav-submit-icon"><i class="fas fa-search"></i></span>
				<input type="submit" class="search-submit" value="">
			</form>
	</div>
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'webpacktheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$webpacktheme_description = get_bloginfo( 'description', 'display' );
			if ( $webpacktheme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $webpacktheme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'webpacktheme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
		<div class="nav-search">
			<i class="fas fa-search"></i>
		</div>
		<!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
