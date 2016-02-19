<?php

	define('DS', DIRECTORY_SEPARATOR);

	echo 'include '; include 'aula06'.DS.'imprime.php';
	echo 'require '; require 'aula06'.DS.'imprime.php';
	echo 'include_once '; include_once 'aula06'.DS.'imprime.php';
	echo 'require_once '; require_once 'aula06'.DS.'imprime.php';

?>