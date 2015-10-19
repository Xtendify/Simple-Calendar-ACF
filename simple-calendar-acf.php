<?php
/**
 * Plugin Name: Simple Calendar - ACF field
 * Plugin URI:  https://wordpress.org/plugins/simple-calendar-acf/
 * Description: Use Simple Calendar with Advanced Custom Fields.
 *
 * Version:     1.0.0
 *
 * Author:      Moonstone Media
 * Author URI:  http://moonstonemediagroup.com
 *
 * Text Domain: simple-calendar-acf
 * Domain Path: /languages/
 *
 * @package     SimpleCalendar/Extensions
 * @subpackage  ACF
 * @copyright   2014-2015 Moonstone Media/Phil Derksen. All rights reserved.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} elseif ( version_compare( PHP_VERSION, '5.3.0' ) !== - 1 ) {
	if ( ! defined( 'SIMPLE_CALENDAR_ACF_MAIN_FILE' ) ) {
		define( 'SIMPLE_CALENDAR_ACF_MAIN_FILE', __FILE__ );
	}
	include_once 'includes/add-on-acf.php';
}
