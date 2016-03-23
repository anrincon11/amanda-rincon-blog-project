<?php get_header(); ?>

	<section class="row">

		<div class="twelve columns">
			<?php
			if ( has_post_thumbnail() ) { ?>
				<div class="single-post-thumbnail">
					<?php the_post_thumbnail('large'); ?>
				</div>
				<?php
				}
			?>
		</div>

		<div class="one columns">
			<br />
		</div>

		<div class="nine columns">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();?>
					<h3><?php the_title(); ?></h3>
					<h6><?php the_date(); ?></h6>

					<?php the_content();
				}
			} ?>
		</div>

		<div class="one columns">
			<br />
		</div>

	</section>

<?php get_footer(); ?>
