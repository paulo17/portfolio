<?php get_header(); ?>

<?php
$technologies = get_terms('technologie', array('hide_empty' => 0));
// var_dump($technologies);
?>

<?php foreach ($technologies as $key => $technology): ?>
	<a href="<?= get_term_link($technology); ?>"><?= $technology->name; ?></a>
<?php endforeach ?>

<?php $realisations = new WP_Query(array(
			'post_type' => 'realisation',
			'orderby' => 'rand',
			'posts_per_page' => 9,
			'paged' => false,
		)); ?>

<div class="list-home-realisation">

	<?php if ( $realisations->have_posts() ) : while ( $realisations->have_posts() ) : $realisations->the_post(); ?>
		<?php get_template_part('content', get_post_format()); ?>
	<?php endwhile; else: ?>
		<p>Il n'existe aucun projet pour le moment</p>
	<?php endif; ?>

</div>



<?php get_footer(); ?>
