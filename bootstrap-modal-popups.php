<?php
/*
Plugin Name: Bootstrap Modal Popups
Plugin URI: https://www.pattonwebz.com/bootstrap-modal-wordpress-plugin/
Description: Plugin used to add Bootstrap Modal Popups
Author: William Patton
Author URI: https://www.pattonwebz.com
Version: 1.0.0
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

/* ---------------------------------- *
 * constants
 * ---------------------------------- */

if ( !defined( 'FUNC_PLUGIN_DIR' ) ) {
	define( 'FUNC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( !defined( 'FUNC_PLUGIN_URL' ) ) {
	define( 'FUNC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/* ---------------------------------- *
 * includes
 * ---------------------------------- */

// The expectation is for theme to include bootstrap files.
// You can uncomment this line to let the plugin add BS files if theme does not.
// include( FUNC_PLUGIN_DIR . 'includes/bootstrap_enqueue.php' );

// adds the custom post type used to create modals
include( FUNC_PLUGIN_DIR . 'includes/bootstrap_modal_cpt.php' );
// this is the logic to generate and output modals from the cpt
include( FUNC_PLUGIN_DIR . 'includes/bootstrap_modal.php' );
