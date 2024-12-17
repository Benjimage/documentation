<?php get_header(); ?>
<main>
    <h2 class="trans">single</h2>
    <p class="trans"><?php echo __FILE__; ?></p>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post">
                <?php the_post_thumbnail(); ?>

                <h1><?php the_title(); ?></h1>

                <div class="post__meta">
                    <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                    <p>
                        Publié le <?php the_date(); ?>
                        par <?php the_author(); ?>
                        dans la catégorie :
                    </p>
                </div>
                <?php the_category(); ?>
                <div class="post__content">
                    <?php the_content(); ?>
                </div>
            </article>

    <?php endwhile;
    endif; ?>
    <div class="site__navigation">
        <div class="site__navigation__prev">
            <?php previous_post_link('%link'); ?>
        </div>
        <div class="site__navigation__next">
            <?php next_post_link('%link'); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>