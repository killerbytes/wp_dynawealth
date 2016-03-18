<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dynawealth
 */

get_header(); ?>
<div class="row">
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
					if ( have_posts() ) : ?>
				
				
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();
				
							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'category' );
				
						endwhile;
				
						the_posts_navigation();
				
					else :
				
						get_template_part( 'template-parts/content', 'none' );
				
					endif; ?>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer();
