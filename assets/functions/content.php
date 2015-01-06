<?php
function placeContent($pageContent, $info) {
	if (!class_exists(Mustache_Autoloader)) {
		require 'vendor/Mustache/Autoloader.php';
		Mustache_Autoloader::register();
	}
	$m = new Mustache_Engine;
	return $m->render($pageContent, $info);
}