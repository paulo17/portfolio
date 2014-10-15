<?php get_header(); ?>

<?php var_dump($post); ?>

<h1><?php the_title(); ?></h1>

<div class="main-image">
	<?php if (has_post_thumbnail()): ?>
		<?= the_post_thumbnail('thumbnail'); ?>
	<?php endif ?>
</div>


<div class="url">
	<span>URL</span>
	<a href="<?= get_field('url', $post->ID); ?>"><?= get_field('url', $post->ID); ?></a>
</div>

<div class="date">
	<span>Date de réalisation</span>
	<?= get_field('date_realisation', $post->ID); ?>
</div>

<div class="gallery">
	<?php foreach ($images = get_field('images', $post->ID) as $key => $image): ?>
		<div class="image">
			<img src="<?= $image['sizes']['realisation']; ?>" alt="<?= $image['title']; ?>">
		</div>
	<?php endforeach; ?>
</div>


<?php get_footer(); ?>
