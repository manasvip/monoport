<?php
/**
 * monoport enqueue scripts
 *
 * @package monoport
 */

/**
 * @param  string  $filename
 * @return string
 */
function asset_path($filename) {
    $manifest_path = get_stylesheet_directory_uri() .'/rev-manifest.json';
    if ( file_exists($manifest_path ) ) {
        $manifest = json_decode( file_get_contents( $manifest_path ), TRUE );
    } else {
        $manifest = [];
    }
    if ( array_key_exists( $filename, $manifest ) ) {
        return $manifest[$filename];
    }
    return $filename;
}

if ( ! function_exists( 'monoport_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function monoport_scripts() {

		wp_enqueue_style( 'monoport-styles', get_stylesheet_directory_uri() . '/'. asset_path('css/theme.css'), array(), null);

		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false, true);

		wp_enqueue_script( 'monoport-scripts', get_template_directory_uri() . '/' . asset_path('js/theme.min.js'), array(), null, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
        
		wp_enqueue_script( 'activate-js', get_template_directory_uri() . '/js/activate.js', array(), false, true);
        
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
        
	}
} // endif function_exists( 'monoport_scripts' ).

add_action( 'wp_enqueue_scripts', 'monoport_scripts' );
