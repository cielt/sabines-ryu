<?php if (get_field('is_hidden_from_stories_page') != '1') : ?>
<article class="content-block-writing">
	<!-- Event Info -->
	<div class="writing-details">
		<h2 class="entry-title mb-12">
		<?php if (get_field('read_more_url')) : ?>
		<a href="<?php echo get_field('read_more_url') ?>"><?php the_title() ?></a>
		<?php else :
			the_title(); 
		endif ?>
		</h2>
		<div class="block-meta">
		<span class="publisher">
			<?php if (get_field('publisher')) { 
				echo '<em>' . get_field('publisher') . '</em>'; 
			} ?>
		</span>
		<span class="divider">|</span>	
		<span class="publish-date">
			<?php if (get_field('publication_date')) { 
				echo get_field('publication_date'); 
			} ?>
		</span>
		</div>
		<div class="feature-detail"><?php the_excerpt() ?></div>
		<!-- continue -->
		<a class="continue" href="<?php echo get_field('read_more_url') ?>">Read more <span class="meta-nav">&rarr;</span></a>
	</div>
</article>
<?php endif; ?>