<?php
    $taxonomies = get_terms( array(
        'taxonomy' => 'portfolio_cats'
    ) );
?>
<div class="filter-list">
    <ul class="mx-5 my-3">
        <li><a href="http://localhost/WorkOn_Project/?page_id=42">Wszystkie</a></li>
        <?php if ($taxonomies) : foreach ($taxonomies as $taxonomy) : ?>
            <li><a href="<?php echo get_category_link($taxonomy->term_id) ?>"><?php echo $taxonomy->name ?></a></li>
        <?php endforeach; endif; ?>
    </ul>
</div>