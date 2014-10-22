<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package portfolio
 */

get_header(); ?>

<div class="notfound">
	<h1>4<span class="green">0</span>4</h1>
	<h2><span class="green">Oops,</span> page <br/> introuvable !</h2>
	<div class="btn_home">
		<a class="button_home" href="<?= home_url(); ?>">ACCUEIL</a>
	</div>
</div>

<?php get_footer(); ?>
