<?php
    get_header();
    the_post();
?>

<div class="team-container">
    <div class="row justify-content-center p-6">
        <div class="team-container col-10">
            <a class="team-container__link do-animated do-fadeIn" href="<?php the_permalink(); ?>">
                <img class="team-container__img single mx-auto d-block" src="<?php echo get_the_post_thumbnail_url(); ?>">
                <h2 class="team-container__title single"><?php the_title(); ?></h2>
                <h5 class="team-container__field single"><?php the_field('stanowisko'); ?></h5>
            </a>
            <!-- <p class="team-container__content single"></p> -->
            <div class="team-container__content single">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

