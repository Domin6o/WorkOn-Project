<!DOCTYPE html>
<html <?php language_attributes();  ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="web design, kampanie reklamowe, e-marketing, szkolenia">
    <title> <?php bloginfo("nazwa"); wp_title(" | "); ?> </title>

    <?php wp_head(); ?> <!-- dodanie styli na podstawie functions.php -->
    <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>

<body>

<header>
    <nav class="nav-menu d-flex justify-content-between">
        <a class="navbar-brand d-flex" href="<?php echo get_site_url(); ?>" rel="home">
            <img src="<?php echo IMAGES; ?>/logo_yellow.png" alt="CAT">
            <img src="<?php echo IMAGES; ?>/logo_green.png" alt="CAT">
            <div class="d-flex flex-column">
                <span>Creative</span>
                <span>Arts</span>
                <span>Team</span>
            </div>
        </a>

        <div class="links-horizontal d-none d-sm-flex align-items-center">
            <?php
                wp_nav_menu([
                    "theme_location" => "header-nav-menu",
                    "container" => "ul",
                    "menu_class" => "list-inline"
                ]); 
            ?>
        </div>
        <div class="links-vertical dropdown d-block d-sm-none">
            <!-- <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bars"></i>
            </button> -->
            <a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></a>
            <?php
                wp_nav_menu([
                    "theme_location" => "header-nav-menu",
                    "container" => "ul",
                    "menu_class" => "dropdown-menu dropdown-menu-right"
                ]); 
            ?>
        </div>

        <div class="s-container d-none d-md-flex align-items-center">
            <form class="d-flex align-items-baseline" id="search" action="<?php echo get_site_url(); ?>">
                <input type="text" name="s" id="s" class="form-control" placeholder="Wyszukaj">
                <button type="submit" class="search-btn">Szukaj</button>
            </form>
        </div>
    </nav>
</header>

<main>