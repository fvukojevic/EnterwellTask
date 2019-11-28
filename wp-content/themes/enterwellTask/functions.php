<?php

require(__DIR__. '/mapper/PrizeEntryMapper.php');
require(__DIR__. '/model/Writer.php');

/**
 * @return void
 */
function enterwellTask_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

/**
 * @return void
 */
function enterwellTask_script() {
    wp_enqueue_script( 'drag-and-drop', get_template_directory_uri() . '/js/drag-and-drop.js');
    wp_enqueue_script( 'field-validation', get_template_directory_uri() . '/js/field-validation.js');
    wp_enqueue_script( 'alert', get_template_directory_uri() . '/js/alert.js',  array('jquery'));
}

/**
 * @return void
 */
function enterwell_form_submit()
{
    $mapper = new PrizeEntryMapper;
    $data_array = $mapper->mapUsersData($_POST);

    $writer = new Writer;
    $response = $writer->storePrizeEntry($data_array);

    wp_redirect(home_url() . '?msg=' . $response);
}


add_action('wp_enqueue_scripts','enterwellTask_script');
add_action('wp_enqueue_style', 'enterwellTask_resources');
add_action('admin_post_nopriv_enterwell_application_form', 'enterwell_form_submit' );
add_action('admin_post_enterwell_application_form', 'enterwell_form_submit' );