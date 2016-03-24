<div id="sidebar-content">
	<?php
	if ( has_post_thumbnail() ) { ?>
		<div class="single-post-thumbnail">
			<?php the_post_thumbnail('large'); ?>
		</div>
		<?php
		}
	?>

	<?php dynamic_sidebar('first-widget'); ?>
</div>
