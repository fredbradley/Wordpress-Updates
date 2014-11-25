<?php
require_once('engine.php');
//echo dump($_SESSION);
if (isset($_POST['login']) && $_POST['login']=='login') {
	$message = $fred->login($_POST['username'], $_POST['password']);
} elseif ($_GET['dologout']) {
	echo $fred->logout();
}



if (!isset($_SESSION['username'])) {
	get_template_part('login');
} else {
	get_template_part('header');
	
	$page = $_GET['page'];
	if (isset($page)) {
		get_template_part($page);
	} else {
		get_template_part('home');
	}
	
	get_template_part('footer'); 
}