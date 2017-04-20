<?php
/*
	template name: 留言板
	description: template for daqianduan.com d8 theme
*/
get_header();
?>

<div class="content-wrap">
	<div class="content">
		<?php while (have_posts()) : the_post(); ?>
		<h1 class="title"><strong><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></strong></h1>
			<article class="article-content">
				<?php the_content(); ?>
			</article>
		<?php endwhile;  ?>

		<?php comments_template('/comments_liuyanban.php', true); ?>
	</div>
</div>


<?php get_sidebar(); get_footer(); ?>


