<?php get_header(); ?>

<?php var_dump($post); ?>


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
				<?php
					$imgid = get_post_meta($post->ID, 'image_principal', true);
					$img = wp_get_attachment_image_src($imgid, 'single-size');
					var_dump($img);
				?>
				<?php if(!empty($image)): //dont output an empty image tag ?>

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

	</div>

</div>

<?php get_footer(); ?>
