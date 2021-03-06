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
				<?php $author = get_the_author();
    if( _hui('author_link') ){
        $author = '<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'">'.$author.'</a>';
    } ?>
				<li><?php echo $author ?> <?php echo __('发布于', 'haoui') ?> <?php echo hui_get_post_date( get_gmt_from_date(get_the_time('Y-m-d G:i:s')) ); ?></li>
				<li><?php echo __('分类：', 'haoui');the_category(' / '); ?></li>
				<?php echo _hui('post_from_s') && hui_get_post_from() ? '<li>'.hui_get_post_from().'</li>' : '' ?>
				<li><?php echo hui_get_views() ?></li>
				<li><?php echo hui_get_comment_number() ?></li>
				<li><?php edit_post_link('['.__('编辑', 'haoui').']'); ?></li>
			</ul>
		</header>
		<?php if( _hui('ads_post_01_s') ) echo '<div class="ads ads-content ads-post">'.hui_get_adcode('ads_post_01').'</div>'; ?>
		<article class="article-content">
		<script type="text/javascript">
		$(function() {
		    var ie6 = document.all;
		    var dv = $('#article-index'),st;
		    dv.attr('otop', dv.offset().top); //存储原来的距离顶部的距离
		    console.log(dv.offset().left);
		    dv.attr('oleft', dv.offset().left); //存储原来的距离顶部的距离
		    $(window).scroll(function() {
		        st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
		        if (st > parseInt(dv.attr('otop'))) {
		            if (ie6) { //IE6不支持fixed属性，所以只能靠设置position为absolute和top实现此效果
		                dv.css({
		                    position: 'absolute',
		                    top: st,
		                    left:dv.offset().left
		                });
		            } else if (dv.css('position') != 'fixed') dv.css({
		                'position': 'fixed',
		                top: 0,
		                left:dv.offset().left
		            });
		        } else if (dv.css('position') != 'static') dv.css({
		            'position': 'static'

		        });
		    });
		});

		$(function() {
			$(text_yincang).click(function(){
			  var target=document.getElementById('text_yincang');
		      var goal = document.getElementById('index-ul');

	            if (goal.style.display=="block"){
	                goal.style.display="none";
	                target.innerText=" [ 显示 ] ";

	            } else {
	                goal.style.display="block";
	                target.innerText=' [ 隐藏 ] ';
	            }
			});
		});

	</script>


			<?php the_content(); ?>
			<?php wp_link_pages('link_before=<span>&link_after=</span>&before=<div class="article-paging">&after=</div>&next_or_number=number'); ?>
        	<?php if( _hui('post_copyright_s') ) echo '<p class="post-copyright">'._hui('post_copyright').'：<a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a> &raquo; <a href="'.get_permalink().'">'.get_the_title().get_the_subtitle().'</a></p>'; ?>
		</article>
		<?php endwhile;  ?>
		<div class="article-social">
			<?php echo hui_get_post_like($class='action action-like'); ?>
			<?php if( _hui('post_link_single_s') ) hui_post_link(); ?>
		</div>

		<?php echo _hui('share_single_s')&&_hui('share_single_code') ? '<div class="share-single">'. _hui('share_single_code') .'</div>' : '' ?>

		<div class="article-tags">
			<?php the_tags(__('标签：', 'haoui'),'',''); ?>
		</div>
		<nav class="article-nav">
			<span class="article-nav-prev"><?php previous_post_link(__('上一篇', 'haoui').'<br>%link'); ?></span>
			<span class="article-nav-next"><?php next_post_link(__('下一篇', 'haoui').'<br>%link'); ?></span>
		</nav>
		<?php if( _hui('ads_post_02_s') ) echo '<div class="ads ads-content ads-related">'.hui_get_adcode('ads_post_02').'</div>'; ?>
		<?php if( _hui('post_related_s') ) hui_posts_related( _hui('related_title'), _hui('post_related_n'), (_hui('post_related_model') ? _hui('post_related_model') : 'thumb') ) ?>
		<?php
			if( !$paged && _hui('sticky_post_s') ) {
				hui_moloader('hui_posts_sticky');
			}
		?>
		<?php if( _hui('ads_post_03_s') ) echo '<div class="ads ads-content ads-comment">'.hui_get_adcode('ads_post_03').'</div>'; ?>
		<?php comments_template('', true); ?>
	</div>
</div>
<?php get_sidebar(); get_footer(); ?>