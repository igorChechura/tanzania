<?php

// register menus
add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu'      => 'Header menu',
		'footer_left_menu' => 'Footer left menu',
		'footer_right_menu' => 'Footer right menu'
	] );
} );

// single level draw menu function
function draw_menu_single_level($menu_location = '', $ul_class = '', $li_class = '', $a_class = '') {

	$locations = get_nav_menu_locations();
	
	if( $locations && isset( $locations[ $menu_location ] ) ){
		
		$menu = wp_get_nav_menu_object($locations[$menu_location]);

		$menu_items = wp_get_nav_menu_items($menu->term_id);

		echo '<ul class="' . $ul_class . '">';

		foreach ( $menu_items as $key => $menu_item ) {
			echo '<li class="' . $li_class . '">';
				echo '<a class="' . $a_class . '" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
			echo '</li>';
		}

		echo '</ul>';
		
	}
}