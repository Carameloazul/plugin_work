<?php
/*
 * Plugin Name:       Plugin Logueo
 * Plugin URI:        https://github.com/Carameloazul/plugin_work
 * Description:       Formularios de Login y registro para Evoras
 * Version:           1.0
 * Requires at least: 5.8
 * Requires PHP:      7.4   
 * Author:            Jose Carlos
 * Author URI:        https://github.com/Carameloazul
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       Evoras
 */

 //API REST
require_once plugin_dir_path( __FILE__ ) ."/includes/API/api-registro.php";

 //SHORTCODES
require_once plugin_dir_path(__FILE__)."/public/shortcode/form-registro.php";
require_once plugin_dir_path(__FILE__)."public/shortcode/form-login.php";

?>