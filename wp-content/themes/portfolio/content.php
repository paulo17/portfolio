<?php
/**
 * @package portfolio
 */

?>

<!-- realisation -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink() ?>">
		<?php
			$img_id = get_post_meta($post->ID, 'image_principal', true);
			$img = wp_get_attachment_image_src($img_id, 'thumb_realisation_list');
		?>
		<div class="block-realisation" style="background: url(<?= $img[0]; ?>); background-size: cover; background-position: center;">
			<div class="filtre"></div>
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
