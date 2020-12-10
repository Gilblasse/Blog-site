<?php

$version = wp_get_theme()->get( 'Version' );


/*
    Adding Scripts to Head
*/

function blogger_site_register_styles(){
    wp_enqueue_style(
        'blogger-main', 
        get_template_directory_uri(),
        array(),
        $version,
        "all"
    );


}

add_action( 'wp_enqueue_scripts', 'blogger_site_register_styles');