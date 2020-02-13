<?php
    get_header();
    the_post();
	include(get_template_directory() . '/partials/portfolio-links.php');
?>

<div class="portfolio-post container">
    <div class="row">
        <div class="col">
            <h1 class="text-center"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="figure-img img-fluid" alt="<?php the_title(); ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>