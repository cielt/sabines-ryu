<!-- CONTENT BLOCK: writing > book -->

<div class="section book-block clear">
	<div class="section-heading l-margin-b-18 clear">
		<h2 class="book-title l-margin-b-6"><?php the_title() ?></h2>
		<span class="meta pub-info"><?php echo get_field('publisher') . ', ' . get_field('publication_date') ?></span>
	</div>	
	
	<!-- feature image -->
	<div class="column col-1">
		<div class="image-frame block-image">
			<?php the_post_thumbnail('home-feature-tile'); ?>
		</div>
		<?php // if AM, include ippy medal 
			$current_title = get_the_title();
			if (stristr($current_title, 'among murderers') !== false) : ?>	
			<div class="block-image-info book-honors clear">
				<div class="thumbnail-book-honors"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2015/10/ippy-gold-medal.png"></div>
				<div class="book-honors-info">
					<span class="kicker gold">Gold Medal Winner</span>
					<span class="book-honors-title">2014 IPPY Awards</span>
					<span class="book-honors-meta">Current Events II (Social Issues / Public Affairs / Ecological / Humanitarian)</span>
				</div>
			</div>	
		<?php endif; ?>
	</div>
	<!-- feature info -->
	<div class="block-info column col-2">
		<?php if (get_field('blockquote_1')) : ?>
		<blockquote class="blockquote">
			<p><?php echo get_field('blockquote_1'); ?></p>
			<cite class="author"><?php echo get_field('author_1'); ?></cite>
		</blockquote>
			<?php if (get_field('blockquote_2')) : ?>
				<blockquote class="blockquote">
					<p>
						<?php echo get_field('blockquote_2'); ?>
					</p>
					<cite class="author"><?php echo get_field('author_2'); ?></cite>
				</blockquote>
			<?php endif; ?>	

		<hr class="hairline">
		
		<?php endif; ?>

		<!-- BOOK INFO -->	
	<div class="book-info">
		<?php the_content(); ?>
	</div>
	<?php if (get_field('calls_to_action')) : ?>
	<hr class="hairline">
	<!-- BOOK CTA -->
	<div class="book-cta">
		<?php echo get_field('calls_to_action'); ?>
	</div>
	<?php endif; ?>	
	</div>
</div><!-- /.book-block -->