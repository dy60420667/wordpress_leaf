<?php get_header(); ?>
<div class="content-wrap">
	<div class="content">
		<?php while (have_posts()) : the_post(); ?>
		<header class="article-header">

			<h1 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); echo get_the_subtitle(); ?></a></h1>
			<ul class="article-meta">

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
  		</article>
		<?php endwhile;  ?>





	</div>
</div>
<?php get_sidebar(); get_footer(); ?>