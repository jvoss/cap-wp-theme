<?php
/**
 * Plugin Update Checking
 *
 */
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/jvoss/cap-wp-theme/',
	__FILE__,
	'cap-wp-theme'
);

/**
 * Register dynamic menu areas.
 *
 */
add_theme_support( 'menus' );
register_nav_menus(
    array(
        'top-right-menu' => __( 'Top Right Menu' ),
        'tab-menu'       => __( 'Tab Menu' ),
        'main-menu'      => __( 'Main Menu', 'blankslate' ),
        'footer-menu'    => __( 'Footer Menu' )
    )
);

/**
 * Register widgetized footer areas.
 *
 */
function footer_widgets_init() {

    register_sidebar( array(
    		'name'          => 'Slide Show',
    		'id'            => 'slide_show',
    		'before_widget' => null,
    		'after_widget'  => null,
    		'before_title'  => null,
    		'after_title'   => null,
    	) );

    register_sidebar( array(
    		'name'          => 'Footer Column 1',
    		'id'            => 'footer_column_1',
    		'before_widget' => null,
    		'after_widget'  => null,
    		'before_title'  => '<div class="footerBoxTitle">',
    		'after_title'   => '</div>',
    	) );

	register_sidebar( array(
		'name'          => 'Footer Column 2',
		'id'            => 'footer_column_2',
		'before_widget' => null,
		'after_widget'  => null,
		'before_title'  => '<div class="footerBoxTitle">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
        'name'          => 'Footer Column 3',
        'id'            => 'footer_column_3',
        'before_widget' => null,
        'after_widget'  => null,
        'before_title'  => '<div class="footerBoxTitle">',
        'after_title'   => '</div>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer Column 4',
        'id'            => 'footer_column_4',
        'before_widget' => null,
        'after_widget'  => null,
        'before_title'  => '<div class="footerBoxTitle">',
        'after_title'   => '</div>',
    ) );

}
add_action( 'widgets_init', 'footer_widgets_init' );
?>