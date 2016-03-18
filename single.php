<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dynawealth
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="single-page-title">
			<div class="container">
				<h1><?php single_cat_title() ?></h1>
			</div>
		</div>
		<main id="main" class="site-main container" role="main">
		<div class="row">
			<div class="col-md-8">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', get_post_format() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
				
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
