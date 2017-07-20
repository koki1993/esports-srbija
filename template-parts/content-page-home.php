<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Esports_Srbija
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="first-section">
		<div class="container">
				<!-- Swiper -->
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php

						// check if the repeater field has rows of data
						if( have_rows('text_slide') ):

						 	// loop through the rows of data
						    while ( have_rows('text_slide') ) : the_row();

						        // display a sub field value
						        $title = get_sub_field('home_page_title');
										$text = get_sub_field('home_page_text');
										$link = get_sub_field('home_page_link');
										?>
										<div class="slider-container swiper-slide">
											<div class="row">
												<div class="col-md-5">
													<h1><?php echo $title; ?></h1>
													<p><?php echo $text; ?></p>
													<a class="red-button" href="<?php echo $link; ?>">SAZNAJTE VISE</a>
												</div>
											</div>
										</div>
										<?php
						    endwhile;

						endif;

						?>

					</div>
				</div>
		</div>
	</section>
	<section class="second-section">
		<div class="container" style="margin-top: -175px;">
			<div class="second-section-container">
				<a class="link link__black" href="#">MOBA</a>
				<a class="link link__orange" href="#">POGLEDAJ SVE</a>
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="second-section-container">
				<a class="link link__black" href="#">MOBA</a>
				<a class="link link__orange" href="#">POGLEDAJ SVE</a>
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="second-section-container">
				<a class="link link__black" href="#">MOBA</a>
				<a class="link link__orange" href="#">POGLEDAJ SVE</a>
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="second-section-container">
				<a class="link link__black" href="#">MOBA</a>
				<a class="link link__orange" href="#">POGLEDAJ SVE</a>
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#">
							<div class="second-section-item">
							</div>
						</a>
						<div class="item-name">
							<a href="#">League of Legends</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="third-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h1>Esports u Srbiji</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
					<a class="red-button" href="#">SAZNAJTE VISE</a>
				</div>
			</div>
		</div>
	</section>
</article>
