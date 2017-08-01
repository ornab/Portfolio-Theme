<?php

function Theme_files(){
    wp_register_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-css');
    wp_register_style('font-awesome-css', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome-css');
    wp_register_style('fonts.googleapis', '//fonts.googleapis.com/css?family=Raleway');
    wp_enqueue_style('fonts.googleapis');
    wp_register_style('googleapis', '//fonts.googleapis.com/css?family=Montserrat+Alternates');
    wp_enqueue_style('googleapis');
    wp_enqueue_style( 'genericons', get_template_directory_uri() . '/css/responsive.css', array(), '3.2' );
    wp_enqueue_style( 'Theme-style', get_stylesheet_uri() );


    wp_enqueue_script('jquery');


    wp_enqueue_script( 'html5shiv',  '//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array(), '20141010', true );
    wp_enqueue_script( 'respond',  '//oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '20141010', true );
    wp_enqueue_script( 'ajax',  '//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '20141010', true );
    wp_enqueue_script( 'bootstrapcdn',  '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), '20141010', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '20141010', true );

    wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/js/jquery.mixitup.js', array(), '20141010', true );
}
add_action( 'wp_enqueue_scripts', 'Theme_files' );
