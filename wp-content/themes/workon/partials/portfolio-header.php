<div class="portfolio-title">
    <!-- <img class="img img-fluid" src="<?php echo get_the_post_thumbnail_url(42); ?>" alt=""> -->
    <div class="do-animated do-fadeInDownBig">    
        <img class="img img-fluid" src="<?php echo IMAGES; ?>/portfolio_banner.jpg" alt="">
        <h1><?php echo get_the_title(42); ?></h1>
    </div>
    <p class="my-5 text-center"><?php echo get_the_content('', '', 42); ?></p>
</div>