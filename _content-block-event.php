<article class="row-event clear">
	<div class="feature-info clear">
		<!-- Date, Venue -->
		<div class="event-when-where">
			<div class="time-date">
				<?php 
					$event_date = get_field('event_date');
					$format = 'Ymd';
					$date = DateTime::createFromFormat($format, $event_date);
					echo '<span class="event-date-calendar-date">' . $date->format('D M d, Y') . '</span>';
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
			<h3 class="event-title"><a href="<?php echo get_field('more_info_url') ?>">
				<?php the_title() ?></a></h3>
			<p class="feature-detail"><?php the_content() ?></p>
		</div>
		<!-- More Info -->
			<div class="more-info ">
				<ul class="block-links">
					<li><a class="block-link" href="<?php echo get_field('more_info_url') ?>">Details</a></li>
				</ul>
			</div>
	</div>
</article>