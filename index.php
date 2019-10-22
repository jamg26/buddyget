<?php

include 'navigation.php';
$role = $_SESSION['user']['role'];

if($role == 'mother') {
	header('location: /pages/mother/');
} else if($role == 'father') {
	header('location: /pages/father/');
} else if($role == 'child') {
	header('location: /pages/child/');
} else {
	header('location: /signin.php');
}

?>