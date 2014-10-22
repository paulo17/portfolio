<?php get_header(); ?>


<div class="single-project">

	<div class="blocks">

		<div class="block-top">

			<h1 class="title-project"><?php the_title(); ?></h1>

			<div class="level">
				<?php $promotion = get_term( get_field('promotion', $post->ID), 'promotion'); ?>

				<?php if (!empty($promotion->name)): ?>
					<span>P<?= $promotion->name; ?> -</span>
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
				?>
				<?php if(!empty($img)): //dont output an empty image tag ?>
					<img src="<?= $img[0]; ?>" width="<?= $img[1]; ?>" height="<?= $img[2]; ?>">
				<?php endif; ?>
			</div>

		</div>

		<div class="block-right">

			<div class="date">
				<?php if (!empty(the_field('date_de_realisation'))): ?>
					<span><?php the_field('date_de_realisation'); ?></span>
				<?php endif; ?>
			</div>

			<div class="url">
				<a href="<?php the_field('url'); ?>"><?php the_field('url'); ?></a>
			</div>

			<div class="client">
				<?php if (!empty(the_field('client'))): ?>
					<span><?php the_field('client'); ?></span>
				<?php endif; ?>
			</div>

			<div class="description">
				<?php if (!empty(the_content())): ?>
					<span><p><?php the_content(); ?></p></span>
				<?php endif; ?>
			</div>

			<div class="createur">
				<span>
				<?php if( have_rows('membres_dequipe') ): ?>
			 
				    <?php while( have_rows('membres_dequipe') ): the_row(); ?>
				 
						<span><?php the_sub_field('prenom'); ?> <?php the_sub_field('nom'); ?>, </span>
				        
				    <?php endwhile; ?>
			 
				<?php endif; ?>
				</span>
			</div>

			<div class="technologie">
				<span>
				
				<?php if( get_field('technologies') ): ?>
				    <p><?php the_field('technologies'); ?></p>
				<?php endif; ?>

				</span>
			</div>

			<div class="categorie">
				<?php if( get_field('category') ): ?>
					<span><?php the_field('category'); ?></span>
				<?php endif; ?>
			</div>

		</div>

	</div>

</div>

<div class="single-others">

	<h1>Autres Réalisations</h1>

	<div class="gallery">

		<?php $realisations = new WP_Query(array(
			'post_type' => 'realisation',
			'orderby' => array('rand'),
			'posts_per_page' => 6
		)); ?>

		<?php if ( $realisations->have_posts() ) : while ( $realisations->have_posts() ) : $realisations->the_post(); ?>
		<a href="<?php the_permalink() ?>">
			<div class="block-realisation">
				<?php if (!empty(get_field('image_principal', $post->ID))): ?>
					<img src="<?php the_field('image_principal'); ?>" alt="">
				<?php endif ?>
				<div class="info-realisation">
					<span class="name"><?php the_title(); ?></span>
				</div>

			</div>
		</a>
	<?php endwhile; else: ?>
		<p>Il n'existe aucun projet pour le moment</p>
	<?php endif; ?>

	</div>

</div>

<?php get_footer(); ?>
