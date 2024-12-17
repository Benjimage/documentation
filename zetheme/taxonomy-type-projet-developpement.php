<?php get_header(); ?>
<main>
    <h2 class="trans">categorie</h2>
    <p class="trans"><?php echo __FILE__; ?></p>
    <?php
    if (is_search()) {
        $title = "Résultat pour " . get_search_query();
    } else {
        $title = single_tag_title('', false);;
    }
     ?>
    <h1><?php echo $title; ?></h1>
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="portfolio">
                <article class="exerpt">
                    <h2><?php the_title(); ?></h2>
                    <figure class="teaser">
					    <?php the_post_thumbnail(); ?>
				    </figure>
                </article>
            </a>
        <?php endwhile;
        endif; ?>
    </div>
   
</main>


<?php get_footer(); ?>