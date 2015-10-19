<?php
/**
 * Simple Calendar - Advanced Custom Fields add on.
 *
 * @package    SimpleCalendar/Extensions
 * @subpackage ACF
 */
namespace SimpleCalendar;

/**
 * Simple Calendar ACF.
 */
class Add_On_Acf {

	/**
	 * Load plugin.
	 */
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'init' ) );
		add_action( 'init', array( $this, 'l10n' ) );
	}

	/**
	 * Init.
	 *
	 * @since  1.0.0
	 *
	 * @return void
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

	/**
	 * Load Localization files.
	 *
	 * @since  1.0.0
	 *
	 * @return void
	 */
	public function l10n() {
		load_plugin_textdomain( 'simple-calendar-acf', false, plugin_basename( SIMPLE_CALENDAR_ACF_MAIN_FILE ) . '/languages/' );
	}

}

new Add_On_Acf();
