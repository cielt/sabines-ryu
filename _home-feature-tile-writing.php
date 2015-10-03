<article class="tile-feature clear">
	<!-- feature thumb -->
	<div class="image-frame feature-thumbnail">
		<a class="tile-link" href="<?php echo get_field('home_page_feature_url') ?>">
			<?php the_post_thumbnail('full'); ?>
		</a>
		<figcaption class="caption">			
			<?php if (get_field('image_credit')) : ?><span class="credit"><?php echo get_field('image_credit') ?></span><?php endif;?>
		</figcaption>
	</div>
	<div class="feature-info">
		<h2 class="entry-title feature-title h-sans"><a href="<?php echo get_field('home_page_feature_url') ?>">
			<?php the_title() ?></a></h2>
		<span class="tile-meta feature-pub-title"><?php echo get_field('publisher') ?></span>
		<p class="feature-detail">
			<em>And just like that, that was that. No sense of being at all</em>, Angel wrote in the spidery script of a nine-year-old. He titled the new page in his diary Freedom Day, March 29th 2007. He was dazed by the abrupt shock of having dropped from one sphere into another in a matter of seconds. The course that had taken three decades to unfold had suddenly advanced with blinding speed: Attica&rsquo;s prison gates closed behind him. <em>Freedom.</em></p>
		<!-- continue -->
		<a class="continue" href="<?php echo get_field('home_page_feature_url') ?>">Continue reading <span class="meta-nav">&rarr;</span></a>
	</div>
</article>
