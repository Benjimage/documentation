<?php get_header(); ?>
<main>
    <h2 class="trans">Error 404</h2>
    <p class="trans"><?php echo __FILE__; ?></p>
    <?php /* if (have_posts()) : while (have_posts()) : the_post(); */ ?>

            <h2 class="message">Ouh la la !!!</h2>
        <?php
            $args = array(
                'post_type' => 'portfolio',
                'name' => 'chansons',
               
            );
            $gag = new WP_Query($args);
            if ($gag->have_posts()) : 
                while ($gag->have_posts()) : $gag->the_post();
                    
                    the_post_thumbnail();
            endwhile;
            else :
                echo 'Ça marche pô !';
            endif;
            wp_reset_postdata();
        ?>
            <?php the_content(); ?>

    <?php /* endwhile;
    else :
        echo 'Ça marche pô !';
    endif; */ ?>
</main>
<?php get_footer(); ?>