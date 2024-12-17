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