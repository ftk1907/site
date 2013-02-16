<?php 

if(!empty($_SESSION['user_id'])) {

	require 'modules/views/logged_in.php';
}
else {

	require 'modules/views/login_form.php';
}