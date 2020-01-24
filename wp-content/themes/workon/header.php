<!DOCTYPE html>
<html <?php language_attributes();  ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php bloginfo("nazwa"); wp_title(" | "); ?> </title>

    <?php wp_head(); ?> <!-- dodanie styli na podstawie functions.php -->
    <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One&display=swap&subset=latin-ext" rel="stylesheet">
</head>

<body>

<header>
    <nav class="nav-menu d-flex justify-content-end">
        <?php
            wp_nav_menu([
                "theme_location" => "header-nav-menu",
                "container" => "ul",
                "menu_class" => "list-inline",
                "item_spacing" => "|"
            ]); 
        ?>
    </nav>
</header>

<main>