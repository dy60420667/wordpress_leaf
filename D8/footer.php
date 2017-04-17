</section>
<?php

include_once (TEMPLATEPATH . '/webitems/item_footer.php');
echoFooter();
wp_footer();
if (dopt('d_footcode_b'))
	echo dopt('d_footcode');

if(dopt('d_track_b'))
	echo dopt('d_track')
?>
</body>
</html>