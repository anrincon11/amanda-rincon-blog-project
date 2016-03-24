<div id="sidebar-content">
	<?php
	if ( has_post_thumbnail() ) { ?>
		<div class="single-post-thumbnail">
			<?php the_post_thumbnail('large'); ?>
		</div>
		<?php
		}
	?>

	<?php dynamic_sidebar('page'); ?>

	<h2>Web Dev Categories</h2>
	<ul>
	<?php

	$args = array(
	    'orderby'           => 'name',
	    'hierarchical'      => true,
	  );

	$terms = get_terms('webdevelopment', $args);

	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	    $count = count( $terms );
	    $i = 0;
	    $term_list = '<li>';
	    foreach ( $terms as $term ) {
	        $i++;
	        $term_list .= '<a href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) . '">' . $term->name . '</a>';
	        if ( $count != $i ) {
	            $term_list .= ' &middot; ';
	        }
	        else {
	            $term_list .= '</li>';
	        }
	    }
	    echo $term_list;
	}
	?>
	</ul>
</div>
