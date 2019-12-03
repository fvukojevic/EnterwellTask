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
    wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/main.js');
}

/**
 * @return void
 */
function enterwell_form_submit()
{
    $post = $_POST;
    $post['img'] = $_FILES['img'];

    $date = new DateTime();
    $timestamp = (string)$date->getTimestamp();
    $post['img']['name'] = $timestamp . '_' . $post['img']['name'];

    $mapper = new PrizeEntryMapper;
    $data_array = $mapper->mapUsersData($post);

    $writer = new Writer;
    $response = $writer->storePrizeEntry($data_array);
    if($response = 'success') {
        $writer->storeImgToUploadsFolder($post['img']);
    }

    wp_redirect(home_url() . '?msg=' . $response);
}


add_action('wp_enqueue_scripts','enterwellTask_script');
add_action('wp_enqueue_style', 'enterwellTask_resources');
add_action('admin_post_nopriv_enterwell_application_form', 'enterwell_form_submit' );
add_action('admin_post_enterwell_application_form', 'enterwell_form_submit' );