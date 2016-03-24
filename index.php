<?php get_header(); ?>

		<section class="row">
			<div class="twelve columns">
				<?php
					if ( have_posts() ) {
					    while ( have_posts() ) {
					        the_post(); ?>
						<div class="four columns">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?>
							<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						</div>

							<?php } // end while
					} // end if
				?>
			</div>
		</section>

<?php get_footer(); ?>
