<?php


function lapizzeria_styles() {

  wp_register_style('style', get_template_directory_uri(). '/style.css', array(), '1.0' );

  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');
