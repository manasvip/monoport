<?php
/**
 * Check and setup theme's default settings
 *
 * @package monoport
 *
 */

if ( ! function_exists ( 'monoport_setup_theme_default_settings' ) ) {
	function monoport_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$monoport_posts_index_style = get_theme_mod( 'monoport_posts_index_style' );
		if ( '' == $monoport_posts_index_style ) {
			set_theme_mod( 'monoport_posts_index_style', 'default' );
		}

		// Sidebar position.
		$monoport_sidebar_position = get_theme_mod( 'monoport_sidebar_position' );
		if ( '' == $monoport_sidebar_position ) {
			set_theme_mod( 'monoport_sidebar_position', 'right' );
		}

		// Container width.
		$monoport_container_type = get_theme_mod( 'monoport_container_type' );
		if ( '' == $monoport_container_type ) {
			set_theme_mod( 'monoport_container_type', 'container' );
		}
	}
}