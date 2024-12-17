<?php get_header(); ?>

<main>
	<h2 class="trans">cpt-tutoriel</h2>
	<h2 class="trans"><?php echo __FILE__; ?><h2>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			
			<?php the_content(); ?>

	<?php endwhile;
	endif; ?>
</main>

<?php get_footer(); ?>