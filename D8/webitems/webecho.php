<?php


/**
 *头部
 */
function echoHeader() {

}

function echoFooter() {

	if (hasUrl("py40.com")) {
		$filename = TEMPLATEPATH . '/webitems/footer_py40.html';
		echoFileContent($filename);
		return;
	}
	if (hasUrl("paoquba.com")) {
		$filename = TEMPLATEPATH . '/webitems/footer_paoquba.html';
		echoFileContent($filename);
		return;
	}

}

function hasUrl($web_url) {
	$current_url = home_url(add_query_arg(array ()));
	return strstr($current_url, $web_url);
}

function echoFileContent($filename) {
	$handle = fopen($filename, "r");
	$contents = stream_get_contents($handle);
	fclose($handle);
	echo $contents;
	return;
}
?>
