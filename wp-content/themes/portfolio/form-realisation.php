<?php
/*
Template Name: Formulaire Realisation
*/
?>

<?php acf_form_head(); ?>
<?php get_header(); ?>

<div class="form-realisation">
<h2>Ajouter un projet</h2>

<?php

acf_form(array(
	'id' => 'realisation',
	'post_id' => 'new_post',
	'new_post' => array(
		'post_type'	=> 'realisation',
		'post_status' => 'pending'
		),
	'form' => true,
	'form_attributes' => array(
		'id' => 'form_realisation',
		'class' => '',
		'action' => '',
		'method' => 'POST',
		'name' => 'form_realisation'
		),
	'html_before_fields' => '',
	'html_after_fields' => '',
	'post_title' => true,
	'post_content' => true,
	'submit_value' => 'Publier cette réalisation'
	));

?>
	<div style="clear: both;"></div>
</div>
<?php get_footer(); ?>