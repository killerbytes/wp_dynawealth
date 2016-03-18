<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dynawealth
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="single-page-title">
			<div class="container">
				<h1><?php the_title() ?></h1>
			</div>
		</div>

		<main id="main" class="site-main container" role="main">
			<div class="row">
				<div class="col-md-12">
					<?php
					while ( have_posts() ) : the_post();
			
						echo the_content();
			
					endwhile; // End of the loop.
					?>
					
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
