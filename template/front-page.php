<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package dazzling
 */

get_header(); ?>

			<div class="jssor-slider">
				<?php $slider_list = get_field("slider_list"); ?>
			    <!-- Slides Container -->
			    <div u="slides">
					<?php if ($slider_list){ ?> 
						<?php foreach( $slider_list as $post): ?>
		      			<?php setup_postdata($post); ?>
						<div>
							<?php echo the_post_thumbnail('full', array( 'u' => 'image' )); ?>
							<div class="slider-content">
								<div class="slider-content-bg"></div>
								<div class="slider-text">
                            		<a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
                				</div>
							</div>
						</div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					<?php } ?>
			    </div>
		        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
		            <!-- bullet navigator item prototype -->
		            <div u="prototype"></div>
		        </div>
		        <!-- Arrow Left -->
		        <span u="arrowleft" class="jssora09l" style="top: 123px; left: 8px;">
		        </span>
		        <!-- Arrow Right -->
		        <span u="arrowright" class="jssora09r" style="top: 123px; right: 8px;">
		        </span>
			</div>


        <div id="content" class="site-content container">
            
            <div class="container main-content-area"><?php
            
                global $post;
                if( get_post_meta($post->ID, 'site_layout', true) ){
                        $layout_class = get_post_meta($post->ID, 'site_layout', true);
                }
                else{
                        $layout_class = of_get_option( 'site_layout' );
                }
                if( is_home() && is_sticky( $post->ID ) ){
                        $layout_class = of_get_option( 'site_layout' );
                }
                ?>
                <div class="row <?php echo $layout_class; ?>">


					<div id="primary" class="content-area col-sm-12 col-md-12">
						<main id="main" class="site-main front-page home-grid-list" role="main">
							<div class="row text-center">
							<?php 
								$home_grid_list = get_field("home_grid_list");
							?>
							<?php if ($home_grid_list){ ?> 
								<?php foreach( $home_grid_list as $post): ?>
				      			<?php setup_postdata($post); ?>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="icon-wrapper"><i class="glyphicon glyphicon-star"></i></div>
										<h3><?php echo the_field("title"); ?></h3>
										<p><?php echo the_field("message"); ?></p>
									</div>
								<?php endforeach; ?>
								<?php wp_reset_postdata(); ?>
							<?php } ?>

							</div>
						</main><!-- #main -->
					</div><!-- #primary -->

                </div><!-- close .row -->
            </div><!-- close .container -->
        </div><!-- close .site-content -->
        <div class="top-section text-center">
		    <div class="message-from-the-ceo">
		      <div class="container">
		        <div><h3><?php the_field('callout'); ?></h3><p>-Joe DiPaola, WFG President & CEO</p></div>
		      </div>
		    </div>
		</div>


<?php get_footer(); ?>
