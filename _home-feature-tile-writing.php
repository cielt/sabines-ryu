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
		<p class="feature-detail"><?php the_excerpt() ?></p>
		<!-- continue -->
		<a class="continue" href="<?php echo get_field('home_page_feature_url') ?>">Continue reading <span class="meta-nav">&rarr;</span></a>
	</div>
</article>
