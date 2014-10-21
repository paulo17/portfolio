<?php get_header(); ?>

<?php //var_dump($post); ?>


<div class="single-project">

	<div class="blocks">

		<div class="block-top">

			<h1 class="title-project"><?php the_title(); ?></h1>

			<div class="level">
				<?php $promotion = get_term( get_field('promotion', $post->ID), 'promotion'); ?>

				<?php if (!empty($promotion->name)): ?>
					<span><?= $promotion->name; ?></span>
				<?php endif ?>

				<?php $annee = get_term( get_field('annee', $post->ID), 'annee'); ?>

				<?php if (!empty($annee->name)): ?>
					<span><?= $annee->name; ?></span>
				<?php endif ?>
			</div>

		</div>

		<div class="block-left">

			<div class="main-image">
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
