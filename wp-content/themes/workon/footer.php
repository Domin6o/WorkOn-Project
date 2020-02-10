<footer class="justify-content-space-between m-3 ">
    <div class="social-media">
        <h5 class="follow my-6">Obserwuj nas:</h5>
        <ul>
            <li><a href="https://www.facebook.com/"><i class="sm fab fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/?lang=pl"><i class="sm fab fa-twitter"></i></a></li>
            <li><a href="https://pl.linkedin.com/"><i class="sm fab fa-linkedin-in"></i></a></li>
            <li><a href="https://www.instagram.com/?hl=pl"><i class="i-sm fab fa-instagram"></i></a></li>
            <li><a href="https://www.snapchat.com/"><i class="s-sm fab fa-snapchat"></i></a></li>
            <li><a href="https://pl.pinterest.com/"><i class="gyp-sm fab fa-pinterest"></i></a></li>
            <li><a href="https://www.google.com/"><i class="gyp-sm fab fa-google"></i></a></li>
            <li><a href="https://www.youtube.com/"><i class="gyp-sm fab fa-youtube"></i></a></li>
        </ul>

    </div>

    <div class="my-3 d-flex justify-content-center">
        <?php
            wp_nav_menu([
                "theme_location" => "footer-nav-menu",
                "container" => "ul",
                "menu_class" => "little-nav"
            ]); 
        ?>
    </div>

    <p class="logo_container d-flex justify-content-center">&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?></p>

    <?php wp_footer(); ?> <!-- dodanie skryptów na podstawie functions.php -->

</footer>

</body>
</html>