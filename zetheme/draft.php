<?php 
// 1. On définit les arguments pour définir ce que l'on souhaite récupérer
$args = array(
    'post_type' => 'post',
    'category_name' => 'films',
    'posts_per_page' => 3,
);

// 2. On exécute la WP Query
$my_query = new WP_Query( $args );

// 3. On lance la boucle !
if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
    
    the_title();
    the_content();
    the_post_thumbnail();

endwhile;
endif;

// 4. On réinitialise à la requête principale (important)
wp_reset_postdata();

 /* var_dump($attempt);
            die(); */
            echo ('<div class="row">');
           
                
            
            echo ('</div>');
        /* else:
            echo ('ça marche pô !'); */
            ?>
            <article class="exerpt">
            <h2><?php the_title(); ?></h2>

            <?php the_post_thumbnail(); ?>

            <p class="post__meta">
                Publié le <?php the_time(get_option('date_format')); ?>
                par <?php the_author(); ?> <br>•<span class="italic"><?php comments_number(); ?></span>
            </p>

            <?php the_excerpt(); ?>
            <p>
                <strong>Avis :</strong>
                <?php echo get_post_meta(get_the_ID(), 'avis', true); ?>
            </p>

            <p>
                <strong>Note :</strong>
                <?php echo get_post_meta(get_the_ID(), 'note', true); ?> / 10
            </p>

            <div class="plus-moins">
                <div class="plus">
                    <?php echo get_post_meta(get_the_ID(), 'plus', true); ?>
                </div>
                <div class="plus">
                    <?php echo get_post_meta(get_the_ID(), 'moins', true); ?>
                </div>
            </div>
            <p>
                <a href="<?php the_permalink(); ?>" class="post__link" target="_blank">Lire la suite</a>
            </p>
        </article>