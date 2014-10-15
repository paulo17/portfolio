<?php get_header(); ?>

<form action="" method="POST">
	<label for="email">Adresse email</label>
	<input type="email" name="email">
	<label for="password1">Mot de passe</label>
	<input type="password" name="password1">
	<label for="password2">Repeter le mot de passe</label>
	<input type="password" name="password2">

	<select name="" id="">

	</select>

	<?php
	$role = get_taxonomy('role');
	$terms = get_terms( 'role', array( 'hide_empty' => 0 ) );
	var_dump($terms);
	 ?>

</form>



<?php get_footer(); ?>