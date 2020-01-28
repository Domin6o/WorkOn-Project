<?php
    get_header();
?>

<div class="mx-5 my-3">
    <h1 class="m-2 text-center"><?php echo get_the_title(42); ?></h1>
    <p><?php echo get_the_content('', '', 42); ?></p>
</div>

<?php
    get_template_part("portfolio_links");
?>

<div class="container my-3">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
            <div class="col-3">
                <figure class="figure">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="figure-img img-thumbnail" alt="<?php the_title(); ?>">
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