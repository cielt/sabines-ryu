<article class="row-event clear">
	<div class="feature-info">
		<!-- Date, Venue -->
		<div class="event-when-where">
		<div class="time-date">
			<?php 
				$event_date = get_field('event_date');
				$format = 'Ymd';
				$date = DateTime::createFromFormat($format, $event_date);
				echo '<span class="event-date-weekday">' . $date->format('D') . '</span> ';
				echo '<span class="event-date-calendar-date">' . $date->format('M d, Y') . '</span>';
			?>
			<?php if (get_field('event_start_time')) : ?>
			<span class="event-date-start-time">
				<?php echo get_field('event_start_time') ?>
			</span>
		<?php endif ?>
		</div>
		<div class="venue-info">
			<span class="venue-name">
				<?php echo get_field('event_venue_name') ?>
			</span>
			<address class="venue-address">
				<?php echo get_field('event_venue_address') ?>
			</address>
		</div>
		</div>
		<!-- Event Info -->
		<div class="event-details">
		<h3 class="event-title h-sans"><a href="<?php echo get_field('more_info_url') ?>">
			<?php the_title() ?></a></h3>
		<p class="feature-detail"><?php the_content() ?></p>
		</div>
		<!-- Info -->
		<div class="more-info">
			<a class="button-link" href="<?php echo get_field('more_info_url') ?>">Info</a>
		</div>
	</div>
</article>