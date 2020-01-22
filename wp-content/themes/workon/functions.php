<?php
    define("ROOT", get_template_directory_uri());
    define("SCRIPTS", ROOT . "/scripts");
    define("STYLES", ROOT . "/styles");
    define("IMAGES", ROOT . "/images");

    //add styles
    function theme_styles() {
        wp_enqueue_style("bootstrap", STYLES . "/css/bootstrap.min.css");
        wp_enqueue_style("fontawesome-all", STYLES . '/css/fontawesome-all.min.css');
        wp_enqueue_style("global", STYLES . "/css/global.min.css");
        wp_enqueue_style("main", ROOT . "/style.css");
    }
    add_action("wp_enqueue_scripts", "theme_styles");

    //add scripts
    function theme_scripts() {
        wp_enqueue_script("scripts", SCRIPTS . "/jquery-3.4.1.min.js");
        wp_enqueue_script("popper", SCRIPTS . "/popper.min.js");
        wp_enqueue_script("bootstrap", SCRIPTS . "/bootstrap.min.js");
        // wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true );
        // wp_enqueue_script("scripts", SCRIPTS . "/scripts.js", array("jquery", "1.0", true));
    }
    add_action("wp_enqueue_scripts", "theme_scripts");
    
    //add menu
    function register_menu() {
        register_nav_menu("header-nav-menu", "Header Nav Menu");
        register_nav_menu("footer-nav-menu", "Footer Nav Menu");
    }
    add_action("init", "register_menu");