<div class="r_statistics">

   <ul class="linetwo">
<li><a href="<?php echo get_settings('Home'); ?>/archives">日志总数：<?php $count_posts = wp_count_posts(); echo $published_posts = $count_posts->publish;?> 篇</a></li>
<li><a href="<?php echo get_settings('Home'); ?>/guestbook">评论总数：<?php echo $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments where comment_author!='William'");?> 篇</a></li>
<li><a href="<?php echo get_settings('Home'); ?>/tags">标签数量：<?php echo $count_tags = wp_count_terms('post_tag'); ?> 个</a></li>
<li><a href="<?php echo get_settings('Home'); ?>/bloglink">链接数量：<?php $link = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->links WHERE link_visible = 'Y'"); echo $link; ?> 个</a></li>
<li><a href="<?php echo get_settings('Home'); ?>">运行天数：<?php echo floor((time()-strtotime("2016-9-29"))/86400); ?> 天</a></li>

  </ul>
<ul class="lineone"><li><a href="<?php echo get_settings('Home'); ?>/about">建站日期：2016年09月29日</a></li>
<li><a href="<?php echo get_settings('Home'); ?>">最后更新：<?php $last = $wpdb->get_results("SELECT MAX(post_modified) AS MAX_m FROM $wpdb->posts WHERE (post_type = 'post' OR post_type = 'page') AND (post_status = 'publish' OR post_status = 'private')");$last = date('Y年m月d日', strtotime($last[0]->MAX_m));echo $last; ?></a></li>
</ul>

</div>