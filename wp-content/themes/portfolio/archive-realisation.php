<?php
/*
Template Name: Liste des réalisations
*/
?>

<?php get_header(); ?>

<?php $realisations = new WP_Query(array('post_type' => 'realisation', 'posts_per_page' => 8)); ?>

<div class="list-realisation">
	<?php if ( $realisations->have_posts() ) : while ( $realisations->have_posts() ) : $realisations->the_post(); ?>
		<?php get_template_part('content', get_post_format()); ?>
	<?php endwhile; else: ?>

<?php endif; ?>

</div>

<?php get_footer(); ?>