<?php
/**
* The template for displaying archive pages.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Leaf , Codilight_Lite
*/

get_header(); ?>
<div id="content" class="site-content container <?php echo codilight_lite_sidebar_position(); ?>">
	<?php get_template_part( 'template-parts/content-breadcrumb' ); // 调用面包屑导航模板
	?>
	<div class="content-inside">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				if ( have_posts() ) : $count = 0; ?>

				<?php
				$layout_archive_posts = get_theme_mod( 'layout_archive_posts', 'grid' );
				global $wp_query;
				$total_pages = $wp_query->max_num_pages;
				$current_page = max(1, get_query_var('paged'));
				echo '<div class="block1 block1_list">';
				while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-list' );
				endwhile;
				/**
				* Show pagination if more than 1 page.
				*/
				if (  $wp_query->max_num_pages > 1 ) {
					echo '<div class="ft-paginate">';
					the_posts_pagination(array(
					'prev_next' => True,
					'prev_text' => '<i class="fa fa-angle-left"></i>',
					'next_text' => '<i class="fa fa-angle-right"></i>',
					'before_page_number' => '<span class="screen-reader-text">' . __('页面', 'codilight-lite') . ' </span>',
					));
					printf( '<span class="total-pages">'. esc_html__( '页面 %1$s / %2$s', 'codilight-lite' ) .'</span>', $current_page, $total_pages );
					echo '</div>';
				}
				echo '</div>';
				?>

				<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
