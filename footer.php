<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Esports_Srbija
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<section>
				<div class="container">
					<div class="row">
						<div class="footer-menu">
							<a href="#">NASLOVNA</a>
							<a href="#">NOVO</a>
							<a href="#">FORUM</a>
							<a href="#">O NAMA</a>
						</div>
						<div>
							<a href="#" class="footer-icons"><?php echo twitter(); ?></a>
							<a href="#" class="footer-icons"><?php echo facebook(); ?></a>
						</div>
						<p>@2017 All rights reserved</p>
					</div>
				</div>
			</section>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
