<?php
	/* Template Name: Start */

	get_header();
?>

<div id="carouselExampleIndicators" class="carousel slide d-flex justify-content-center" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php echo IMAGES; ?>/slider-1.jpeg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="<?php echo IMAGES; ?>/slider-2.jpeg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="<?php echo IMAGES; ?>/slider-3.jpeg" class="d-block w-100" alt="...">
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

<div class="container_au col-lg-12 offset-lg-0 col-md-10 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1 do-animated do-fadeInRight">

<h1 class="d-flex justify-content-center my-5">O nas</h1>

<img src="<?php echo IMAGES; ?>/header.jpeg" alt="picture" width="500px" class="rounded mx-auto d-block justify-content-center my-5 img-fluid">

<p class="col-lg-7">Zapraszamy do zapoznania się z naszym teamem i firmą! Dowiesz się jakie świadczymy usługi i ile lat jesteśmy na rynku. Poznasz naszych specjalistów, którzy świetnie wdrożą Cię w szczegóły naszej oferty a także udzielą Tobie odpowiedzi na wszelkie twoje wątpliwośći i pytania.</p>


	<button type="button" class="btn_more"><a href="http://localhost/WorkOn_Project/?page_id=9">Czytaj więcej</a></button>


</div>

<!-- <div class="container_off col-xl-12 col-lg-12 col-md-10 col-sm-10 offset-sm-0 col-10 offset-1 animated fadeInRight"> -->
<div class="container_off col-lg-12 offset-lg-0 col-md-10 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1  do-animated do-fadeInLeft">

<h1 class="d-flex justify-content-center my-5">Oferta</h1>

<img src="<?php echo IMAGES; ?>/offer.jpeg" alt="picture" width="500px" class="rounded mx-auto d-block justify-content-center my-5 img-fluid">

<p class="col-lg-7">Jeśli chcesz poznać naszą ofertę oraz dowiedzieć się czy nasza firma świadczy usługi, których potrzebujesz, koniecznie zapoznaj się z podstroną oferta. Znajdziesz tutaj także informacje jak wstapić do naszej ekipy!
	</p>


<button type="button" class="btn_more"><a href="http://localhost/WorkOn_Project/?page_id=64">Czytaj więcej</a></button>


</div>

<!-- Portfolio -->
<div class="portfolio-front container-fluid">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-11 col-xl-10">
			<h2 class="my-4 text-center">Ostatnie realizacje</h2>
			<?php get_template_part("partials/front", "portfolio"); ?>
		</div>
	</div>
</div>

<!-- Przyciski -->
<div class="buttons d-flex justify-content-center">
	<button type="button" id="first" class="btn btn-outline-dark m-5"><a href="http://localhost/WorkOn_Project/?page_id=42">Zobacz portfolio</a></button>
	<button type="button" id="second" class="btn btn-outline-dark m-5"><a href="http://localhost/WorkOn_Project/?page_id=18">Kontakt</a></button>
</div>

<?php get_footer(); ?>