<?php
/**
 * The template used for displaying the Books page
 *
 * @package Ryu
 * @subpackage SabinesRyu
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-wrap wrap clear">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title h-sans">', '</h1>' ); ?>
					<!-- <div class="entry-meta">
						<?php // edit_post_link( __( 'Edit', 'ryu' ), '<span class="edit-link">', '</span>' ); ?>
					</div>-->					
					<!-- .entry-meta -->
				</header><!-- .entry-header -->

			<div class="entry-content full-width clear">
				<?php // the_content(); ?>
				<!-- DEMO content -->

				<!-- AMONG MURDERERS -->
				<div class="section book-block clear">
					<div class="section-heading l-margin-b-18 clear">
						<h2 class="book-title l-margin-b-6">Among Murderers: Life After Prison</h2>
						<span class="meta pub-info">University of California Press, March 2013</span>
					</div>	
					
					<!-- feature image -->
					<div class="image-frame block-image column col-1">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/demo/home-feature-among-murderers.png" alt="Among Murderers book cover">
					</div>
					<!-- feature info -->
					<div class="block-info column col-2">
						<blockquote class="blockquote">
							<p>This is the biggest triumph of Heinlein&rsquo;s book: the ability to turn &lsquo;murderers&rsquo; into people. She doesn&rsquo;t shy away from discussing the murders or her own feelings about them, but she manages to do so while keeping us involved and, even more impressively, invested. We don&rsquo;t want them to end up homeless, or commit crimes and land back in prison; we&rsquo;re rooting for them, even though they&rsquo;re murderers.</p>
							<cite class="author">Jillian Steinhauer, <em>Los Angeles Review of Books</em></cite>
						</blockquote>

						<blockquote class="blockquote">
							<p>
								Among Murderers is a remarkable achievement, an eye-opening work of journalistic empathy in the best tradition of Katherine Boo, Ted Conover, and Adrian Nicole LeBlanc. This is a triumphantly humane work of reporting and storytelling.
							</p>
							<cite class="author">Scott Stossel, <em>The Atlantic</em></cite>
						</blockquote>

						<hr class="hairline">
						<!-- BOOK INFO -->	
						<div class="book-info">
							<p>What is it like for a convicted murderer who has spent decades behind bars to suddenly find himself released into a world he barely recognizes? What is it like to start over from nothing? How does it feel to bear the shame of having killed someone?</p>

							<p>Sabine Heinlein spent more than two years at the Fortune Society&rsquo;s Castle, a prominent halfway house in West Harlem, shadowing her book&rsquo;s three protagonists as they painstakingly learn how to master their freedom. Having lived most of their lives behind bars, the men struggle to cross the street, choose a dish at a restaurant, and withdraw money from an ATM. Heinlein&rsquo;s empathetic first-person narrative gives a visceral sense of the men&rsquo;s inner lives and of the institutions they encounter on their odyssey to redemption. <em>Among Murderers</em> asks what constitutes successful rehabilitation and how one faces the prospect of rejoining society with the guilt and shame of having taken another person&rsquo;s life.</p>
						</div>
						<hr class="hairline">
						<!-- BOOK CTA -->
						<div class="book-cta">
							<ul>
								<li><a href="<?php echo get_site_url() . '/press'; ?>" class="content-cta">Read what the critics say</a></li>
							</ul>
							<h3 class="header-content-cta-set">Buy <em>Among Murderers: Life After Prison</em></h3>
							<ul class="block-links vendors">
								<li><a class="block-link" href="http://www.amazon.com/Among-Murderers-Life-after-Prison/dp/0520272854">Amazon</a></li>
							</ul>
						</div>	
					</div>
				</div><!-- /.book-block -->

				<!-- <em>The Orphan Zoo</em> -->
				<div class="section book-block clear">
					<div class="section-heading l-margin-b-18 clear">
						<h2 class="book-title l-margin-b-6">The Orphan Zoo: The Rise and Fall of The Farm at Creedmoor Psychiatric Center</h2>
						<span class="meta pub-info">Thought Catalog, 2014</span>
					</div>	
					
					<!-- feature image -->
					<div class="image-frame block-image column col-1">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/demo/book-feature-orphan-zoo.png" alt="<em>The Orphan Zoo</em> book cover">
					</div>
					<!-- feature info -->
					<div class="block-info column col-2">
						<!-- BOOK INFO -->	
						<div class="book-info">
							<p>For her multimedia ebook <em>The Orphan Zoo</em> Sabine Heinlein spent almost a year reporting at &ldquo;The Farm,&rdquo; a program for mental patients at the notorious Creedmoor Psychiatric Center in Queens. Originally designed to teach its &ldquo;members&rdquo; confidence and skills by caring for animals and plants, the Farm had long become a dysfunctional hoarder&rsquo;s den. The patients sat idly on chairs in a grimy dayroom filled with the therapist&rsquo;s &ldquo;collectibles&rdquo; and garbage. The room was crawling with roaches, and a neglected bunny lived in its own feces and urine under the couches. The farmland had been fallow for years, and at dawn drug dealers gathered around the nearby picnic tables. Heinlein interviewed the members of the Farm until the program finally collapsed in the summer of 2013. Augmented with audio snippets, photos and historic newspaper articles, <em>The Orphan Zoo</em> chronicles the repercussions of deinstitutionalization, the administration&rsquo;s decades-long lack of constructive involvement and the tragic fall of a once-promising program.</p>
						</div>
					</div>
				</div><!-- /.book-block -->

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
		</article><!-- #post-## -->

	<?php endwhile; // end of the loop. ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>