<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://www.linkedin.com/in/lucianorodriguezgil/
 * @since      1.0.0
 *
 * @package    Mostrar_Datos_Multisite_Footer
 * @subpackage Mostrar_Datos_Multisite_Footer/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mostrar_Datos_Multisite_Footer
 * @subpackage Mostrar_Datos_Multisite_Footer/includes
 * @author     Luciano Rodríguez Gil <lurogil@gmail.com>
 */
class Mostrar_Datos_Multisite_Footer_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mostrar-datos-multisite-footer',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
