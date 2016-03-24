<?php

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );


/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
	register_sidebar( array(
		'name' => ('Page Sidebar'),
		'id' => 'page',
		'description' => 'Widget for the left side of our pages',
		'before_widget' => '<div class="widget-sidebar widget-page">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		));
	register_sidebar( array(
		'name' => ('Featured Post'),
		'id' => 'featured-post',
		'description' => 'Widget for the top of our home page',
		'before_widget' => '<div class="widget-sidebar widget-page widget-feature">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		));
    }
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */

add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/

add_theme_support( 'post-thumbnails' );

/*---------- Web Dev Custom Taxanomies----------- */

function custom_taxonomy_wie_init() {
    // create a new taxonomy
    register_taxonomy(
        'webdevelopment',
        'post',
        array(
            'hierarchical' => true,
            'label' => 'Web Development',
			'query_var' => true
        )
    );
}
add_action( 'init', 'custom_taxonomy_wie_init' );

?>
