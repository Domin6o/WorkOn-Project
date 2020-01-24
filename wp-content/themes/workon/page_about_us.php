<?php
    /* Template Name: About Us */
    
    $team_items = new WP_Query(array(
        "post_type" => "about",
        "posts_per_page" => -1,
        // "order" => "DESC",
        // "orderby" => "title",
    ));    
    
    get_header();
?>
<h1 class="m-2 d-flex justify-content-center">O nas</h1>
      
  
      <h4 class="m-3">Co robimy</h4>
      <p class="m-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <h4 class="m-3">Nasza misja</h4>
      <p class="m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsam sunt laboriosam, est cumque porro 
      possimus quia excepturi blanditiis nisi officia recusandae voluptas, doloribus quis. Veniam neque modi dolores 
      beatae? Lorem ipsum dolor, sit amet consectetur adipisicing elit. At distinctio sunt saepe similique quae. 
      Deleniti, magnam. Fuga, sit quas excepturi reprehenderit commodi assumenda facilis animi, quisquam odio nisi 
      tenetur inventore.</p>
  
      <h1 class="mt-5 d-flex justify-content-center">Nasz zespół</h1>

<div class="mt-4 team-container d-flex">
    <ul class="team_list">
        <?php if ($team_items->have_posts()) : while ($team_items->have_posts()) : $team_items->the_post() ?>
          <li>    
            <div class="team row mt-5">
                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail"></a>
                    </div>
                    <div class="col-lg-6">
                    <h2><?php the_title(); ?></h2>

                      
                        <?php the_content(); ?>

                    </div>
                </div>
                </li>
            <?php endwhile; ?>
                <div class="pt-5 text-center"><p><?php posts_nav_link(); ?></p></div>
            <?php else : ?>    
                <p class="text-muted text-center my-5">Brak wyników</p>
            <?php endif; ?>
      
    </ul>


</div>

<div class="buttons d-flex justify-content-center">

    <button type="button" id="first" class="btn btn-outline-dark m-5"><a a href="./page_portfolio.php">Zobacz
            Portfolio</a></button>
    <button type="button" id="second" class="btn btn-outline-dark m-5"> <a href="./page_contact.php">Skontaktuj się z Nami
            </a></button>
</div>
  
  

<?php
    get_footer();
?>