<?php
/*
Template Name: Search Page
*/
 ?>
<?php get_header(); ?>

<h2>Résultats pour <?php if(isset($_POST['search'])) echo $_POST['search']; ?></h2>

<?php $realisations = new WP_Query(array(
			'post_type' => 'realisation',
			'orderby' => array('rand'),
			'posts_per_page' => 9
		));
			
			?>

<div class="list-home-realisation">

	<?php 
	if ( $realisations->have_posts() )
	{
		while ( $realisations->have_posts() )
		{
			$realisations->the_post();
			if(strpos(get_the_title(),$_POST['search'])  !== false) : ?>
			
				<a href="<?php the_permalink() ?>">
					<div class="block-realisation">
						<?php if (!empty(get_field('image_principal', $post->ID))): ?>
							<img src="<?php the_field('image_principal'); ?>" alt="">
						<?php endif ?>
						<div class="info-realisation">
							<span class="name"><?php the_title(); ?></span>
							<span class="promotion"></span>
						</div>

					</div>
				</a>
			<?php endif;

		}
	}
	else
		echo '
		<p>Il n\'existe aucun projet pour le moment</p>';
		
	?>

</div>
<?php get_footer(); ?>