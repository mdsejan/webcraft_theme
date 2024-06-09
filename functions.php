<?php

/**
 * My Theme Function
 */

 // Theme Title

 add_theme_support( 'title-tag');

 // Theme CSS and JQuery File calling
 function abir_css_js_file_calling(){
    wp_enqueue_style( 'abir-style', get_stylesheet_uri());

    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(),'5.3.3', 'all' );
    wp_enqueue_style( 'bootstrap');

    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(),'1.0.0', 'all' );
    wp_enqueue_style( 'custom');

    //JQuery
    wp_enqueue_script( 'jquery');

    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.js', array(),'5.3.3', 'true');

    wp_enqueue_script( 'main', get_template_directory_uri().'/css/main.js', array(),'1.0.0', 'true');

 }
 add_action( 'wp_enqueue_scripts', 'abir_css_js_file_calling');


 //Theme Function
 function abir_Customizar_register($wp_customize){
    $wp_customize->add_section('abir_header_area', array(
        'title' =>__('Header Area', 'webcraft'), 
        'description' => 'you can update your header area from here'
    ));

    $wp_customize->add_setting('abir_logo',array(
        'default' => get_bloginfo('template_directory').'/img/logo.png'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'abir_logo', array(
        'label' => 'Logo Upload',
        'section' => 'abir_header_area',
        'description' => 'you can update your header area from here',
        'setting' => 'abir_logo',
    )));
 }

 add_action('customize_register','abir_Customizar_register');