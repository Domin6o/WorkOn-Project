<?php
    define("ROOT", get_template_directory_uri());
    define("SCRIPTS", ROOT . "/scripts");
    define("STYLES", ROOT . "/styles");
    define("IMAGES", ROOT . "/images");

    //add styles
    function theme_styles() {
        wp_enqueue_style("bootstrap", STYLES . "/css/bootstrap.min.css");
        wp_enqueue_style("global", STYLES . "/css/global.min.css");
        wp_enqueue_style("main", ROOT . "/style.css");
    }
    add_action("wp_enqueue_scripts", "theme_styles");

    //add fonteawesome
    function fontawesome_styles() {
        wp_enqueue_style("fontawesome", STYLES . "/css/fontawesome.min.css");
        wp_enqueue_style("fontawesome-solid", STYLES . "/css/solid.min.css");
        wp_enqueue_style("fontawesome-regular", STYLES . "/css/regular.min.css");
        wp_enqueue_style("fontawesome-brands", STYLES . "/css/brands.min.css");
    }
    add_action("wp_enqueue_scripts", "fontawesome_styles");

    //add scripts
    function theme_scripts() {
        wp_enqueue_script("scripts", SCRIPTS . "/jquery-3.4.1.min.js");
        wp_enqueue_script("popper", SCRIPTS . "/popper.min.js");
        wp_enqueue_script("bootstrap", SCRIPTS . "/bootstrap.min.js");
        wp_enqueue_script("main", SCRIPTS . "/main.js");
    }
    add_action("wp_enqueue_scripts", "theme_scripts");

    // Animate.css added
    function load_animate_css() {
      // Load Boostrap CSS
      wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' );
    }
    add_action( 'wp_enqueue_scripts', 'load_animate_css' );

    //add thumbnails
    add_theme_support("post-thumbnails"); 
    
    //add menu
    function register_menu() {
        register_nav_menu("header-nav-menu", "Header Nav Menu");
        register_nav_menu("footer-nav-menu", "Footer Nav Menu");
    }
    add_action("init", "register_menu");


    // Add Custom Taxonomy
    function add_custom_taxonomy() {  
        $portfolio_cats_args = array(
            'hierarchical' => true,
            'label' => 'Kategorie portfolio',
            'labels' => array('name' => 'Kategorie portfolio', 'menu_name' => 'Kategorie portfolio')
        );
        register_taxonomy('portfolio_cats', array('portfolio'), $portfolio_cats_args);

        // >>> add more here <<<
    }    
    add_action("init", "add_custom_taxonomy", 0);
    
    // Add Custom Post Type
    function add_custom_post_types() {         
        $portfolio_args = array(
            'label'               => 'Portfolio',
            'labels'              => array('name' => 'Portfolio', 'menu_name' => 'Portfolio'),
            'supports'            => array( 'title', 'thumbnail', 'editor' ),
            'public'              => true,
            'exclude_from_search' => false,
            'taxonomies'          => array('portfolio_cats')
        );
        register_post_type( 'portfolio', $portfolio_args );

        $team_args = array(
            'label'               => 'About',
            'labels'              => array('name' => 'About', 'menu_name' => 'About'),
            'supports'            => array( 'title', 'thumbnail', 'editor' ),
            'public'              => true,
            'exclude_from_search' => false,
            'menu_icon'           => 'dashicons-admin-post'
        );

        register_post_type( 'about', $team_args );
        
        $offer_args = array(
            'label'               => 'Offer',
            'labels'              => array('name' => 'Offer', 'menu_name' => 'Offer'),
            'supports'            => array( 'title', 'thumbnail', 'editor' ),
            'public'              => true,
            'exclude_from_search' => false,
            'menu_position'       => 20,
            'menu_icon'           => 'dashicons-admin-post',
           
        );

        register_post_type( 'offer', $offer_args );

        // >>> add more here <<<
    }
    add_action("init", "add_custom_post_types", 0);


    //stop Wordpress from rewriting .htaccess file
    add_filter( 'flush_rewrite_rules_hard', '__return_false' );

    