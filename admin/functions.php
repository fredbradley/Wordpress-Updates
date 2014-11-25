<?php


	function get_template_part($template, $file=null) {
		if ($file) {
			$suffix = "-".$file;
		} else {
			$suffix = "";
		}
		if (file_exists('templates/'.$template.$suffix.'.php')) {
			require_once('templates/'.$template.$suffix.'.php');
		} else {
			require_once('templates/404.php');
		}
	}
	
	
	
	function get_header($file=null) {
		if ($file==null) {
			require_once('templates/header.php');
		} else {
			require_once('templates/header-'.$file.'.php');
		}
	}
	
	function get_title() {
		echo "THE TITLE";
	}
