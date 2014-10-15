<?php get_header(); ?>

<?php $realisations = new WP_Query(array('post_type' => 'realisation')); ?>

<div class="list-realisation">

<?php if ( $realisations->have_posts() ) : while ( $realisations->have_posts() ) : $realisations->the_post(); ?>
	<div class="block-realisation">
		<a href="<?php the_permalink() ?>">
			<img src="http://lorempixel.com/236/156" alt="">
		</a>
		<div class="info-realisation">
			<span class="name"><?php the_title(); ?></span>
			<span class="promotion"></span>
		</div>
	</div>
<?php endwhile; else: ?>

<?php endif; ?>

</div>



<?php get_footer(); ?>
