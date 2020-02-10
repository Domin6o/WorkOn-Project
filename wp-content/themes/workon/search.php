<?php

 get_header(); ?>

<main>
        <div class="container_search_loop container mt-5">
            <?php if (have_posts()) : while (have_posts()) : the_post() ?>

                <div class="row mt-5 container_search">
                    <div class="col-lg-12 do-animated do-slideInUp">

                        <a class="search_link" href="<?php the_permalink(); ?>">

                        <h2><?php the_title(); ?></h2>

                        </a>

                     <!-- <div class="container_date_author">
                            Opublikowano: <?php the_date("d.m.Y"); ?> | Autor: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author_meta("display_name"); ?></a>
                        </div>    -->

               <div class="search_content">

                         <?php the_content(); ?>

                         
	<button type="button" class="btn_more"><a href="<?php the_permalink(); ?>">Czytaj więcej></a></button>
             
                  </div>
            </div>             
    </div>
            <?php endwhile; ?>
                <div class="pt-5 text-center"><p><?php posts_nav_link(); ?></p></div>
            <?php else : ?>    
                <p class="text-muted text-center my-5">Brak wyników</p>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer(); ?>