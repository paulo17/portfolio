<?php
/*
Template Name: Liste des réalisations
*/
?>

<?php get_header(); ?>

<?php $realisations = new WP_Query(array('post_type' => 'realisation', 'posts_per_page' => 12)); ?>

<div class="list-realisation">
	<?php if ( $realisations->have_posts() ) : while ( $realisations->have_posts() ) : $realisations->the_post(); ?>
		<?php get_template_part('content', get_post_format()); ?>
	<?php endwhile; else: ?>
		<?php get_template_part('content-none', get_post_format()); ?>
	<?php endif; ?>

	<?php portfolio_paging_nav(); ?>
</div>

<?php get_footer(); ?>