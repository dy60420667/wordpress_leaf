<?php
/*
	template name: 独立文章页面
	description: template for daqianduan.com d8 theme
*/
get_header();
?>

<div class="content-wrap">
	<div class="content">


		<?php while (have_posts()) : the_post(); ?>
			<div class="article-content">
				<?php the_content(); ?>
				</br>
				</br>
				</br>
			</div>
		<?php comments_template('', true); endwhile;  ?>
	</div>
</div>

<?php get_sidebar(); get_footer(); ?>


