<?php
/*
Template Name: liuyanban
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<div id=”post-<?php the_ID(); ?>”>
 <h2><?php the_title(); ?></h2>
 <div>
  <?php edit_post_link(__("Edit", "inove"), "<span>", "</span>"); ?>
  <?php if ($comments || comments_open()) : ?>
   <span><a href=”#respond”><?php _e("Leave a comment", "inove"); ?></a></span>
   <span><a href=”#comments”><?php _e("Go to comments", "inove"); ?></a></span>
  <?php endif; ?>
  <div></div>
 </div>
 <div>
  <?php the_content(); ?>
  <div></div>
 </div>
</div>
<?php else : ?>
<div>
 <?php _e("Sorry, no posts matched your criteria.", "inove"); ?>
</div>
<div id=”comments”>
<?php comments_template("",true); ?>
</div>
<?php endif; ?>
<?php get_footer(); ?>