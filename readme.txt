=== Simple Calendar - ACF field ===
Contributors: pderksen, nickyoung87, nekojira
Tags: simple-calendar, acf, advanced-custom-fields, google-calendar, google, calendar, calendars, event, events, field, custom-field, fields, custom-fields
Requires at least: 3.9
Tested up to: 4.3
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Extends Advanced Custom Field (ACF) plugin with a calendar field to display a Simple Calendar plugin events calendar.  

== Description ==

An [Advanced Customs Field](http://www.advancedcustomfields.com/) [WordPress](https://wordpress.org) plugin add on for [Simple Calendar](http://simplecalendar.io/).
With this extension you can add a Simple Calendar using ACF. The field will print the corresponding calendar chosen among those available using ACF.

To use this add on you need both Simple Calendar and Advanced Custom Fields installed and activated. It is compatible with both ACF v4 and v5 or ACF Pro.

= Compatibility =

This ACF field type is compatible with:
* Simple Calendar 3.0.0 and up
* ACF 5
* ACF 4

== Installation ==

You will need both Simple Calendar (3.0.0 and above) and Advanced Custom Fields (either 4.x, 5.x or Pro version) installed and active in your WordPress installation first or this plugin won't do anything. 

Install Simple Calendar ACF by going to the plugins dashboard page and select 'Add New'. Look up for 'Simple Calendar ACF' and install and activate the plugin.

Make sure you have created some calendar with Simple Calendar first, then create a new field with this field extension and Advanced Custom Fields. The new field will be available with a list of calendars to choose from. Use ACF templates to retrieve and display the chosen calendar with functions like `the_field( 'your_field_name' )'`.

== Changelog ==

= 1.0.0 =
* Initial Release.
