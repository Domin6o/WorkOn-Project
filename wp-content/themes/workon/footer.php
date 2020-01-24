<footer class="justify-content-space-between m-3">
    <div class="media">
        <ul class="social-media">
            <li><h2 class="m-2 d-flex justify-content-start">Follow us</h2></li>
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-snapchat"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fab fa-google"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
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
        <!-- <ul class="little-nav m-3 d-flex justify-content-center">
			<li><a href="./index.html">Start</a></li>
			<li><a href="./about-us.html">About us</a></li>
			<li><a href="./offer.html">Offer</a></li>
			<li><a href="./team.html">Team</a></li>
			<li><a href="./portfolio.html">Portfolio</a></li>
			<li><a href="./blog.html">Blog</a></li>
			<li><a href="./contact.html">Contact</a></li>
			<li><a href="./career.html">Career</a></li>
			<li><a href="./privacy">Privacy</a></li>
        </ul> -->
    </div>

    <p class="d-flex justify-content-center">&copy CAT 2020</p>
    <p class="d-flex justify-content-center">A<i class="fas fa-camera"></i>A</p>

    <?php wp_footer(); ?> <!-- dodanie skryptów na podstawie functions.php -->

</footer>

</body>
</html>