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


    function twentynineteen_widgets_init() {

        register_sidebar(
            array(
                'name'          => __( 'Footer', 'twentynineteen' ),
                'id'            => 'sidebar-1',
                'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    
    }
    add_action( 'widgets_init', 'twentynineteen_widgets_init' );


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

    function theme_prefix_setup() {

        add_theme_support( 'custom-logo', array(
        'height' => 500,
        'width' => 500,
        'flex-width' => true,
        ) );
        
        }
        add_action( 'after_setup_theme', 'theme_prefix_setup' );


    require_once get_template_directory() . '/inc/walker_menu.php';
	
	
	function hhh_custom_gallery() {
		register_post_type('gallery',
		array(
			'rewrite' => array('slug' => 'gallery'),
			'labels' => array(
				'name' => 'Gallery',
				'singular_name' => 'Gallery',
				'add_new_item' => 'Add New Gallery',
				'edit_item' => 'Edit Gallery'
			),
			'menu-icon' => 'dashicons-format-gallery',
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'title', 'thumbnail', 'editor'
			),
			'taxonomies' => array('category')
		)
		);
	};

	add_action('init', 'hhh_custom_gallery');
