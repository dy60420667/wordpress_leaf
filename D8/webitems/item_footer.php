<?php
function echoFooter() {
	try{
		$current_url = home_url(add_query_arg(array ()));
		if (strstr($current_url, "py40.com")) {
			$filename = TEMPLATEPATH . '/webitems/footer_py40.html';
		}
		if (strstr($current_url, "paoquba.com")) {
			$filename = TEMPLATEPATH . '/webitems/footer_paoquba.html';
		}
		$handle = fopen($filename, "r");
		$contents = stream_get_contents($handle);
		fclose($handle);
	    echo $contents;
	}catch(Exception $e){
		echo "出异常了";
	}

}
?>
