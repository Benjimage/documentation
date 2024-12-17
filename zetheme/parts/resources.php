<div class="overlay">
    <div class="container-box">
        <div class="close-layout">
            <span class="close">&#10539;</span>
        </div>
        <h2>Ressources sur la hiérarchie des templates</h2>
        <?php
        $adresses = array (
            'Grafikart : La hiérarchie des templates' => 'https://www.youtube.com/watch?v=CFbYbKu5dTg',
            'Template Hierarchy – Theme Handbook ' => 'https://developer.wordpress.org/themes/basics/template-hierarchy/',
            'Guide de hiérarchie des modèles WordPress (édition 2024)' => 'https://kinsta.com/fr/blog/hierarchie-des-modeles-wordpress/',
            'WordPress template hierarchy : Un guide pas à pas et détaillé'=> 'https://oscar-black.com/blog/wordpress/wordpress-template-hierarchy/',
            'Le Template Hierarchy Capitaine WP'=> 'https://capitainewp.io/formations/developper-theme-wordpress/template-hierarchy/',
            'Template hierarchy'=> 'https://www.youtube.com/results?search_query=template+hierarchy',
        );
        foreach ($adresses as $adresse => $link) {
            ?>
            <a href="<?php echo $link ?>" target="_blank">
                <div class="links-box">
                <p><?php echo $adresse ?></p>
                </div>
            </a>
            <?php
          }
        ?>
        <div class="links-box query-else">
        <p>Autres ressources</p>
        </div>
    </div>
</div>