<?php
/**
 * Plugin Name:       Bcc Rest Test
 * Plugin URI:        /wp-json/wp/v2/event
 * Description:       Add REST API support for the custom post types 'event', 'location', 'recurring-event'.
 * Version:           0.1.0
 * Author:            Carl Forde
 * Author URI:        stormlantern.ca
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bcc_rest_test
 * Domain Path:       /languages
 *
 * @package         Bcc_Rest_Test
 */

	
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bcc_rest_test-activator.php
 */
function activate_bcc_rest_test() {
	// require_once plugin_dir_path( __FILE__ ) . 'includes/class-bcc_rest_test-activator.php';
	// Bcc_rest_test_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bcc_rest_test-deactivator.php
 */
function deactivate_bcc_rest_test() {
	// require_once plugin_dir_path( __FILE__ ) . 'includes/class-bcc_rest_test-deactivator.php';
	// Bcc_rest_test_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bcc_rest_test' );
register_deactivation_hook( __FILE__, 'deactivate_bcc_rest_test' );

/**
 * Verify that the requestor has permission to perform their desired action
 * 
 */
function check_permission() {
	
}

/**
 * Handle the 'event' requests
 */
function handle_create_event( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was a create event request' );
    return rest_ensure_response( $response );
}
function handle_read_event( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was a read event request' );
    return rest_ensure_response( $response );
}
function handle_edit_event( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was an edit event request' );
    return rest_ensure_response( $response );
}
function handle_delete_event( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was a delete event request' );
    return rest_ensure_response( $response );
}

 
/**
 * Handle the 'location' requests
 */
function handle_create_location( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was a create location request' );
    return rest_ensure_response( $response );
}
function handle_read_location( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was a read location request' );
    return rest_ensure_response( $response );
}
function handle_edit_location( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was an edit location request' );
    return rest_ensure_response( $response );
}
function handle_delete_location( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was a delete location request' );
    return rest_ensure_response( $response );
}
 
/**
 * Handle the 'recurring-event' requests
 */
function handle_create_recurring_event( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was a create recurring-event request' );
    return rest_ensure_response( $response );
}
function handle_read_recurring_event( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was a read recurring-event request' );
    return rest_ensure_response( $response );
}
function handle_edit_recurring_event( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was an edit recurring-event request' );
    return rest_ensure_response( $response );
}
function handle_delete_recurring_event( WP_REST_Request $data ) {
	
	$response = array( 'status' => 'ok', 'message' => 'This was a delete recurring-event request' );
    return rest_ensure_response( $response );
}
 
/**
 * Register our routes for the new endpoints.
 */
function register_routes() {

    register_rest_route( 'wp/v2', '/event', array(
		array(
	        'methods'  => WP_REST_Server::CREATABLE,
	        'callback' => 'handle_create_event'
	    ),
		array(
	        'methods'  => WP_REST_Server::READABLE,
	        'callback' => 'handle_read_event'
	    ),
		array(
	        'methods'  => WP_REST_Server::EDITABLE,
	        'callback' => 'handle_edit_event'
	    ),
		array(
	        'methods'  => WP_REST_Server::DELETABLE,
	        'callback' => 'handle_delete_event'
	    ) 
	) );
	
    register_rest_route( 'wp/v2', '/location', array(
		array(
	        'methods'  => WP_REST_Server::CREATABLE,
	        'callback' => 'handle_create_location'
	    ),
		array(
	        'methods'  => WP_REST_Server::READABLE,
	        'callback' => 'handle_read_location'
	    ),
		array(
	        'methods'  => WP_REST_Server::EDITABLE,
	        'callback' => 'handle_edit_location'
	    ),
		array(
	        'methods'  => WP_REST_Server::DELETABLE,
	        'callback' => 'handle_delete_location'
	    ) 
		 
	) );
	
    register_rest_route( 'wp/v2', '/recurring-event', array(
		array(
	        'methods'  => WP_REST_Server::CREATABLE,
	        'callback' => 'handle_create_recurring_event'
	    ),
		array(
	        'methods'  => WP_REST_Server::READABLE,
	        'callback' => 'handle_read_recurring_event'
	    ),
		array(
	        'methods'  => WP_REST_Server::EDITABLE,
	        'callback' => 'handle_edit_recurring_event'
	    ),
		array(
	        'methods'  => WP_REST_Server::DELETABLE,
	        'callback' => 'handle_delete_recurring_event'
	    ),
		
	) );
}
 
 
add_action( 'rest_api_init', 'register_routes' );


