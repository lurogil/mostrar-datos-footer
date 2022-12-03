<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://www.linkedin.com/in/lucianorodriguezgil/
 * @since             1.0.0
 * @package           Mostrar_Datos_Multisite_Footer
 *
 * @wordpress-plugin
 * Plugin Name:       Mostrar Datos Multisite Footer
 * Plugin URI:        https://es.mirai.com/es/
 * Description:       Este plugin esta diseñado para en un multisite cargar los datos del sitio y mostrarlos en el footer del mismo. 
 * Version:           1.0.0
 * Author:            Luciano Rodríguez Gil
 * Author URI:        https://https://www.linkedin.com/in/lucianorodriguezgil/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mostrar-datos-multisite-footer
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MOSTRAR_DATOS_MULTISITE_FOOTER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mostrar-datos-multisite-footer-activator.php
 */
function activate_mostrar_datos_multisite_footer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mostrar-datos-multisite-footer-activator.php';
	Mostrar_Datos_Multisite_Footer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mostrar-datos-multisite-footer-deactivator.php
 */
function deactivate_mostrar_datos_multisite_footer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mostrar-datos-multisite-footer-deactivator.php';
	Mostrar_Datos_Multisite_Footer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mostrar_datos_multisite_footer' );
register_deactivation_hook( __FILE__, 'deactivate_mostrar_datos_multisite_footer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mostrar-datos-multisite-footer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mostrar_datos_multisite_footer() {

	$plugin = new Mostrar_Datos_Multisite_Footer();
	$plugin->run();

}
run_mostrar_datos_multisite_footer();
