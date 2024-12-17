<?php get_header(); ?>
<main>

	<h2 class="trans">Portfolio</h2>
	<p class="trans"><?php echo __FILE__; ?></p>
	
	<?php
	if (is_category()) {
		$title =  single_tag_title('', false);
	} elseif (is_search()) {
		$title = "Résultat pour " . get_search_query();
	} else {
		$title = 'Portfolio';
	}
	?>
	<h1><?php echo $title; ?></h1>
	<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="portfolio">
					<article class="exerpt fit">
						<a href="<?php the_permalink(); ?>" class="deco-none"><h2><?php the_title(); ?></h2></a>
						<figure class="teaser">
						<?php the_post_thumbnail(); ?>
						</figure>
						<?php the_terms( get_the_ID() , 'type-projet' )?>
					</article>
				</div>
		<?php endwhile;
		endif; ?>
	</div>
	<?php the_posts_pagination(); ?>
</main>


<?php get_footer(); ?>