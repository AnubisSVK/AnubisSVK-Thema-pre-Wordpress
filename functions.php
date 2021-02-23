<?php

function register_menu_location() {
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation' ),
	) );
}
add_action( 'after_setup_theme', 'register_menu_location' );

function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'AnubisSVK', 'AnubisSVK' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'AnubisSVK' ),
            'before_widget' => '<div class="col-xs-12 col-md-3">',
            'after_widget' => "</div>",
            'before_title' => '<h2 class="mt-4">',
            'after_title' => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );