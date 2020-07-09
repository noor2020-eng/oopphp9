<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className){
	$path="classes/";
	$extension=".php";
	$fullname=$path.$className.$extension;

	include_once $fullname;
}
?>