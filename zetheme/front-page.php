<?php get_header(); ?>
<header class="front-page">

<h2 class="trans"><?php echo __FILE__; ?><h2>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- <p>Je suis la page d'accueil</p> -->
            <h1><?php the_title(); ?></h1>
            <?php
            if (is_user_logged_in()):
                $current_user = wp_get_current_user();
                echo "<p>Bonjour, " . $current_user->user_firstname . "</p>";
            else:
                echo "<p>Bonjour, visiteur !</p>";
            endif; ?>
</header>
<?php the_content(); ?>

<main>
    <section>
    <h2 class="section-title" id="test">Dans la catégorie WordPress</h2>
        <?php
            $args = array(
                'post_type' => 'post',
                'category_name' => 'wordpress',
                'posts_per_page' => 3,
                'orderby' => 'rand',
            );
            $attempt = new WP_Query($args);
            echo ('<div class="row">');
                if ($attempt->have_posts()): 
                while ($attempt->have_posts()) : $attempt->the_post();?>
                    <article class="exerpt">
                        <h2><?php the_title(); ?></h2>  
                            <?php the_excerpt(); ?> 
                        <p>
                        <a href="<?php the_permalink(); ?>" class="post__link" target="_blank">Lire la suite</a>
                        </p>     
                    </article>
        <?php        
            endwhile;   
            endif;
            echo ('</div>');
                
            wp_reset_postdata();
        ?>
    </section>
    <section>
        <h2 class="section-title">Portfolio</h2>
        <?php
            $args = array(
                'post_type' => 'portfolio',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'type-projet',
                        'field' => 'slug',
                        'terms' => 'developpement',
                    )
                ),
                'orderby' => 'rand',
            ); 
            $projects = new WP_Query($args);
            echo ('<div class="row">');
            if($projects->have_posts()) :
                while ($projects->have_posts()) : $projects->the_post();?>
                <a href="<?php the_permalink()?>" class="portfolio">
                    <article class="exerpt">
                        <h2><?php the_title()?></h2>
                    </article>
                </a>
        <?php
            endwhile;
            endif;
            echo('</div>');

            wp_reset_postdata();
        ?>
    </section>
</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

