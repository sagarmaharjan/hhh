<?php

    // adding the css and js files
    function hhh_setup() {
        wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
        wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'), NULL, microtime(), all);
        wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);    
    }
    add_action('wp_enqueue_scripts', 'hhh_setup');

    // adding theme support
    function hhh_init() {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
    }
    add_action('after_setup_theme', 'hhh_init');


    // adding custom post 
    function hhh_custom_post_type() {
        register_post_type('cause',
            array(
                'rewrite' => array('slug' => 'causes'),
                'labels' => array (
                    'name' => 'Causes',
                    'singular_name' => 'Cause',
                    'add_new_item' => 'Add New Cause',
                    'edit_item' => 'Edit Cause'
                ),
                'menu-icon' => 'dashicons-clipboard',
                'public' => true,
                'has_archive' => true,
                'supports' => array(
                    'title', 'thumbnail', 'editor', 'excerpt', 'comments', 'custom-fields'
                ),
                'taxonomies' => array('category')
            )
        );
    };
    add_action('init', 'hhh_custom_post_type');