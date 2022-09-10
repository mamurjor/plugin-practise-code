<?php
/**
 * Plugin Name:       Mamurjor emp
 * Plugin URI:        https://www.mamurjor.com/
 * Description:       Handle the basics with this plugin.
 * Version:           1.1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            hadi jaman
 * Author URI:        https://www.facebook.com/hadijaman
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://www.mamurjor.com/
 * Text Domain:       emp
 * Domain Path:       /languages
 */

if(!function_exists('adminscripts')){
 function adminscripts(){
    wp_enqueue_style('jaman',plugin_dir_path(__FILE__).'css/hadi.css');
    wp_enqueue_script('myscript',plugin_dir_path(__FILE__).'js/hadi.js');
 }
}
add_action('admin_enqueue_scripts','adminscripts');


if(!function_exists('mywpscripts')){
    function mywpscripts(){
        wp_enqueue_style('wp_jaman',plugin_dir_path(__FILE__).'css/hadi.css');
        wp_enqueue_script('wp_myscript',plugin_dir_path(__FILE__).'js/hadi.js');
    }
}

add_action('wp_enqueue_scripts','mywpscripts');



require(plugin_dir_path(__FILE__).'class-emp.php');

require(plugin_dir_path(__FILE__).'class-script.php');

require(plugin_dir_path(__FILE__).'class-menu.php');


?>
