<?php
/*
Template Name: Liste des réalisations
*/
?>

<?php get_header(); ?>

<?php $realisations = new WP_Query(array('post_type' => 'realisation')); ?>

<div class="list-realisation">
	<?php if ( $realisations->have_posts() ) : while ( $realisations->have_posts() ) : $realisations->the_post(); ?>
		<div class="block-realisation">
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('thumb_realisation_list'); ?>
			</a>
			<div class="info-realisation">
				<span class="name"><?php the_title(); ?></span>
				<span class="promotion"><?php the_field('promotion'); ?></span>
			</div>
		</div>
	<?php endwhile; else: ?>

<?php endif; ?>
</div>

<?php get_footer(); ?>