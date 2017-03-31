<?php
// enqueues bootstrap styles and scripts
function bootstrap_modal_enqueue() {
	// directory of script
	$bs_scripts = FUNC_PLUGIN_DIR . 'js/bootstrap.min.js';
	wp_enqueue_script(
		'bootstrap-scripts',
		$bs_scripts,
		( 'jQuery' ),
		// version number is set to the file mod time
		// you may want to use the actual version number of BS your using instead
		filemtime( $bs_scripts ),
		true
	);
	// directory of stylesheet
	$bs_styles = FUNC_PLUGIN_DIR . 'css/bootstrap.min.js';
	wp_enqueue_script(
		'bootstrap-styles',
		$bs_styles,
		// version number is set to the file mod time
		// you may want to use the actual version number of BS your using instead
		filemtime( $bs_scripts ),
	);
}

add_action( 'wp_enqueue_scripts', 'bootstrap_modal_enqueue' );
