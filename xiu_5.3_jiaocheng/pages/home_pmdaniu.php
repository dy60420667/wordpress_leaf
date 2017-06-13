<?php
/*
	template name: home_pmdaniu
	description: demo for pmdaniu.com theme
*/
get_header();
?>
<?php include(TEMPLATEPATH . '/pages_home/home_pages_types.php')?>
<div class="content-wrap home_navigate">
	<div class="content">
		<?php echoItem("pmdaniu"); ?>	</div>
</div>


<?php get_sidebar();  get_footer();?>