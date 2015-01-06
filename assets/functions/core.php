<?php
function parseSRcomments($matches) {
  $shopRecord = getcwd() . '/shop_records/' . $matches[2] . ( $matches[3] !== 'Main' ? $matches[3] : '' ) . '.php';
  if (file_exists($shopRecord)) {
  	$content = file_get_contents($shopRecord);
  } else {
  	$content = $matches[4];
  	$shopFile = fopen($shopRecord, 'w') or die('Problem writing file.');
  	fwrite($shopFile, $content);
  	fclose($shopFile);
  }
  if ($matches[2] !== 'main') {}
  return "<!-- Shop:$matches[1]_$matches[2] [$matches[3]] START -->$content<!-- Shop:$matches[1]_$matches[2] [$matches[3]] END -->";
}