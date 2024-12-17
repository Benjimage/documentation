<?php get_header(); ?>

<main>
    <h2 class="trans">page</h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

    <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>