<div class="col-3 mb-5">
    <a href="<?php echo get_permalink(); ?>">
        <figure class="figure">
            <figcaption class="figure-caption"><?php the_title(); ?></figcaption>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="figure-img img-fluid" alt="<?php the_title(); ?>">
        </figure>
    </a>
</div>