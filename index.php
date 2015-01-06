<?php
require 'assets/functions/core.php';

/* DETECT PAGE TYPE --- */
if ($_SERVER[REQUEST_URI] == '/') $type = 'hp';
else if ( preg_match('/en-US\/Product/i', $_SERVER[REQUEST_URI]) ) $type = 'item';
else if ( preg_match('/Products\.aspx/', $_SERVER[REQUEST_URI]) ) $type = 'product';
else if ( preg_match('/en-US\/Content/i', $_SERVER[REQUEST_URI]) ) {
	$type = 'content';
	preg_match('/en-US\/Content\/([^\.]+).aspx/i', $_SERVER[REQUEST_URI], $matches);
	$record = $matches[1];
} else {
	die('maybe we should redirect?');
}
$originalPageContent = file_get_contents('assets/templates/' . $type . '.html');

if ($type == 'product') {
	require 'assets/data/product.php';
	require 'assets/functions/product.php';
	$originalPageContent = placeProducts($originalPageContent, $products);
} else if ($type == 'item') {
	require 'assets/data/product.php';
	require 'assets/functions/item.php';
	$originalPageContent = placeItem($originalPageContent, $products);
} else if ($type == 'content') {
	require 'assets/functions/content.php';
	$info = array( 'record' => $record );
	$originalPageContent = placeContent($originalPageContent, $info);
}

$pageContent = preg_replace_callback('/<!-- Shop:([0-9]+)_([a-zA-Z0-9\_\-\ ]+)\ \[(Main|Top|Bottom|Left)\] START -->(.*)<!-- Shop:[0-9]+_[a-zA-Z0-9\_\-\ ]+.+[Main|Top|Bottom|Left].+END -->/', "parseSRcomments", $originalPageContent);
echo $pageContent;