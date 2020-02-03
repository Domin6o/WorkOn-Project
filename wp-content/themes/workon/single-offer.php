<?php   
  /* Template Name: Offer */
    get_header(); 
    the_post();
    
?>
<div class="offer-container">
    <div class="row justify-content-center p-6">
    <div class="offer-container col-lg-7 col-md-8 p-5">
<a class="offer-container__link" href="<?php the_permalink(); ?>">
            <img class=" offer-container__icon" src="<?php echo get_the_post_thumbnail_url(); ?>">
            <h2 class="offer-container__title"><?php the_title(); ?></h2>
            <div class="offer-container__content">
                <?php the_content(); ?>
            </div>
         </a>
</div>
</div>
    </div>
  

<?php get_footer(); ?>