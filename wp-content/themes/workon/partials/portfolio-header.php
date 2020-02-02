<div class="portfolio-title">
    <img class="img img-fluid" src="<?php echo get_the_post_thumbnail_url(42); ?>" alt="">
    <div>
        <h1><?php echo get_the_title(42); ?></h1>
        <p><?php echo get_the_content('', '', 42); ?></p>
    </div>
</div>