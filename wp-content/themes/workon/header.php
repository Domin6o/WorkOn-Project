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

<header class="col-lg-12 animated fadeInDown">
    <nav class="nav-menu d-flex justify-content-end">
        <img src="<?php echo IMAGES; ?>/logo3.png" alt="CAT">
        
        <div>
            <p>Creative</p>
            <p>Arts</p>
            <p>Team</p>
        </div>

        <?php
            wp_nav_menu([
                "theme_location" => "header-nav-menu",
                "container" => "ul",
                "menu_class" => "list-inline",
                "item_spacing" => "|"
            ]); 
        ?>
        <div class="s-container">
             <form class="d-flex align-items-baseline" id="search" action="<?php echo get_home_url("http://localhost/WorkOn_Project/?page_id=229"); ?>">
            <input type="text" name="s" id="s" class="form-control" placeholder="Wyszukaj">
            <button type="submit" class="search-btn">Szukaj</button>
        </form>
     
        </div>
        

    </nav>
</header>

<main>