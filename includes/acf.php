<?php
/**
 * Simple Calendar - Advanced Custom Fields add on.
 */
namespace SimpleCalendar;

/**
 * Simple Calendar ACF.
 */
class Acf {

	/**
	 * Load plugin.
	 */
	public function __construct() {
		load_plugin_textdomain( 'simple-calendar', false, dirname( dirname( plugin_basename(__FILE__) ) ) . '/languages/' );
		add_action( 'plugins_loaded', array( $this, 'init' ) );
	}

	/**
	 * Init.
	 */
	public function init() {
		if ( class_exists( 'SimpleCalendar\Plugin' ) ) {
			// ACF v5.x
			add_action( 'acf/include_field_types', function() {
				include_once 'acf/field-v5.php';
			} );
			// ACF v4.x
			add_action( 'acf/register_fields', function() {
				include_once 'acf/field-v4.php';
			} );
		}
	}

}

new Acf();
