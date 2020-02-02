<?php
    get_header();
    get_template_part("partials\portfolio", "header");
    get_template_part("partials\portfolio", "links");
?>

<div class="portfolio-container container my-3">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
            <?php get_template_part("partials\portfolio", "post"); ?>
        <?php endwhile; else : ?>
            <p class="text-muted text-center my-5">Nie znaleziono realizacji</p>
        <?php endif; ?>
    </div>
</div>

<?php
    get_footer();
?>