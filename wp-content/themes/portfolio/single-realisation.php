<?php get_header(); ?>

<?php //var_dump($post); ?>


<div class="single-project">

	<div class="blocks">
		
		<div class="block-top">

			<h1 class="title-project"><?php the_title(); ?></h1>

			<div class="level">
				<span>
				<?php

				$term = get_term( get_field('promotion', $post->ID), 'promotion');
				$name = $term->name;
				echo 'P'.$name;
				
				?>
				- 
				<?php

				$term = get_term( get_field('annee', $post->ID), 'annee');
				
				echo $name = $term->name;
				?>
				</span>
			</div>

		</div>

		<div class="block-left">

			<div class="main-image">
				<!--
				<?php if (has_post_thumbnail()): ?>
					<?= the_post_thumbnail('single-size'); ?>
				<?php endif ?>
				
				<?php if (!empty(get_field('image_principal', $post->ID))): ?>
					<img src="<?php the_field('image_principal'); ?>" alt="">
				<?php endif ?>
				-->
				<!--
				<?php 
					$attachment_id = get_field('image_principal');
					$size = 'single-size';
					$image = wp_get_attachment_image_src( $attachment_id, $size );
				?>

				<img class="image-class" alt="" src="<?php echo $image[0]; ?>" />
				-->
				
				<?php $image = get_field('image_principal'); ?>
				<?php if($image): //dont output an empty image tag ?>
				<img src="<?php echo $image['sizes']['single-size']; ?>" width="<?php echo $image['sizes']['single-size-width']; ?>" height="<?php echo $image['sizes']['single-size-height']; ?>" />
				<?php endif; ?>
				
			</div>

		</div>

		<div class="block-right">

			<div class="date">
				<span><?php the_field('date_de_realisation'); ?></span>
			</div>

			<div class="url">
				<a href="<?php the_field('url'); ?>"><?php the_field('url'); ?></a>
			</div>

			<div class="client">
				<span><?php the_field('client'); ?></span>
			</div>

			<div class="description">
				<span><p><?php the_content(); ?></p></span>
			</div>

			<div class="createur">
				<span>Membres : <?php
				/*
				$terms = get_term( get_field('membres_dequipe', $post->ID), 'membres_dequipe');
				foreach ( $terms as $term ) {
				    echo $term->name." ";
				}*/
				?></span>
			</div>

			<div class="technologie">
				<span>Technologies : <?php 

				$terms = get_term( get_field('technologies', $post->ID), 'technologies');
				foreach ( $terms as $term ) {
				    echo $term->name." ";
				}
				

				 ?></span>
			</div>

			<div class="categorie">
				<span>Catégories : <?php the_field('category'); ?></span>
			</div>

		</div>	

	</div>

</div>

<div class="single-others">

	<h1>Autres Réalisations</h1>

	<div class="gallery">
		<?php foreach ($images = get_field('images', $post->ID) as $key => $image): ?>
			<div class="image">
				<img src="<?= $image['sizes']['realisation']; ?>" alt="<?= $image['title']; ?>">
			</div>
		<?php endforeach; ?>
	</div>

</div>

<?php get_footer(); ?>
