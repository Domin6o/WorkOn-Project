<?php
    /* Template Name: Offer */
  
    $offer_items = new WP_Query(array(
        "post_type" => "offer",
        "posts_per_page" => -1,
    ));
    
    get_header();   
?>

<div class="offer-container container d-flex">
    <div class="row">
    <!-- Okreslenie pętli -->

    <?php if ($offer_items->have_posts()) : while ($offer_items->have_posts()) :
        $offer_items->the_post() ?>
        
        <div class="col-3 p-2 mx-4">

        <!-- Ikonki -->

         <a class="m-2" href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>">
      
      
         <!-- Pojawienie się tytułu wpisów -->

         <a href="<?php the_permalink(); ?>"><h2 class="m-2"><?php the_title(); ?></h2></a>

<!-- Treść wpisów z wordpressa -->

          <p class="m"> 

        <?php the_content(); ?>

            </p>
  
        </div>
    
<?php endwhile;  ?>

<!-- gdy bedzie za duzo postow do wyswietlania -->

<div class="text-center py-5"><?php posts_nav_link(); ?></div>

<!-- jak nie bedzie postow -->
<?php else : ?>
    <p class="text-center ">Brak wyników</p>
<?php endif; ?>

    </div>
       </div>

<!-- Przyciski -->
<div class="buttons d-flex justify-content-center">
 
          <button type="button" id="first" class="btn btn-outline-dark m-5"><a a href="http://localhost/WorkOn_Project/?page_id=42">Zobacz portfolio</a></button>

     
         <button type="button" id="second" class="btn btn-outline-dark m-5">  <a href="http://localhost/WorkOn_Project/?page_id=18">Kontakt</a></button>


  </div>
            
<?php get_footer(); ?>