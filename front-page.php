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
		<?php if ( have_posts() ) : ?>
			<!-- TODO: implement loop with custom post type for writing features -->
			<?php /* Start the Loop */ ?>
			<?php // while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					// get_template_part( 'content', get_post_format() );
				?>

			<?php // endwhile; ?>
			<div class="hentry">
				<div class="wrap tiles-wrap clear">
				<!-- TILES for demo version -->
				<!-- AMONG MURDERERS -->
				<article class="tile-feature clear">
					<!-- feature thumb -->
					<div class="image-frame feature-thumbnail">
						<a class="tile-link" href="<?php echo get_site_url() . '/books'; ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/demo/home-feature-among-murderers.png"></a>
						<figcaption class="caption">			
							<span class="credit"></span>
						</figcaption>
					</div>
					<div class="feature-info">
						<h2 class="entry-title feature-title h-sans"><a href="<?php echo get_site_url() . '/books'; ?>">Among Murderers: Life After Prison</a></h2>
						<span class="tile-meta feature-pub-title">University of California Press</span>
						<p class="feature-detail">
							<em>And just like that, that was that. No sense of being at all</em>, Angel wrote in the spidery script of a nine-year-old. He titled the new page in his diary Freedom Day, March 29th 2007. He was dazed by the abrupt shock of having dropped from one sphere into another in a matter of seconds. The course that had taken three decades to unfold had suddenly advanced with blinding speed: Attica&rsquo;s prison gates closed behind him. <em>Freedom.</em></p>
						<!-- continue -->
						<a class="continue" href="<?php echo get_site_url() . '/books'; ?>">Continue reading <span class="meta-nav">&rarr;</span></a>
					</div>
				</article>

				<!-- TABLET MAGAZINE: BLACK, JEWISH, AND ADOPTED -->         
        <article class="tile-feature clear">         
					<!-- feature thumb -->           
					<div class="image-frame feature-thumbnail">             
						<a class="tile-link" href="http://www.tabletmag.com/jewish-news-and-politics/188352/black-jewish-and-adopted"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/demo/home-feature-black-jewish-adopted.png"></a>
						<figcaption class="caption">			
							<span class="credit"></span>
						</figcaption>
					</div>           
					<div class="feature-info">
						<h2 class="entry-title feature-title entry-title h-sans"><a href="http://www.tabletmag.com/jewish-news-and-politics/188352/black-jewish-and-adopted">Black, Jewish and Adopted</a></h2>             
						<span class="tile-meta feature-pub-title">Tablet Magazine</span>
						<p class="feature-detail">
							There was really no way of knowing how to deal with society&rsquo;s various forms of racism and ignorance. Neither Lin nor Peter were ever mocked for their skin color or religion, so they &ldquo;invented&rdquo; their responses as they went along. One day Max came home reporting that a kid in school had yelled at him, &ldquo;Your skin is the color of poop!&rdquo; He remembers, &ldquo;We were all talking trash. I was probably yelling terrible things at him. And our team was losing, so I was mad.&rdquo;
						</p>
						<!-- continue -->
						<a class="continue" href="http://www.tabletmag.com/jewish-news-and-politics/188352/black-jewish-and-adopted">Continue reading <span class="meta-nav">&rarr;</span></a>           
					</div>           
				</article>

				<!-- LONGREADS: THE ANSWER IS NEVER -->
				<article class="tile-feature clear">
					<!-- feature thumb -->
					<div class="image-frame feature-thumbnail">
						<a class="tile-link" href="http://blog.longreads.com/2015/04/02/the-answer-is-never/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/demo/home-feature-longreads.png"></a>
						<figcaption class="caption">			
							<span class="credit"></span>
						</figcaption>
					</div>
					<div class="feature-info">
						<h2 class="entry-title feature-title h-sans"><a href="http://blog.longreads.com/2015/04/02/the-answer-is-never/">The Answer is Never</a></h2>
						<span class="tile-meta feature-pub-title">Longreads</span>
						<p class="feature-detail">
							The mainstream conversation is colored by <em>if</em>-arguments, eerily reminiscent of the 1950s, when women without children were pitied (and, possibly, pitied themselves). <em>If I had found the right partner&hellip; If I had had enough money&hellip; If my childhood hadn&rsquo;t been so bad&hellip;</em> Whatever the reasons, they all suggest that something went wrong. I don&rsquo;t have any if-arguments (which doesn&rsquo;t mean that things don&rsquo;t go wrong in my life). I simply never wanted to have children. Not when I was 20, not when I was 30 and not today.</p>
							<!-- continue -->
						<a class="continue" href="http://blog.longreads.com/2015/04/02/the-answer-is-never/">Continue reading <span class="meta-nav">&rarr;</span></a>
					</div>
				</article>

				<!-- THE PARIS REVIEW: SWIMMING WITH OLIVER SACKS -->
				<article class="tile-feature clear">
					<!-- feature thumb -->
					<div class="image-frame feature-thumbnail">
						<a class="tile-link" href="http://www.theparisreview.org/blog/2015/08/31/swimming-with-oliver-sacks/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/demo/home-feature-oliver-sacks.jpg"></a>
						<figcaption class="caption">			
							<span class="credit"><span class="visually-hidden">Photo </span>Billy Hayes</span>
						</figcaption>
					</div>
					<div class="feature-info">
						<h2 class="entry-title feature-title h-sans"><a href="http://www.theparisreview.org/blog/2015/08/31/swimming-with-oliver-sacks/">Swimming with Oliver Sacks</a></h2>
						<span class="tile-meta feature-pub-title">The Paris Review</span>
						<p class="feature-detail">
							Every morning a group of us, including Oliver, would swim across Eagle Lake. Our host, Harriet, insisted on accompanying us in her little metal boat. The motorboats that in recent years had taken over the tranquil lake could not be trusted; it would be easier for them to spot a little boat powered by a very tall and assertive woman than the school of little fish that we were. On land, Oliver&rsquo;s body seemed old and frail, but in the water it was young again.
						</p>
						<!-- continue -->
						<a class="continue" href="http://www.theparisreview.org/blog/2015/08/31/swimming-with-oliver-sacks/">Continue reading <span class="meta-nav">&rarr;</span></a>
					</div>
				</article>
			</div><!-- /.tiles-wrap -->
			</div><!-- /.hentry -->
			<?php ryu_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>