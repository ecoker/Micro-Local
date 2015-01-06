<?php
function placeProducts($pageContent, $products) {
	foreach ($products['products'] as $k => $product) {
		$products['products'][$k]['url'] = array(
			'brand' => str_replace(' ', '+', $product['brand']),
			'color' => str_replace(' ', '+', $product['color']),
			'style' => str_replace(' ', '+', $product['style'])
		);
		$products['products'][$k]['rating']['stars'] = str_repeat('*', floor($products['products'][$k]['rating']['number']));
	}
	if (!class_exists(Mustache_Autoloader)) {
		require 'vendor/Mustache/Autoloader.php';
		Mustache_Autoloader::register();
	}
	$m = new Mustache_Engine;
	return $m->render($pageContent, $products);
}