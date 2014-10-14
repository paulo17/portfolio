<?php get_header(); ?>

<h1>Ici liste des réalisations</h1>

<?php
	$realisations = new WP_Query(array(
		'post_type' => 'realisation'
		));
 ?>

<?php if ($realisations->have_posts()): ?>
	<?php while ($realisations->have_posts()) : $realisations->the_post(); ?>
		<h4><?php the_title(); ?></h4>
	<?php endwhile; ?>
<?php endif ?>



<?php get_footer(); ?>