<?php


/**
 *头部
 */
function echoHeader() {
	$filename = "";
	$current_url = home_url(add_query_arg(array ()));
	if (strstr($current_url, "paoquba.com")) {
		$filename = TEMPLATEPATH . '/webitems/header_paoquba.html';
	}

	if($filename){
		$handle = fopen($filename, "r");
		$contents = stream_get_contents($handle);
		fclose($handle);
		echo $contents;
	}

}
?>
