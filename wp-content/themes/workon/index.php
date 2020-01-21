<?php
    get_header();
?>

<div id="carouselExampleIndicators" class="carousel slide d-flex justify-content-center m-3" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="./images/cat.jpeg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="./images/cat2.jpeg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="./images/cat.jpeg" class="d-block w-100" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<h1 class="m-2 d-flex justify-content-center">O nas</h1>
<p class="m-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<button type="button" class="btn btn-outline-dark m-5"><a href="./about-us.html">Read more</a></button>
<h2 class="m-3 d-flex justify-content-center">Ostatnie realizacje</h2>
<div class="container d-flex justify-content-center">
	<img src="./images/sanfran.jpg" class="img-thumbnail" alt="Cinque Terre">
	<img src="./images/sanfran.jpg" class="img-thumbnail" alt="Cinque Terre">
	<img src="./images/sanfran.jpg" class="img-thumbnail" alt="Cinque Terre">
</div>
<div class="buttons d-flex justify-content-center">
	<button type="button" id="first" class="btn btn-outline-dark m-5"><a href="./portfolio.html">See our portfolio</a></button>
</div>

<?php
    get_footer();
?>