<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Esports_Srbija
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'esports-srbija' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<section>
			<nav class="main-navigation navbar">
				<a class="navbar-brand" href="home.php">GAMES<br>SERBIA</a>
			  <div class="container-fluid">
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">NASLOVNA</a></li>
							<li><a href="#">ESPORTS</a></li>
							<li><a href="#">FORUM</a></li>
							<li><a href="#">O NAMA</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</section>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
