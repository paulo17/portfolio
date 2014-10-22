<?php
/*
Template Name: Search Page
*/
 ?>
<?php get_header(); ?>

<div id="search">
	<?php 
		if(isset($_POST['search']) && trim($_POST['search'])!="")
		{
			echo '<h2>Résultats pour <em>'.$_POST['search'].'</em></h2>
			<div class="list-home-realisation">';
			$realisations = new WP_Query(array(
				'post_type' => 'realisation',
				'orderby' => array('rand'),
				'posts_per_page' => 9
			));
			
			if ( $realisations->have_posts() )
			{
				while ( $realisations->have_posts() )
				{
					$realisations->the_post();
					if(strpos(strtolower(get_the_title()),strtolower($_POST['search'])) !== false) : ?>
					<?php get_template_part('content', get_post_format()); ?>
						
					<?php endif;
				}
			}
			else
				echo '
				<p>Il n\'existe aucun projet répertorié</p>';
				
		}
		else
			echo '<h2>Aucun résultat</h2>';
		
		?>

	</div>
</div>
<?php get_footer(); ?>