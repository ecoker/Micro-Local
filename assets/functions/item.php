<?php
function placeItem($pageContent, $products) {
	preg_match('/en-US\/Product\/([^-]+)/i', $_SERVER[REQUEST_URI], $matches);
	$prodId = $matches[1];
	
	foreach ($products['products'] as $k => $product) {
		if ($product['id'] == $prodId) {
			$prod = $product;
			break;
		}
	}
	if (!class_exists(Mustache_Autoloader)) {
		require 'vendor/Mustache/Autoloader.php';
		Mustache_Autoloader::register();
	}
	$m = new Mustache_Engine;
	return $m->render($pageContent, $prod);
}