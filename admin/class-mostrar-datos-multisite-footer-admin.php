<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://https://www.linkedin.com/in/lucianorodriguezgil/
 * @since      1.0.0
 *
 * @package    Mostrar_Datos_Multisite_Footer
 * @subpackage Mostrar_Datos_Multisite_Footer/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mostrar_Datos_Multisite_Footer
 * @subpackage Mostrar_Datos_Multisite_Footer/admin
 * @author     Luciano Rodríguez Gil <lurogil@gmail.com>
 */
class Mostrar_Datos_Multisite_Footer_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mostrar_Datos_Multisite_Footer_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mostrar_Datos_Multisite_Footer_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mostrar-datos-multisite-footer-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mostrar_Datos_Multisite_Footer_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mostrar_Datos_Multisite_Footer_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mostrar-datos-multisite-footer-admin.js', array( 'jquery' ), $this->version, false );

	}
	public function add_menu() {
    // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    add_menu_page(
      "Mostrar datos Footer",  // Título de la página
      "Mostrar datos Footer",  // Literal de la opción
      "manage_options",  // Dejadlo tal cual
      'mostrar-datos-footer-index',  // Slug
      array( $this, 'mostrar_datos_footer_index' ),  // Función que llama al pulsar
    );
  }

  public function cargar_datos(){
	$carga_datos=array();
	$carga_datos["Url del sitio: "]=site_url();
	$carga_datos["Nombre del sitio: "]=get_bloginfo();
	$carga_datos["Direcion de correo del admin: "]=get_bloginfo('admin_email');
	$carga_datos["Id del post: "]=get_the_id();
	$carga_datos["Titulo de la pagina: "]=single_post_title('',false);//le paso el false para evitar el display
	return $carga_datos;
  }

  public function mostrar_datos_footer_index() {
	
	echo("<h1>".$this->plugin_name."</h1>");
	$carga_datos= $this->cargar_datos();
	foreach($carga_datos as $titulo_dato => $dato){
		echo $titulo_dato. " ".$dato;
		echo "<br>";
	}
  }
}
