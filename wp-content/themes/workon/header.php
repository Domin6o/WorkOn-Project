<!DOCTYPE html>
<html <?php language_attributes();  ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php bloginfo("nazwa"); wp_title(" | "); ?> </title>

    <?php wp_head(); ?> <!-- dodanie styli na podstawie functions.php -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"> -->
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
		<!-- <ul>
            <li><a href="./index.html">Start</a><span class="mx-2"> | </spam></li>
            <li><a href="./about-us.html">About us</a><span class="mx-2"> | </spam></li>
            <li><a href="./offer.html">Offer</a><span class="mx-2"> | </spam></li>
            <li><a href="./team.html">Team</a><span class="mx-2"> | </spam></li>
            <li><a href="./portfolio.html">Portfolio</a><span class="mx-2"> | </spam></li>
            <li><a href="#">Blog</a><span class="mx-2"> | </spam></li>
            <li><a href="./contact.html">Contact us |</a><span class="mx-2"> | </spam></li>
        </ul> -->
    </nav>
</header>

<main>