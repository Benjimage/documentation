<?php
/*
Template Name: 404
Template Post Type: post, page
*/
get_header(); ?>
<main>
    <h2 class="trans">Error 404</h2>
    <p class="trans"><?php echo __FILE__; ?></p>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <!-- <div class="search-404">
                <p>Entrez votre recherche</p>
                <?php /* get_search_form(); */ ?>
            </div> -->
            <?php the_content(); ?>

    <?php endwhile;
    endif; ?>
</main>
<?php get_footer(); ?>