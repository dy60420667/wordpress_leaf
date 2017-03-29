<?php
function echoItem($type) {
	$filename = "";
	if ($type == 'pmdaniu') {
		$filename = TEMPLATEPATH . '/pages_home/pmdaniu/pmdaniu.html';
	}else if ($type == 'paoquba') {
		$filename = TEMPLATEPATH . '/pages_home/paoquba/paoquba.html';
	}

	$handle = fopen($filename, "r");
	$contents = stream_get_contents($handle);
	fclose($handle);
	echo $contents;

	return;
}
?>
