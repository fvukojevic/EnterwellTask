<?php
/**
 * Plugin name: Prize Entry Table
 * Author: Vuks
 * Version: 0.0.1
 */

function DBP_add_fron_Page() {
    include_once('table_data.php');
}


if(!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

define('DBP_dir', dirname(__FILE__));
define('DBP_url', plugins_url('', __FILE__));

add_action('admin_menu', 'DBP_add_menu_function');
add_action('admin_enqueue_scripts', 'DBP__admin_styles');

function DBP__admin_styles() {
    if($_GET['page'] == 'prize_entries') {
        wp_enqueue_style('DBP_styles', DBP_url . '/assets/css/style.css');
    }
}

function DBP_add_menu_function() {
    $user = wp_get_current_user();
    $roles = ( array ) $user->roles;

    if(in_array('administrator', $roles)) {
        add_menu_page(
            'prize_entry_page', //TITLE
            'Prize Entry', //menu TITLEž
            'manage_options', //cap
            'prize_entries', //slug
            'DBP_add_fron_Page', // func
             'dashicons-awards'//icon
        );
    }
}