<?php
/*
Template Name: Liste des réalisations
*/
?>

<?php get_header(); ?>

<div id="container-realisation" class="list-realisation">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part('content', get_post_format()); ?>

	<?php endwhile; else: ?>

		<?php get_template_part('content-none', get_post_format()); ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>