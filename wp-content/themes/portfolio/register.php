<?php
/*
Template Name: Formulaire Inscription
*/
 ?>
<?php get_header(); ?>


<?php
	// _____________________________________________________ VERIFICATIONS DES SAISIES _____________________________________________________
	$champs = Array();
	if(isset($_POST['identifiant']))
	{
		echo '<br/>';
		$identifiant = $_POST['identifiant'];
		if(trim(strlen($identifiant))<1)
			echo 'Vous devez saisir un identifiant.';
		else if(username_exists( $identifiant )!=null)
			echo 'Identifiant déjà utilisé.';
		else
			$champs[] = $identifiant;
	}
	
	if(isset($_POST['email']))
	{
		echo '<br/>';
		$email = $_POST['email'];
		if(trim(strlen($email)<5))
			echo 'Adresse mail invalide';
		else if(email_exists( $email ))
			echo 'L\'adresse mail est déjà utilisé.';
		else
			$champs[] = $email;
	}
	
	if(isset($_POST['password']) && isset($_POST['password_verif']))
	{
		echo '<br/>';
		$password = $_POST['password'];
		$password_verif = $_POST['password_verif'];
		if(strlen(trim($password))<8)
			echo 'Le mot de passe doit être composé d\'au moins 8 caractères.';
		else if($password!=$password_verif)
			echo 'La vérification du mot de passe a échoué.';
		else
			$champs[] = $password;
		
	}
	if(isset($_POST['role']))
		$champs[] = $_POST['role'];
	
	if(sizeof($champs)==4)
	{
		$user_id = wp_create_user( $champs[0], $champs[2], $champs[1] );
		add_user_meta( $user_id, 'role', $champs[3]);
		wp_update_user( array( 'ID' => $user_id, 'role' => 'contributor' ) );
	}
		
	
?>



<!-- ________________________________________ FORMULAIRE _____________________________________________________ -->
<form action="" method="POST">

	<label for="identifiant">Identifiant
	<input type="text" name="identifiant" id="identifiant"></label>
<br/>
	<label for="email">Adresse email
	<input type="email" name="email" id="email"></label>
<br/>
	<label for="password">Mot de passe
	<input type="password" name="password" id="password"></label>
<br/>
	<label for="password_verif">Répeter le mot de passe
	<input type="password" name="password_verif" id="password_verif"></label>
<br/>


	<label for="role">Rôle :
	<SELECT name="role">
	<?php
		$terms = get_terms( 'role', array( 'hide_empty' => 0 ) );
		echo '<OPTION value="'.$terms[0]->name.'" selected="selected">'.$terms[0]->name.'</OPTION>';
		for($i=1;$i<sizeof($terms);$i++)
			echo '<OPTION value="'.$terms[$i]->name.'">'.$terms[$i]->name.'</OPTION>';

	?>
	</SELECT></label>
<br/>
	<input type="submit" value="Enregistrer">
</form>

<?php get_footer(); ?>