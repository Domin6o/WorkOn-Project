<?php 
/* Template Name: Start */

$portfolio_items = new WP_Query(array(
	"post_type" => "portfolio",
	"posts_per_page" => -1,
	"order" => "DESC",
	"orderby" => "title",
));

get_header(); ?>


<div id="carouselExampleIndicators" class="carousel slide d-flex justify-content-center m-3" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php echo IMAGES; ?>/cat.jpeg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="<?php echo IMAGES; ?>/cat2.jpeg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="<?php echo IMAGES; ?>/cat3.jpeg" class="d-block w-100" alt="...">
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

<button type="button" class="btn btn-outline-dark m-5"><a href="http://localhost/WorkOn_Project/?page_id=9">Czytaj więcej</a></button>

<h2 class="m-3 d-flex justify-content-center">Ostatnie realizacje</h2>
<div class="container d-flex justify-content-center"
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

<!-- <div class="container d-flex justify-content-center">
	<img src="./images/sanfran.jpg" class="img-thumbnail" alt="Cinque Terre">
	<img src="./images/sanfran.jpg" class="img-thumbnail" alt="Cinque Terre">
	<img src="./images/sanfran.jpg" class="img-thumbnail" alt="Cinque Terre">
</div> -->

<!-- Przyciski -->
<div class="buttons d-flex justify-content-center">
 
<button type="button" id="first" class="btn btn-outline-dark m-5"><a a href="http://localhost/WorkOn_Project/?page_id=42">Zobacz portfolio</a></button>

     
<button type="button" id="second" class="btn btn-outline-dark m-5">  <a href="http://localhost/WorkOn_Project/?page_id=18">Kontakt</a></button>


  </div>

<?php get_footer(); ?>