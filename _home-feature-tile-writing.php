<article class="tile-feature home-feature clear">
	<?php // if external URL, open in new tab 
			$tile_url = get_field('read_more_url');
			$tile_url_attrs = '';
			if (stristr($tile_url, 'http://') !== false) {
				$tile_url_attrs = 'rel="external" target="_blank"';	
			}	
	 ?>		
	<!-- feature thumb -->
	<div class="tile-image">
		<a class="image-frame feature-thumbnail tile-link" href="<?php echo get_field('read_more_url') ?>" <?php echo $tile_url_attrs ?>>
			<?php the_post_thumbnail('home-feature-tile'); ?>
		</a>
		<figcaption class="caption">			
			<?php if (get_field('image_credit')) : ?><span class="credit"><?php echo get_field('image_credit') ?></span><?php endif;?>
		</figcaption>
	</div>
	<div class="feature-info">
		<h2 class="entry-title feature-title h-sans"><a href="<?php echo get_field('read_more_url') ?>" <?php echo $tile_url_attrs ?>>
			<?php the_title() ?></a></h2>
		<span class="tile-meta feature-pub-title"><?php echo get_field('publisher') ?></span>
		<div class="feature-detail">
			<?php if (get_field('home_page_feature_excerpt')) { 
				echo get_field('home_page_feature_excerpt'); 
			} else { the_excerpt(); } ?>
		</div>
		<!-- continue -->
		<a class="continue" href="<?php echo get_field('read_more_url') ?>" <?php echo $tile_url_attrs ?>>Continue reading <span class="meta-nav">&rarr;</span></a>
	</div>
</article>
