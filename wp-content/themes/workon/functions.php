<?php
    define("ROOT", get_template_directory_uri());
    define("SCRIPTS", ROOT . "/scripts");
    define("STYLES", ROOT . "/styles");
    define("IMAGES", ROOT . "/images");

    //add styles
    function theme_styles() {
        wp_enqueue_style("global", STYLES . "/css/global.min.css");
    }

    add_action("wp_enqueue_scripts", "theme_styles");

    //add scripts
    function theme_scripts() {
        wp_enqueue_script("scripts", SCRIPTS . "/scripts.js", array("jquery", "1.0", true));
    }

    add_action("wp_enqueue_scripts", "theme_scripts");
    
    //add menu
    function register_menu() {
        register_nav_menu("main-menu", "Main Menu");
    }

    add_action("init", "register_menu");