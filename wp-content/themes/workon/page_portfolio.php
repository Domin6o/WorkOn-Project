<?php
    /* Template Name: Portfolio */
    $portfolio_items = new WP_Query(array(
        "post_type" => "portfolio",
        "posts_per_page" => -1,
        "orderby" => "title",
        "order" => "ASC"
    ));
    // the_post();
    get_header();
    // get_template_part("partials\portfolio", "header");
    // get_template_part("partials\portfolio", "links");
    include(get_template_directory() . '/partials/portfolio-header.php');
	include(get_template_directory() . '/partials/portfolio-links.php');
?>

<div class="portfolio-container container my-3">
    <div class="row">
        <?php if ($portfolio_items->have_posts()) : while ($portfolio_items->have_posts()) : $portfolio_items->the_post() ?>
            <?php 
                // get_template_part("partials\portfolio", "post");
                include(get_template_directory() . '/partials/portfolio-post.php');
            ?>
        <?php endwhile; else : ?>
            <div class="col-12">
                <p class="text-muted text-center my-5">Nie znaleziono realizacji</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
    get_footer();
?>