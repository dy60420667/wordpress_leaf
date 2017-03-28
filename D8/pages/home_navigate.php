<?php
/*
	template name: PMDaNiu
	description: template for daqianduan.com d8 theme
*/
get_header();
?>
<?php include(TEMPLATEPATH . '/modules/pmdaniu.php')?>
<div class="content-wrap home_navigate">
	<div class="content">
		<?php echoItem(); ?>
	</div>
</div>


<?php get_sidebar();  get_footer();?>