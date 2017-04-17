<?php
/*
	template name: home_paoquba
	description: demo for paoquba.com theme
*/
get_header();
?>
<?php include(TEMPLATEPATH . '/pages_home/home_pages_types.php')?>
<div class="content-wrap home_navigate">
	<div class="content">
		<?php echoItem("paoquba"); ?>	</div>
</div>


<?php get_sidebar();  get_footer();?>