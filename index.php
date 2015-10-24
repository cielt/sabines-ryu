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
		<div id="content" class="site-content <?php if ( is_home() ) : ?>has-sidebar<?php endif; ?>" role="main">
		<?php if ( have_posts() ) : ?>
			<!-- TODO: implement loop with custom post type for writing features -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>
	
			<?php ryu_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>
		<!-- if blog page, include sidebar -->
		<?php if ( is_home() ) : ?>
			<?php include '_sidebar-book.php' ?>
		<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>