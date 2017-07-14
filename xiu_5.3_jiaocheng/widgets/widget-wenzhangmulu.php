<?php
class widget_wenzhangmulu extends WP_Widget {

	function __construct() {
		parent :: __construct('widget_wenzhangmulu', 'DY 文章目录', array (
			'classname' => 'widget_wenzhangmulu'
		));
	}

	function widget($args, $instance) {
		// 输出显示在页面上
		extract($args);

		$title_widget = apply_filters('widget_name', $instance['title']);

		$content = get_the_content();
		$r = "/<h2>([^<]+)<\/h2>/im";

		preg_match_all($r, $content, $matches);

		$ul_li = '';

		$num = 0;

		foreach ($matches[1] as $num => $title) {

			$content = str_replace($matches[0][$num], '<h3 id="title-' . $num . '">' . $title . '</h3>', $content);

			$ul_li .= '<li><a href="#title-' . $num . '" title="' . $title . '">' . $title . "</a></li>\n";
		}


		$content_titles = "\n<div id='article-index'>
		                     <ul id='index-ul'>\n" . $ul_li . "</ul>
		                  </div>\n";

		echo $before_widget;
		echo $before_title . $title_widget . $after_title;
		echo '<div class="widget_ads_inner">' . $content_titles . '</div>';
		echo $after_widget;
	}

	function form($instance) {
		// 给小工具(widget) 添加表单内容
		$defaults = array (
			'title' => __('文章目录',
			'haoui'
		) . ' ' . date('m-d'), 'code' => '<a href="http://www.alibaixiu.com" target="_blank"><img src="http://www.daqianduan.com/wp-content/uploads/2014/09/alibaixiu.png"></a>');
		$instance = wp_parse_args((array) $instance, $defaults);
?>
		<p>
			<label>
				<?php echo __('标题：', 'haoui') ?>
				<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" class="widefat" />
			</label>
		</p>

<?php

	}
}