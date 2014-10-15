<?php get_header(); ?>

<h2>Formulaire de test pour ajout réalisation</h2>
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
		'action' => '#',
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

<?php get_footer(); ?>