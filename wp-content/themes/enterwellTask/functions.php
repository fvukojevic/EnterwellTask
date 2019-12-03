<?php

require(__DIR__. '/mapper/PrizeEntryMapper.php');
require(__DIR__. '/model/Writer.php');


class Functions
{
    private $theme_name;
    private $theme_version;

    public function __construct($theme_name, $theme_version)
    {
        $this->theme_name = $theme_name;
        $this->theme_version = $theme_version;
        $this->theme_setup();
    }
    private function theme_setup()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('admin_post_nopriv_enterwell_application_form', 'enterwell_form_submit' );
        add_action('admin_post_enterwell_application_form', 'enterwell_form_submit' );
    }

    public function enqueue_styles()
    {
        wp_enqueue_style( $this->theme_name . '_main_css', get_stylesheet_directory_uri() . '/dist/css/main.min.css', array(), $this->theme_version );
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    public function enqueue_scripts()
    {
        wp_enqueue_script( $this->theme_name . '_main_js', get_stylesheet_directory_uri() . '/dist/main.js', array(), $this->theme_version );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/main.js');
    }

    public function enterwell_form_submit()
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
        if($response === 'success') {
            $writer->storeImgToUploadsFolder($post['img']);
        }

        wp_redirect(home_url() . '?msg=' . $response);
    }
}


$functions = new Functions('my-theme', '1.0.0');

