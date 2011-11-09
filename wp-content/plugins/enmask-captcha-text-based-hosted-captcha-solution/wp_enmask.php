<?php
/*
Plugin Name: Enmask Captcha
Plugin URI: http://www.enmask.com/en-US/Solutions
Description: Plugin to validate/render Enmask captcha.
Version: 1.1
Author: Enmask.com
Author URI: http://www.enmask.com
*/

define('ENMASK_CAPTCHA_INCLUDES', true);

add_filter('plugin_action_links', 'add_enmask_settings_link', 10, 2 );

function add_enmask_settings_link($links, $file)
{
    static $this_plugin;
    if (!$this_plugin) $this_plugin = plugin_basename(__FILE__);

    if ($file == $this_plugin) {
        $settings_link = '<a href="admin.php?page=enmask-captcha-settings">' . __("Settings", "wp_enmask") . '</a>';
        array_unshift($links, $settings_link);
    } 
    return $links;
} 

if(is_admin()){
	require_once('wp_enmask_admin.php');
}else{
	require_once('wp_enmask_client.php');
}
?>