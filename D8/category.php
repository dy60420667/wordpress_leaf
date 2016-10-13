<?php get_header(); ?>
<div class="content-wrap">
	<div class="content">
		<header class="archive-header">
			<h1><a href="<?php echo get_category_link( get_cat_ID( single_cat_title('',false) ) ); ?>"><?php single_cat_title() ?></a></h1>
			<?php if ( category_description() ) echo '<div class="archive-header-info">'.category_description().'</div>'; ?>
		</header>
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

		$cat_id = get_cat_ID(single_cat_title('',false));
		$cat = get_category($cat_id);
		$cat_slug = $cat->slug;//别名

		$order = 'desc';
		if(strstr($cat_slug,'asc')){
			$order = 'asc';
		}
		$args = array(
			'cat'=>$cat_id,
		    'caller_get_posts' => 1,
		    'paged' => $paged,
		    'orderby'   => date,
    		'order' => $order
		);
		query_posts($args);
		include( 'modules/excerpt.php' ); ?>
	</div>
</div>
<?php get_sidebar(); get_footer(); ?>