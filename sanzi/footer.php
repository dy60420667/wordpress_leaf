<div class="clr"></div>
		<div id="footer">
		<div class="footbg">
		<span>Copyright <?php echo comicpress_copyright(); ?>  <a href="<?php echo get_settings('Home'); ?>/"><?php bloginfo('name'); ?></a>保留所有权利.
       </span><br>
	   Theme By <a href="http://3zi.me/" title="主题：SanZi" >SanZi</a>. Powered By <a href="http://www.wordpress.org/" target="_blank" rel="nofollow" >WordPress</a>. 由<a href="https://billing.adminvm.com/aff.php?aff=056" target="_blank" rel="nofollow" >adminvm面板</a>强力驱动。
		</div>
		</div>

	</div>
</div>
<!-- 返回顶部 -->
<div style="display: none;" id="gotop"></div>
<!-- 返回顶部END -->

</body>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sanzi.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/prettify.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/prettify.min.js"></script>
<script type="text/javascript">
window.onload = function(){prettyPrint();};
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
 <!--[if ie 6]>
	<script src="http://letskillie6.googlecode.com/svn/trunk/letskillie6.zh_TW.pack.js"></script>
<![endif]-->
<?php if ( is_singular()| is_page()){ ?><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script><?php } ?>
<?php wp_footer(); ?>
</html>


