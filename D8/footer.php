</section>
<?php
include (TEMPLATEPATH . '/webitems/webecho.php');?>
<?php
echoFooter();
wp_footer();
if (dopt('d_footcode_b'))
	echo dopt('d_footcode');
?>
</body>
</html>