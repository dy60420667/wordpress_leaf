<?php

function echoItem(){
	$handle = fopen(TEMPLATEPATH . '/modules/pmdaniu.html', "r");
	$contents = stream_get_contents($handle);
	fclose($handle);
	echo $contents;
}
?>
