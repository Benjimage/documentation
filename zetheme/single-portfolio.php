<?php get_header(); ?>


<main class="site__portfolio">
<h2 class="trans"><?php echo __FILE__; ?><h2>
    <h1 class="site__heading"><?php post_type_archive_title(); ?></h1>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<div class="row"></div>
			<div class="project">
				<div class="data-title">
					<h2 class="project__title">
						<?php the_title(); ?>
					</h2>
					<?php the_terms( get_the_ID() , 'type-projet' ); ?>
					</div>
				<figure class="teaser">
					<?php the_post_thumbnail(); ?>
				</figure>
			</div>
		</div>
    <?php endwhile; endif; ?>
</main> 

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>