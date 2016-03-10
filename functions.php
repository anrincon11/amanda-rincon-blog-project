<?php
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
		'name' => ('Footer Left'),
		'id' => 'footer-left',
		'description' => 'Widget for the left side of our footer',
		'before_widget' => '<div class="widget-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		));
	register_sidebar( array(
	    'name' => ('Footer Middle'),
	    'id' => 'footer-middle',
	    'description' => 'Widget for the middle of our footer',
	    'before_widget' => '<div class="widget-sidebar">',
	    'after_widget' => '</div>',
	    'before_title' => '<h2>',
	    'after_title' => '</h2>'
	    ));
	register_sidebar( array(
	    'name' => ('Footer-Right'),
	    'id' => 'footer-right',
	    'description' => 'Widget for the right side of our footer',
	    'before_widget' => '<div class="widget-sidebar">',
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

?>
