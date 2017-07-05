<?php if( _hui('layout') == 'ui-navtop' ){ ?>
</div>
</section>
<?php } ?>
<footer class="footer">
	<?php if( _hui('flinks_s') && _hui('flinks_cat') && ((_hui('flinks_home_s')&&is_home()) || (!_hui('flinks_home_s'))) ){ ?>
		<div class="flinks">
			<?php
				wp_list_bookmarks(array(
					'category'         => _hui('flinks_cat'),
					'show_description' => false,
					'between'          => '',
					'title_before'     => '<strong>',
					'title_after'      => '</strong>',
					'category_before'  => '',
					'category_after'   => ''
				));
			?>
		</div>
	<?php } ?>
    &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &nbsp; <?php echo __('本站主题由', 'haoui') ?> <a href="http://py40.com" target="_blank">py40.com </a> <?php echo __('提供', 'haoui') ?> &nbsp; <?php echo _hui('footer_seo') ?>
    <?php echo _hui('trackcode') ?>


	<div class="top25">
		<?php $blog_title = get_bloginfo('name'); echo $blog_title?><span id="span_dt_dt"></span>
	</div>

	<script>
	    function show_date_time() {
	        window.setTimeout("show_date_time()", 1000);
	        BirthDay = new Date("9/1/2016 00:00:01");
	        today = new Date();
	        timeold = (today.getTime() - BirthDay.getTime());
	        sectimeold = timeold / 1000
	        secondsold = Math.floor(sectimeold);
	        msPerDay = 24 * 60 * 60 * 1000
	        e_daysold = timeold / msPerDay
	        daysold = Math.floor(e_daysold);
	        e_hrsold = (e_daysold - daysold) * 24;
	        hrsold = Math.floor(e_hrsold);
	        e_minsold = (e_hrsold - hrsold) * 60;
	        minsold = Math.floor((e_hrsold - hrsold) * 60);
	        seconds = Math.floor((e_minsold - minsold) * 60);
	        span_dt_dt.innerHTML = "已运行： " + daysold + "天 " + hrsold + "小时 " + minsold + "分 " + seconds + "秒 " +" 未来的日子我陪你一起走过";
	    }
	    show_date_time();
	</script>

</footer>
<?php if( _hui('layout') !== 'ui-navtop' ){ ?>
</section>
<?php } ?>

<?php
$roll = '';
if( is_home() && _hui('sideroll_index_s') ){
	$roll = _hui('sideroll_index');
}else if( (is_category() || is_tag() || is_search()) && _hui('sideroll_list_s') ){
	$roll = _hui('sideroll_list');
}else if( is_single() && _hui('sideroll_post_s') ){
	$roll = _hui('sideroll_post');
}else if( is_page() && _hui('sideroll_page_s') ){
	$roll = _hui('sideroll_page');
}

$ajaxpager = '0';
if( ((!wp_is_mobile() &&_hui('ajaxpager_s')) || (wp_is_mobile() && _hui('ajaxpager_s_m'))) && _hui('ajaxpager') ){
	$ajaxpager = _hui('ajaxpager');
}

?>
<script>
window.jui = {
	uri: '<?php echo THEME_URI ?>',
	roll: '<?php echo $roll ?>',
	ajaxpager: '<?php echo $ajaxpager ?>'
}
</script>
<?php wp_footer(); ?>
</body>
</html>