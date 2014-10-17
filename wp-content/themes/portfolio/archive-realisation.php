<?php
/*
Template Name: Liste des réalisations
*/
?>

<?php get_header(); ?>

<?php $realisations = new WP_Query(array('post_type' => 'realisation')); ?>

<div class="list-realisation">
	<?php if ( $realisations->have_posts() ) : while ( $realisations->have_posts() ) : $realisations->the_post(); ?>
		<a href="<?php the_permalink() ?>">
			<div class="block-realisation">
				<?php the_post_thumbnail('thumb_realisation_list'); ?>
				<div class="info-realisation">
					<span class="name"><?php the_title(); ?></span>
					<span class="promotion">
						<?php
							$term = get_term( get_field('promotion', $post->ID), 'promotion');
							echo 'Promotion ' . $term->name;
						 ?>
					</span>
				</div>
			</div>
		</a>
	<?php endwhile; else: ?>

<?php endif; ?>
</div>

<?php get_footer(); ?>