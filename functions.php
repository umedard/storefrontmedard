<?php

function script_setup() {
wp_enqueue_style( 'main-style', get_stylesheet_uri() ); //default

wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/dist/css/styles.css' ); //our stylesheet
wp_enqueue_script('script',  get_template_directory_uri() . '/dist/js/bundle.js');

};

add_action( 'wp_enqueue_scripts', 'script_setup' );

?>