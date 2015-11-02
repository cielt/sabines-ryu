<?php
	/**
	 * The template for displaying all pages.
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages
	 * and that other 'pages' on your WordPress site will use a
	 * different template.
	 *
	 * @package Ryu
	 * @subpackage SabinesRyu
	 */

	get_header(); ?>

			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
					<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-wrap wrap clear">
							<header class="entry-header">
									<?php the_title( '<h1 class="entry-title h-sans">', '</h1>' ); ?>
									<div class="entry-meta">
									<?php edit_post_link( __( 'Edit', 'ryu' ), '<span class="edit-link">', '</span>' ); ?>
								</div><!-- .entry-meta -->
							</header><!-- .entry-header -->

							<div class="entry-content clear">
								<?php // the_content(); ?>
								<?php 
								$args= array(
									'post_type' => 'writing',
									'orderby' => 'date', 
									'order' => 'DESC'
									);

								$events_query = new WP_Query($args);	

								if( have_posts() ) : 
									while ( $events_query->have_posts() ) : $events_query->the_post(); ?>
								<?php get_template_part( '_content-block', get_post_type() ); ?>
								<?php
								endwhile; 
								wp_reset_postdata();
								endif; ?>	
							</div><!-- /.entry-content -->
						</div><!-- .entry-wrap -->
					</section>
					<!-- page footer -->
					<?php include '_page-footer-widgets.php' ?>
				</div><!-- #content -->
			</div><!-- #primary -->

<?php get_footer(); ?>