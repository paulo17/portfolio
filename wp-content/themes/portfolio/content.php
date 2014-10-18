<?php
/**
 * @package portfolio
 */
?>

<!-- realisation -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink() ?>">
		<div class="block-realisation">
			<?php if (!empty(get_field('image_principal', $post->ID))): ?>
				<img src="<?php the_field('image_principal'); ?>" alt="">
			<?php endif; ?>
			<div class="info-realisation">
				<span class="name"><?php the_title(); ?></span>
				<span class="promotion">
					<?php
					$term = get_term( get_field('promotion', $post->ID), 'promotion');
					if(!empty($term->name)){ echo 'Promotion ' . $term->name; }
					?>
				</span>
			</div>
		</div>
	</a>
</article>
<!-- realisation -->
