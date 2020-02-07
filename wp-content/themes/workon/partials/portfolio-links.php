<?php
    $taxonomies = get_terms(array(
        "taxonomy" => "portfolio_cats"
    ));
    $post_taxonomy_id = get_queried_object()->term_id;
    if (!$post_taxonomy_id) {
        $term = get_the_terms(get_the_ID(), 'portfolio_cats')[0];
        $post_taxonomy_id = $term->term_id;
    }
?>

<div class="portfolio-filters">
    <ul>
        <li>
            <a href="http://localhost/WorkOn_Project/?page_id=42"
            class="<?php if (!$post_taxonomy_id) : echo "active"; endif; ?>">
                Wszystkie
            </a>
        </li>
        <?php if ($taxonomies) : foreach ($taxonomies as $taxonomy) : ?>
            <li>
                <a href="<?php echo get_category_link($taxonomy->term_id) ?>"
                class="<?php if ($post_taxonomy_id === $taxonomy->term_id ) : echo "active"; endif; ?>">
                    <?php echo $taxonomy->name ?>
                </a>
            </li>
        <?php endforeach; endif; ?>
    </ul>
</div>