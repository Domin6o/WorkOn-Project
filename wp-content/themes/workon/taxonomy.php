<?php
    get_header();
?>

<?php get_template_part("portfolio_header"); ?>

<div class="portfolio-container container my-3">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
            <div class="col-3">
                <figure class="figure">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="figure-img img-fluid" alt="<?php the_title(); ?>">
                    <figcaption class="figure-caption"><?php the_title(); ?></figcaption>
                </figure>
            </div>
        <?php endwhile; else : ?>
            <p class="text-muted text-center my-5">Nie znaleziono realizacji</p>
        <?php endif; ?>
    </div>
</div>

<?php
    get_footer();
?>