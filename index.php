<?php
/**
* Plugin Name:	WP Group CTP
* Plugin URI:
* Description:	Group all your CPT in an admin page
* Version:			0.1.0
* Author:				Oscar Chavez
* Author URI:
* License:			GPL12
*/
?>
Branch one
<?php
// Register the Custom Custom Post Post Type

function register_cpt_group_admin_menu() {
  add_menu_page('Custom Posts', 'Custom Posts', 'manage_options', __FILE__, 'clivern_render_plugin_page', plugins_url('/img/icon.png',__DIR__));
  add_submenu_page(__FILE__, 'Custom', 'Custom', 'manage_options', __FILE__.'/custom', 'clivern_render_custom_page');
  add_submenu_page(__FILE__, 'About', 'About', 'manage_options', __FILE__.'/about', 'clivern_render_about_page');
}
add_action('admin_menu', 'register_cpt_group_admin_menu');
?>
