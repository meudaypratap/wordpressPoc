<?php
add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu()
{
    add_menu_page('Enmask Captcha', 'Enmask Captcha', 'manage_options', 'enmask-captcha-settings', 'enmask_options');
} 

function enmask_options()
{
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.','wp_enmask'));
    } 
    include_once('enmask_captcha_settings.php');
} 
?>