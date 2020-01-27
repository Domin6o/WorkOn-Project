<?php
    get_header();
?>

<div>
    <h1 class="m-2 d-flex justify-content-center">Portfolio</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere voluptas dolore alias cum quo cumque nemo assumenda odio, molestias facilis excepturi nam eaque eum dolores veritatis harum aperiam nostrum nisi!</p>
</div>

<?php
    get_template_part("portfolio_links");
?>

<div>
    <div class="container d-flex justify-content-center">
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
            <figure class="figure">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="figure-img img-thumbnail" alt="<?php the_title(); ?>">
                <figcaption class="figure-caption"><?php the_title(); ?></figcaption>
            </figure>
        <?php endwhile; ?>
        <?php else : ?>    
            <p class="text-muted text-center my-5">Nie znaleziono realizacji</p>
        <?php endif; ?>
    </div>
</div>

</div>

<?php
    get_footer();
?>