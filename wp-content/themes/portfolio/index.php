<?php get_header(); ?>

<?php $realisations = new WP_Query(array('post_type' => 'realisation')); ?>

<div class="list-home-realisation">

	<?php if ( $realisations->have_posts() ) : while ( $realisations->have_posts() ) : $realisations->the_post(); ?>
		<a href="<?php the_permalink() ?>">
			<div class="block-realisation">
				<?php the_post_thumbnail('thumb_realisation_home'); ?>
				<?php if (!empty(get_field('image_principal', $post->ID))): ?>
					<img src="<?php the_field('image_principal'); ?>" alt="">
				<?php endif ?>
				<div class="info-realisation">
					<span class="name"><?php the_title(); ?></span>
					<span class="promotion"></span>
				</div>

			</div>
		</a>
	<?php endwhile; else: ?>

<?php endif; ?>

</div>



<?php get_footer(); ?>
