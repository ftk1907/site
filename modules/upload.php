<?php 

if(!empty($_SESSION['user_id'])) {
	require 'modules/views/upload_form.php';
} else {
	$error = 'You need to be logged in';
	require 'modules/views/error.php';
}
