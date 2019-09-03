<?php
// enqueues bootstrap styles and scripts
function bootstrap_modal_enqueue() {
	// directory of script
	$bs_scripts = FUNC_PLUGIN_DIR . 'js/bootstrap.min.js';
	wp_enqueue_script(
		'bootstrap-scripts',
		$bs_scripts,
		( 'jQuery' ),
		'v4.0.0-alpha.6',
		true
	);
	// directory of stylesheet
	$bs_styles = FUNC_PLUGIN_DIR . 'css/bootstrap.min.js';
	wp_enqueue_script(
		'bootstrap-styles',
		$bs_styles,
		'v4.0.0-alpha.6'
	);
}

add_action( 'wp_enqueue_scripts', 'bootstrap_modal_enqueue' );
