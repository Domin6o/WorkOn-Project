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

<div class="container-fluid about_desc do-animated do-fadeInDownBig">
    <img class="img img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    <h1 id="next"><?php the_title(); ?></h1>
</div>
<div class="about_desc col-10 container justify-content-center do-animated do-jello">
  <div class="m-2 col-12 text-center">
    <?php the_content(); ?>
  </div>
</div>

<h1 class="title_team d-flex justify-content-center do-animated do-flipInY">Nasz zespół</h1>

<div class="mt-4 team-container d-flex justify-content-center">

    <ul class="team_list col-10">
      <div class="team-container">
      
        <?php if ($team_items->have_posts()) : while ($team_items->have_posts()) : $team_items->the_post() ?>
        
          <li>
            <div class="team row mt-5">
              <!-- <div class="col-lg-4 mb-3 mb-lg-0"> -->
              <div class="team-container do-animated do-zoomIn">
                <a class="team-container__link" href="<?php the_permalink(); ?>">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" id="avatar" class="team-container__img img-fluid img-thumbnail">
                  <!-- </div> -->
                  <!-- <div class="col-lg-8"> -->
                  <h2 class="team-container__title-name"><?php the_title(); ?></h2>
                  <?php if( get_field('stanowisko') ): ?>
                    <h5 class="team-container__field-area"><?php the_field('stanowisko'); ?></h5>
                  <?php endif; ?>
                  <div class="team-container__content-mytext"><?php the_content(); ?></div>
                </a>
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
	<button type="button" id="first" class="btn btn-outline-dark m-5"><a href="<?php echo get_page_link(42); ?>">Portfolio</a></button>
	<button type="button" id="second" class="btn btn-outline-dark m-5"><a href="<?php echo get_page_link(18); ?>">Kontakt</a></button>
</div>

<?php
    get_footer();
?>
