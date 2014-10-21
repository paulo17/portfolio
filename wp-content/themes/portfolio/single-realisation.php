<?php get_header(); ?>

<?php //var_dump($post); ?>


<div class="single-project">

	<div class="blocks">
		
		<div class="block-top">

			<h1 class="title-project"><?php the_title(); ?></h1>

			<div class="level">
				<span>Promotion
				<?php
				/*
				echo get_the_term_list($post->ID, 'promotion');

				foreach ( $promos as $promo ) {
			       echo $promo->name;
			    }

				$annees = get_terms('annee');*/
				?></span>
			</div>

		</div>

		<div class="block-left">

			<div class="main-image">
				<?php if (has_post_thumbnail()): ?>
					<?= the_post_thumbnail('single-size'); ?>
				<?php endif ?>
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
				<span><?php the_content(); ?></span>
			</div>

			<div class="createur">
				<span>Créateurs :</span>
			</div>

			<div class="technologie">
				<span>Technologies : <?php the_field('technologies'); ?></span>
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
