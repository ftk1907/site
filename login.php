<?php

$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";

$username = $link->real_escape_string($username);
$password = $link->real_escape_string($password);

if(!empty($username) && !empty($password)) {
	$query = "SELECT ID, USERNAME FROM user WHERE username='$username' AND password='$password';";
	if($result = $link->query($query)) {
		if($result->num_rows == 1) {
			while($row = $result->fetch_object()) {
				$_SESSION['user_id'] = $row->ID;
				$_SESSION['user_username'] = $row->USERNAME;
				echo "You have successfuly logged in... <a href='index.php'>click here to continue</a>";
				exit();
			}
		} else {
			$errors['login'] = 'User not found or password incorrect';
		}
	}
} else {
	$errors['login'] = 'You have left a field empty!';
}

echo 'Error: ' , $errors['login'];