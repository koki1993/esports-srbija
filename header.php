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
	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="primary-collapse" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?>
		     	<a href="<?php echo home_url('/'); ?>" class="site-name"><img class="" src="<?php echo $image[0]; ?>" alt="">ESPORTS<br>SRBIJA</a>
		    </div>
				<?php
			 		wp_nav_menu( array(
						'menu'              => 'Primary Menu',
						'theme_location'    => 'primary-menu',
						//'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'primary-collapse',
						'menu_class'        => 'nav navbar-nav navbar-right',
						//'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						//'walker'            => new WP_Bootstrap_Navwalker())
			 			)
					);
	 	 		?>
		  </div><!-- /.container-fluid -->
		</nav>
	</header>

	<div id="content" class="site-content">
