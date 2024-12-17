<?php get_header(); ?>
<main>

	<h2 class="trans">Tutoriels vidéos</h2>
	<p class="trans"><?php echo __FILE__; ?></p>
	
	<?php
	if (is_category()) {
		$title =  single_tag_title('', false);
	} elseif (is_search()) {
		$title = "Résultat pour " . get_search_query();
	} else {
		$title = 'Tutoriels vidéos';
	}
	?>
	<h1><?php echo $title; ?></h1>
	<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="portfolio">
					<article class="exerpt">
						<a href="<?php the_permalink(); ?>" class="deco-none"><h2><?php the_title(); ?></h2></a>
					</article>
				</div>
		<?php endwhile;
		endif; ?>
	</div>
	<?php the_posts_pagination(); ?>
</main>


<?php get_footer(); ?>