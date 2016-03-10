<?php get_header(); ?>

	<section class="row">

		<div class="two columns">
			<br />
		</div>

		<div class="eight columns">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();?>
					<h3><?php the_title(); ?></h3>
					<?php
					if ( has_post_thumbnail() ) { ?>
						<div class="single-post-thumbnail">
							<?php the_post_thumbnail('large'); ?>
						</div>
					<?php
					}
					?>
					<?php the_content();
				}
			} ?>
		</div>

		<div class="two columns">
			<br />
		</div>

	</section>

<?php get_footer(); ?>
