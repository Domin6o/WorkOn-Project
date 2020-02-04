<?php
    get_header();
    the_post();
?>

<div class="team-container">
    <div class="row justify-content-center p-6">
        <div class="team-container col-12">
            <a class="team-container__link animated fadeIn" href="<?php the_permalink(); ?>">
                <img class=" team-container__img" src="<?php echo get_the_post_thumbnail_url(); ?>">
                <h2 class="team-container__title"><?php the_title(); ?></h2>
                <h5 class="team-container__field"><?php the_field('stanowisko'); ?></h5>
                </a>
                <p class="team-container__content"><?php the_content(); ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>

