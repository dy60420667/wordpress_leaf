<?php get_header(); ?>
<div class="content-wrap">
	<div class="content">
		<?php while (have_posts()) : the_post(); ?>
		<header class="article-header">
			<?php if( _hui('breadcrumbs_single_s') ){ ?>
			<div class="breadcrumbs"><?php echo hui_breadcrumbs() ?></div>
			<?php } ?>
			<h1 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); echo get_the_subtitle(); ?></a></h1>
			<ul class="article-meta">

		</header>
		<?php if( _hui('ads_post_01_s') ) echo '<div class="ads ads-content ads-post">'.hui_get_adcode('ads_post_01').'</div>'; ?>
		<article class="article-content">
			<?php the_content(); ?>
			<?php wp_link_pages('link_before=<span>&link_after=</span>&before=<div class="article-paging">&after=</div>&next_or_number=number'); ?>
  		</article>
		<?php endwhile;  ?>





	</div>
</div>
<?php get_sidebar(); get_footer(); ?>