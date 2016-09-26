<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leaf , Codilight_Lite
 */
?>
		</div> <!--#content-inside-->
	</div><!-- #content -->
	<div class="footer-shadow container">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_template_directory_uri().'/assets/images/footer-shadow.png' ?>" alt="" />
			</div>
		</div>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">

			<?php if ( has_nav_menu( 'footer' ) ): ?>
			<div class="footer-navigation">
				<?php wp_nav_menu( array('theme_location' => 'footer', 'container' => 'footer-menu', 'fallback_cb' => false ) ); ?>
			</div>
			<?php endif; ?>

			<div class="site-info">
				Copyright &copy; 2015-2016
		      	<strong><a rel="nofollow"  href="http://www.py40.com/" target="_blank" > python学习</a></strong>&nbsp;
		    	<strong><a rel="nofollow"  href="http://www.py40.com/" target="_blank">py40.com</a></strong> All Rights Reserved. </div><!-- .site-info -->

		</div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>
<div class="fixed-btn">
<div id="full" class = "fixed-btn">
	<a><img src="<?php echo get_template_directory_uri().'/assets/images/top.png' ?>" border=0 alt="返回顶部"></a>
</div>

<div>

<div style="display:none">
<script language="javascript" type="text/javascript" src="http://js.users.51.la/18972419.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?09da59b50888f910e89ef3fef95351d6";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>

</div>

<script type = "text/javascript" >
	var isie6 = window.XMLHttpRequest ? false: true;
	function newtoponload() {
	    var c = document.getElementById("full");
	    function b() {
	        var a = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
	        if (a > 0) {
	            if (isie6) {
	                c.style.display = "none";
	                clearTimeout(window.show);
	                window.show = setTimeout(function() {
	                    var d = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
	                    if (d > 0) {
	                        c.style.display = "block";
	                        c.style.top = (400 + d) + "px"
	                    }
	                },
	                300)
	            } else {
	                c.style.display = "block"
	            }
	        } else {
	            c.style.display = "none"
	        }
	    }
	    if (isie6) {
	        c.style.position = "absolute"
	    }
	    window.onscroll = b;
	    b()
	}
	if (window.attachEvent) {
	    window.attachEvent("onload", newtoponload)
	} else {
	    window.addEventListener("load", newtoponload, false)
	}
	document.getElementById("full").onclick = function() {
	    window.scrollTo(0, 0)
	};
</script>

</body>
</html>
