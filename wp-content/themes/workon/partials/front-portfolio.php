<?php 
    $portfolio_items = new WP_Query(array(
    	"post_type" => "portfolio",
    	"posts_per_page" => -1,
    	"orderby" => "date",
    	"order" => "DESC",
        'posts_per_page' => 5
    ));
?>

<?php if ($portfolio_items->have_posts()) : ?>
    <div id="carouselPortfolio" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
                $run = 0;
                while ($portfolio_items->have_posts()) : $portfolio_items->the_post();
            ?>
                <li data-target="#carouselPortfolio" data-slide-to="<?php echo $run ?>" class="<?php if ($run++ == 0) echo "active" ?>"></li>
            <?php endwhile; ?>
        </ol>
        <div class="carousel-inner">
            <?php
                $first_run = true;
                while ($portfolio_items->have_posts()) : $portfolio_items->the_post()
            ?>
                <div class="carousel-item <?php if ($first_run) : $first_run = false; echo "active"; endif; ?>">
                    <img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <div class="carousel-caption d-none d-md-block mb-4">
                        <a href="<?php the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselPortfolio" role="button" data-slide="prev">
            <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselPortfolio" role="button" data-slide="next">
            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php else : ?>
    <p class="text-muted text-center my-5">Nie znaleziono realizacji</p>
<?php endif; ?>