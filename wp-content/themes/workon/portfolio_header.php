<?php
    $taxonomies = get_terms(array(
        'taxonomy' => 'portfolio_cats'
    ));
?>

<div class="portfolio-title">
    <img class="img img-fluid" src="<?php echo get_the_post_thumbnail_url(42); ?>" alt="">
    <div>
        <h1><?php echo get_the_title(42); ?></h1>
        <p><?php echo get_the_content('', '', 42); ?></p>
    </div>
</div>

<div class="portfolio-filters">
    <ul class="mx-5 my-3">
        <li>
            <a href="http://localhost/WorkOn_Project/?page_id=42"
            class="<?php if (!get_queried_object()->term_id) : echo "active"; endif; ?>">
                Wszystkie
            </a>
        </li>
        <?php if ($taxonomies) : foreach ($taxonomies as $taxonomy) : ?>
            <li>
                <a href="<?php echo get_category_link($taxonomy->term_id) ?>"
                class="<?php if (get_queried_object()->term_id === $taxonomy->term_id ) : echo "active"; endif; ?>">
                    <?php echo $taxonomy->name ?>
                </a>
            </li>
        <?php endforeach; endif; ?>
    </ul>
</div>