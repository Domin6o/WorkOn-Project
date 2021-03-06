<?php
    /* Template Name: Offer */

    $offer_items = new WP_Query(array(
        "post_type" => "offer",
        "posts_per_page" => -1,
    ));
    
    // the_post();
    get_header();   
?>

<div class="banner do-animated do-fadeInDownBig">
    <img class="img img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    <h1 id="offer_header"><?php the_title(); ?></h1>
</div>

<div class="offer-container container d-flex">
        <div class="row">
        
        <!-- Okreslenie pętli -->
        <?php if ($offer_items->have_posts()) : while ($offer_items->have_posts()) :
        $offer_items->the_post() ?>
        
            <div class="col-lg-4 col-sm-6 offset-sm-0 col-10 offset-1 offer-container__col">

            <!-- Treść -->
             <a class="offer-container__link do-animated do-bounceInUp" href="<?php the_permalink(); ?>">
                <img class=" offer-container__icon" src="<?php echo get_the_post_thumbnail_url(); ?>">
                <h2 class="offer-container__title"><?php the_title(); ?></h2>
                <div class="offer-container__content">
                    <?php the_excerpt(); ?>
                </div>
             </a>
            <!-- Treść wpisów z wordpressa -->

            </div>
        <?php endwhile;  ?>

        <!-- gdy bedzie za duzo postow do wyswietlania -->
        <div class="text-center py-5">
            <?php posts_nav_link(); ?>
        </div>

        <!-- jak nie bedzie postow -->
        <?php else : ?>
            <p class="text-center ">Brak wyników</p>
        <?php endif; ?>
    </div>
</div>

<!-- Przyciski -->
<div class="buttons d-flex justify-content-center">
	<button type="button" id="first" class="btn btn-outline-dark m-5"><a href="<?php echo get_page_link(42); ?>">Portfolio</a></button>
	<button type="button" id="second" class="btn btn-outline-dark m-5"><a href="<?php echo get_page_link(18); ?>">Kontakt</a></button>
</div>
            
<?php get_footer(); ?>