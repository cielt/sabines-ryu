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
 * @package Ryu
 * @subpackage SabinesRyu
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="hentry">
				<div class="wrap tiles-wrap clear">
				<!-- TILES for demo version -->
				<?php 
					$args= array(
						'post_type' => 'writing',
						'posts_per_page' => 4,
						'meta_query'	=> array(
						'relation'		=> 'AND',
							array(
								'key'	 	=> 'is_home_page_feature',
								'value'	  	=> '1',
								'compare' 	=> '==',
							),
						),
						'meta_key' => 'home_page_feature_order', 
						'orderby' => 'meta_value',
						'order' => 'ASC'
					);

					$home_features_query = new WP_Query($args);	
					
					if( have_posts() ) : 
						while ( $home_features_query->have_posts() ) : $home_features_query->the_post(); ?>
							<?php get_template_part( '_home-feature-tile', get_post_type() ); ?>
					<?php
						endwhile; 
						wp_reset_postdata(); ?>
				</div><!-- /.tiles-wrap -->
			</div><!-- /.hentry -->
			<!-- page footer -->
			<?php include '_page-footer-widgets.php' ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>