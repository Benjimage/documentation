<?php get_header(); ?>

<main>
	<h2 class="trans">search</h2>
	<div class="row">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('parts/search-excerpt',$post->post_type);?>
		<?php endwhile;
	endif; ?>
	</div>
</main>

<?php get_footer(); ?>