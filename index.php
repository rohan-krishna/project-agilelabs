<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package project-agilelabs
 */

get_header(); ?>

		<div id="main" class="" role="main">
			<div class="section header-menu">
				<div class="container">
				<div class="row">
					<div class="col-md-3 text-center">
						<h1>AgileLabs</h1>
					</div>
					<div class="col-md-3 col-md-offset-4 text-center">
						<h1>Menu</h1>
					</div>
				</div><!-- .row -->
				<div class="row">
					<div class="col-md-12">
						<div class="logo-wrapper">
							<h1>Logo</h1>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-4 margin-152 text-center">
						<a class="btn btn-more" href="#">Know More</a>
						<a class="btn btn-contact" href="#">Contact Us</a>
					</div>
				</div><!-- .row !-->
				</div><!-- .container -->
			</div><!-- .header-menu -->
			<div class="section courses-wrapper">
				<div class="container">
				<div class="row">
					<div class="col-md-12 margin-152">
						<div class="col-md-3">
							<div class="placeholder circle-placeholder"></div>
						</div>
						<div class="col-md-3">
							<div class="placeholder circle-placeholder"></div>
						</div>
						<div class="col-md-3">
							<div class="placeholder circle-placeholder"></div>
						</div>
						<div class="col-md-3">
							<div class="placeholder circle-placeholder"></div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div><!-- #main -->

<?php get_footer(); ?>
