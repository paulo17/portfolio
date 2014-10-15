<?php

function custom_register(){

	$password = ( isset( $_POST['password'] ) ) ? trim( $_POST['password'] ) : '';
	$password_verif = ( isset( $_POST['password_verif'] ) ) ? trim( $_POST['password_verif'] ) : '';
	
	?>
	
	<p>
		<label for="password"><?php _e( 'Password', 'mydomain' ) ?>
		<input type="password" class="input" name="password" id="password" size="25"</label>
	</p>
	<p>
		<label for="password_verif"><?php _e( 'Repeter le mot de passe', 'mydomain' ) ?>
		<input type="password" class="input" name="password_verif" id="password_verif" size="25"</label>
	</p>
	<?php
		echo '
		Rôle
		<SELECT class="input" name="nom" size="1">
		<OPTION>Développeur
		</SELECT>
		';
	
	
//A tester | get_terms_list
$taxonomies=get_terms('role'); 
//print_r($taxonomies);

}
add_action('register_form', 'custom_register');


//Gerer les erreurs
function registration_errors_custom( $errors, $sanitized_user_login, $user_email ) {
		
if ( ! isset( $_POST['password'] ) || empty( trim( $_POST['password'] ) ) || strlen($_POST['password'])<8 )
		$errors->add( 'password_error', __( '<strong>ERROR</strong>: Le mot de passe doit être composé d\'au moins 8 caractères.', 'mydomain' ) );
	else if(! isset( $_POST['password_verif'] ) || $_POST['password'] != $_POST['password_verif'] )
		$errors->add( 'password_error', __( '<strong>ERROR</strong>: Mots de passes différents.', 'mydomain' ) );
			
    return $errors;
}
add_filter( 'registration_errors', 'registration_errors_custom', 10, 3 );



function user_register_custom( $user_id ) {
    if ( isset( $_POST['password'] ) ) {
        update_user_meta( $user_id, 'password', trim( $_POST['password'] ) );
    }
}
add_action( 'user_register', 'user_register_custom' );

 ?>
