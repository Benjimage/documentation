<footer>
    <?php get_template_part('parts/resources');?>
    <?php get_template_part('parts/search-form');?>
    <?php wp_nav_menu(array(
        'theme_location' => 'footer',
        'container' => 'ul', 
    )); 
    ?>
        
        <div class="description"><p>Documentation WordPress et langages web</p></div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>