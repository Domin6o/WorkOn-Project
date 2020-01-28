<footer class="justify-content-space-between m-3">
    <div class="media">
        <ul class="social-media">
            <li><h4 class="m-2 d-flex justify-content-start">Obserwuj nas:</h4></li>
            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/?lang=pl"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/?hl=pl"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.snapchat.com/"><i class="fab fa-snapchat"></i></a></li>
            <li><a href="https://pl.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://pl.pinterest.com/"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="https://www.google.com/"><i class="fab fa-google"></i></a></li>
            <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>

    <div class="m-3 d-flex justify-content-center">
        <?php
            wp_nav_menu([
                "theme_location" => "footer-nav-menu",
                "container" => "ul",
                "menu_class" => "little-nav"
            ]); 
        ?>
    </div>

    <p class="d-flex justify-content-center">&copy CAT 2020</p>
    <!-- <p class="d-flex justify-content-center">A<i class="fas fa-camera"></i>A</p> -->

    <?php wp_footer(); ?> <!-- dodanie skryptów na podstawie functions.php -->

</footer>

</body>
</html>