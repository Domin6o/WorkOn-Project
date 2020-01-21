<?php
    /* Template Name: About Us */
    
    $team_items = new WP_Query(array(
        "post_type" => "team",
        "posts_per_page" => -1,
        "order" => "DESC",
        "orderby" => "title",
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
    <ul>
        <?php if ($team_items->have_post()) : while ($team_items->have_posts()) :
        $team_items->the_post() ?>
        <li class="team d-flex">
            <figure class="figure">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="figure-img img-thumbnail img-fluid rounded 
                d-start" alt="<?php the_title(); ?>">
                <h4>Zdzisław Sikorka</h4>
            </figure>
            <div class="text m-2">
                <h4>Stanowisko: Strategy & Marketing Specialist</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
        </li>
        <?php endwhile; ?>
        <?php else : ?>
            <p class="text-muted text-center my-5">Brak wpisów</p>
        <?php endif; ?>
        <li class="team d-flex mt-2">
            <div class="text m-2">
                <h4>Stanowisko: SEO/ SEM Manager</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
            <div>
                <img class="mx-4" src="images/sanfran.jpg" alt="">
                <h4>Malwina Nikodemska</h4>
            </div>
        </li>
        <li class="team d-flex mt-2">
            <div>
                <img src="images/sanfran.jpg" alt="">
                <h4>Marek Miodkiewicz</h4>
            </div>
            <div class="text m-2">
                <h4>Stanowisko: Senior Front-End Web Developer</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
        </li>
        <li class="team d-flex mt-2">
            <div class="text m-2">
                <h4>Stanowisko: Marketing & Commercial Specialist</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
            <div>
                <img class="mx-4" src="images/sanfran.jpg" alt="">
                <h4>Leopold Górecki</h4>
            </div>
        </li>
        <li class="team d-flex mt-2">
            <div>
                <img src="images/sanfran.jpg" alt="">
                <h4>Olga Matysiak</h4>
            </div>
            <div class="text m-2">
                <h4>Stanowisko: PR Specialist</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
        </li>
        <li class="team d-flex mt-2">
            <div class="text m-2">
                <h4>Stanowisko: Art Designer</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
            <div>
                <img class="mx-4" src="images/sanfran.jpg" alt="">
                <h4>Lorem Ipsum</h4>
            </div>
        </li>
    </ul>


</div>

<div class="buttons d-flex justify-content-center">

    <button type="button" id="first" class="btn btn-outline-dark m-5"><a a href="./portfolio.html">See
            portfolio</a></button>
    <button type="button" id="second" class="btn btn-outline-dark m-5"> <a href="./contact.html">Contact
            us</a></button>
</div>
  
  

<?php
    get_footer();
?>