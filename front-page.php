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
						'meta_key' => 'home_page_feature_order', 
						'orderby' => '1',
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
			<!-- Page footer widget blocks -->
			<div id="nav-below" class="tiles-wrap page-footer">
				<div class="wrap clear">
					<div class="tile-widget tile-2x">
						<h3 class="widget-block-title h-sans">About</h3>
						<p><strong>Sabine Heinlein</strong> is the author of the narrative nonfiction book <a href="http://www.amazon.com/Among-Murderers-Life-after-Prison/dp/0520272854" target="_blank"><strong><em>Among Murderers: Life After Prison (University of California Press, 2013)</em></strong></a>, which has won the 2014 Gold IPPY award in the category current affairs/social issues.&nbsp;&nbsp;<a class="continue" href="<?php echo site_url(); ?>/about">More <span class="meta-nav">→</span></a></p>
					</div>
					<div class="tile-widget">
						<h3 class="widget-block-title h-sans">Contact</h3>
						<ul class="no-bullet">
							<li><span class="content-cta">sabine [at] sabineheinlein [dot] org</span></li>
							<li><span class="ico-social" title="Twitter" aria-hidden="true">
									&#61954;<b class="screen-reader-text">Sabine Heinlein on Twitter</b>
								</span><a href="https://twitter.com/sabineheinlein" target="_blank" class="content-cta">
								 @sabineheinlein
								</a>
							</li>
						</ul>
						</div>
						<div class="tile-widget last">
						<h3 class="widget-block-title h-sans">Projects</h3>
						<ul class="no-bullet">
							<li><a class="content-cta" href="http://www.sunnysidesoundproject.org/" rel="external" target="_blank">Sunnyside Sound Project</a></li>
						</ul>
						</div>
				</div>
		</div>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>