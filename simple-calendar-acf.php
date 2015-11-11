<?php
/**
 * Plugin Name: Simple Calendar - Advanced Custom Fields
 * Plugin URI:  https://simplecalendar.io
 * Description: Add a Simple Calendar field to Advanced Customs Fields (ACF).
 * Version:     1.0.0
 * Author:      Moonstone Media
 * Author URI:  https://simplecalendar.io
 * Text Domain: simple-calendar-acf
 * Domain Path: /languages/
 *
 * @package     SimpleCalendar/Extensions
 * @subpackage  ACF
 * @copyright   2015 Moonstone Media/Phil Derksen. All rights reserved.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} elseif ( version_compare( PHP_VERSION, '5.3.0' ) !== - 1 ) {
	if ( ! defined( 'SIMPLE_CALENDAR_ACF_MAIN_FILE' ) ) {
		define( 'SIMPLE_CALENDAR_ACF_MAIN_FILE', __FILE__ );
	}
	include_once 'includes/add-on-acf.php';
}
