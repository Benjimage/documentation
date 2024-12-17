<?php get_header(); ?>
<main>
    <h2 class="trans">archive</h2>
    <p class="trans"><?php echo __FILE__; ?></p>
    <?php
  
        $title = single_tag_title('', false);
    
    ?>
    <h1><?php echo $title; ?></h1>
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="exerpt">
                    <h2><?php the_title(); ?></h2>

                    <?php the_post_thumbnail(); ?>

                    <p class="post__meta">
                        Publié le <?php the_time(get_option('date_format')); ?>
                        par <?php the_author(); ?> <br>•<span class="italic"><?php comments_number(); ?></span>
                    </p>

                    <?php the_excerpt(); ?>
                   
                        <a href="<?php the_permalink(); ?>" class="post__link" target="_blank">Lire la suite</a>
                    </p>
                </article>
        <?php endwhile;
        endif; ?>
    </div>
    <div class="site__navigation">
        <div class="site__navigation__prev">
            <?php previous_posts_link('Page précédente'); ?>
        </div>
        <div class="site__navigation__next">
            <?php next_posts_link('Page suivante'); ?>
        </div>
    </div>
</main>


<?php get_footer(); ?>