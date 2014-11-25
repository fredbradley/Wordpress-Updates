<?php
session_start();
/* Main Functions File */
require_once('app-config.php');
require_once('class.engine.php');
require_once('functions.php');

$fred = new WordpressCodeAdmin();


$dump = $fred->get_packages();

//dump($dump);

function dump($dump) {
	echo "<pre>";
	var_dump($dump);
	echo "</pre>";
}

