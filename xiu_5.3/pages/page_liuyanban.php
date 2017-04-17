<?php
/*
	template name: 留言板
	description: template for daqianduan.com d8 theme
*/
get_header();
?>

<div class="content-wrap">
	<div class="content">

		<?php comments_template('/comments_liuyanban.php', true); ?>
	</div>
</div>

<?php get_sidebar(); get_footer(); ?>


