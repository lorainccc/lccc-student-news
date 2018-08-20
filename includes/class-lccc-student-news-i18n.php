<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.lorainccc.edu
 * @since      1.0.0
 *
 * @package    Lccc_Student_News
 * @subpackage Lccc_Student_News/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Lccc_Student_News
 * @subpackage Lccc_Student_News/includes
 * @author     LCCC Web Development Team <webmaster@lorainccc.edu>
 */
class Lccc_Student_News_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'lccc-student-news',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
