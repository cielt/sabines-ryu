<?php
/**
 * The template used for displaying the Book page
 *
 * @package Ryu
 * @subpackage SabinesRyu
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-wrap wrap clear">
				<!-- PAGE TITLE -->
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title h-sans">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content full-width clear">
					<?php 
					$args= array(
						'meta_key' => 'publication_date',
						'orderby' => 'meta_value', 
						'order' => 'DESC',
						'post_type' => 'writing',
						'meta_query' => array(
							'relation' => 'AND',
							array(
								'key'	=> 'include_on_book_page',
								'value' => '1',
								'compare' => '=',
							),
							array(
								'key' => 'publication_date',
								'value' => '',
								'compare' => '!=',
							),
						)
					);

					$books_query = new WP_Query($args);	
					
					if( have_posts() ) : 
						while ( $books_query->have_posts() ) : $books_query->the_post(); ?>
							<?php get_template_part( '_content-block', get_post_type() . "-book" ); ?>
					<?php
						endwhile; 
						wp_reset_postdata();
					endif; ?>

				<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ryu' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					) );
					?>
				</div><!-- .entry-content -->
			</div><!-- .entry-wrap -->
		</section><!-- #page-## -->
		<!-- page footer -->
		<?php include '_page-footer-widgets.php' ?>
</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>