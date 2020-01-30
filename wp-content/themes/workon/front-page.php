<?php 
/* Template Name: Start */

$portfolio_items = new WP_Query(array(
	"post_type" => "portfolio",
	"posts_per_page" => -1,
	"order" => "DESC",
	"orderby" => "title",
));

get_header(); ?>


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

<div class="container_au col-lg-12 col-sm-6 offset-sm-0 col-10 offset-1">

<h1 class="d-flex justify-content-center my-5">O nas</h1>

<img src="<?php echo IMAGES; ?>/header.jpeg" alt="picture" width="500px" class="rounded mx-auto d-block justify-content-center my-5 img-fluid">

<p class="col-lg-7">Zapraszamy do zapoznania się z naszym teamem i firmą! Dowiesz się jakie świadczymy usługi i ile lat jesteśmy na rynku. Poznasz naszych specjalistów, którzy świetnie wdrożą Cię w szczegóły naszej oferty a także udzielą Tobie odpowiedzi na wszelkie twoje wątpliwośći i pytania.</p>


	<button type="button" class="btn_more"><a href="http://localhost/WorkOn_Project/?page_id=9">Czytaj więcej</a></button>


</div>

<div class="container_au col-lg-12 col-sm-6 offset-sm-0 col-10 offset-1">

<h1 class="d-flex justify-content-center my-5">Oferta</h1>

<img src="<?php echo IMAGES; ?>/offer.jpeg" alt="picture" width="500px" class="rounded mx-auto d-block justify-content-center my-5 img-fluid">

<p class="col-lg-7">Jeśli chcesz poznać naszą ofertę oraz dowiedzieć się czy nasza firma świadczy usługi, których potrzebujesz, koniecznie zapoznaj się z podstroną oferta. Znajdziesz tutaj także informacje jak wstapić do naszej ekipy!
	</p>


<button type="button" class="btn_more"><a href="http://localhost/WorkOn_Project/?page_id=64">Czytaj więcej</a></button>


</div>


<!-- Portfolio -->
<div class="container_au col-lg-12 col-sm-6 offset-sm-0 col-10 offset-1">
<h2 class="mt-5 d-flex justify-content-center">Ostatnie realizacje</h2>
<div class="container d-flex justify-content-center my-5"
        <?php if ($portfolio_items->have_posts()) : while ($portfolio_items->have_posts()) : $portfolio_items->the_post() ?>>
            <figure class="figure">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="figure-img img-thumbnail" alt="<?php the_title(); ?>">
                <figcaption class="figure-caption"><?php the_title(); ?></figcaption>
            </figure>
        <?php endwhile; ?>
        <?php else : ?>    
            <p class="text-muted text-center my-5">Nie znaleziono realizacji</p>
        <?php endif; ?>
    </div>
		</div>
<!-- Przyciski -->
<div class="buttons d-flex justify-content-center">
 
<button type="button" id="first" class="btn btn-outline-dark m-5"><a a href="http://localhost/WorkOn_Project/?page_id=42">Zobacz portfolio</a></button>

     
<button type="button" id="second" class="btn btn-outline-dark m-5"><a href="http://localhost/WorkOn_Project/?page_id=18">Kontakt</a></button>


  </div>

<?php get_footer(); ?>