<?php
    /* Template Name: About Us */

    $team_items = new WP_Query(array(
        "post_type" => "about",
        "posts_per_page" => -1,
        // "order" => "DESC",
        // "orderby" => "title",
    ));

    the_post();
    get_header();
?>
<div class="container-fluid banner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
<h1 id="next"><?php the_title(); ?></h1>
</div>
<div class=" about_desc container  justify-content-center">
<div class="m-2 col-12 text-center">
  <!-- <h1 id="next"><?php the_title(); ?></h1> -->
  <?php the_content(); ?>
</div>

</div>


<h1 class="title_team   d-flex justify-content-center">Nasz zespół</h1>

<div class="mt-4 team-container d-flex justify-content-center">

    <ul class="team_list col-8">
      <div class="container_team">
        <?php if ($team_items->have_posts()) : while ($team_items->have_posts()) : $team_items->the_post() ?>
          <li>
            <div class="team row mt-5">
                    <!-- <div class="col-lg-4 mb-3 mb-lg-0"> -->
                        <div class="col-12">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail">
                    <!-- </div> -->
                    <!-- <div class="col-lg-8"> -->
                      <h2><?php the_title(); ?></h2>
                      <?php if( get_field('stanowisko') ): ?>
                        <h5><?php the_field('stanowisko'); ?></h5>
                        <?php endif; ?>
                      <p><?php the_content(); ?></p>
                    </div>
                </div>
                </li>
            <?php endwhile; ?>
                <div class="pt-5 text-center"><p><?php posts_nav_link(); ?></p></div>
            <?php else : ?>
                <p class="text-muted text-center my-5">Brak wyników</p>
            <?php endif; ?>
        </div>
    </ul>
  


</div>

<div class="buttons d-flex justify-content-center">
 
          <button type="button" id="first" class="btn btn-outline-dark m-5"><a a href="http://localhost/WorkOn_Project/?page_id=42">Zobacz portfolio</a></button>

     
         <button type="button" id="second" class="btn btn-outline-dark m-5">  <a href="http://localhost/WorkOn_Project/?page_id=18">Kontakt</a></button>


  </div>



<?php
    get_footer();
?>
