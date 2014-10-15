<?php

function custom_register(){
	echo '<input type="text" name="test">';
	echo '<input type="text" name="test">';
	echo '<input type="text" name="test">';

}


add_action('register_form', 'custom_register');

 ?>