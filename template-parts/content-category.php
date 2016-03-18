<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dynawealth
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php dynawealth_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary row">
		<?php if ( has_post_thumbnail()) : ?>
			<div class="col-sm-6">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				 	<?php the_post_thumbnail( 'medium', array( 'class' => 'thumbnail' )); ?>
				</a>
			</div>
			<div class="col-sm-6">
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="btn btn-default pull-right">Read More</a>
			</div>
		<?php else : ?>
			<div class="col-sm-12">
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="btn btn-default pull-right">Read More</a>
			</div>
		<?php endif; ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->
<hr>
