<?php


/**
 * Block 9 : wordpressleaf.com特别定制，当前页的分类下文章列表
 */

// Register the widget
add_action('widgets_init', create_function('', 'return register_widget("Codilight_Lite_Widget_Block_9");'));

// The widget class
class Codilight_Lite_Widget_Block_9 extends WP_Widget {

	public function __construct() {
		$widget_ops = array (
			'classname' => 'block9_widget',
			'description' => esc_html__("在侧边栏上使用，显示当前分类下的文章列表，适用于文章页和分类页。www.wordpressleaf.com出品。",
			'codilight-lite'
		));
		parent :: __construct('ft_block9', esc_html__('FT Block 9 - WordPressLeaf出品', 'codilight-lite'), $widget_ops);
		$this->alt_option_name = 'widget_block9';

		add_action('save_post', array (
			$this,
			'remove_cache'
		));
		add_action('deleted_post', array (
			$this,
			'remove_cache'
		));
		add_action('switch_theme', array (
			$this,
			'remove_cache'
		));
	}

	/**
	 * @param array $args是注册侧边栏的注册的几个变量
	 * @param array $instance是小工具的设置数据
	 */
	public function widget($args, $instance) {
		//extract( $args );
		$cache = array ();
		if (!$this->is_preview()) {
			$cache = wp_cache_get('widget_block9', 'widget');
		}
		if (!is_array($cache)) {
			$cache = array ();
		}
		if (!isset ($args['widget_id'])) {
			$args['widget_id'] = $this->id;
		}
		if (isset ($cache[$args['widget_id']])) {
			echo $cache[$args['widget_id']];
			return;
		}
		ob_start();

		$ignore_sticky = isset ($instance['ignore_sticky']) ? $instance['ignore_sticky'] : 1;
		$orderby = (!empty ($instance['orderby'])) ? $instance['orderby'] : 'date';
		$number_posts = 50;


	  	global $cat;


   		if (is_single()){
	           global $post;
		   $title_auto = get_post($post->id)->post_title;

		   $category = get_the_category();
		   $category_id= $category[0]->term_id;

		   for($x=0;$x<count($category);$x++){
			   	$mulu_id = $category[$x]->term_id;
			   	if($mulu_id=='28'){
			   		continue;
			   	}
				$category_id= $category[$x]->term_id;
		   }

		   $c = get_category($category_id); //默认获取当前所属分类
		   $category_id = $c->term_id;//当前分类ID
		   $category_parent = $c->parent; //父分类ID

		}else{
			$c = get_category($cat); //默认获取当前所属分类

			$category_id = $c->term_id;//当前分类ID
			$category_parent = $c->parent; //父分类ID
			$title_auto = " ";
		}

		if($category_parent==0){//如果没有顶级目录,即当前就是顶级目录
			$category_parent = $category_id;
		}

		$c_0 = get_category($category_parent); //获取分类属性
		$title_0 = $c_0->name;//顶级分类名


		/**
		 * 获取顶级目录下的文章
		 */
		$r_0 = new WP_Query(apply_filters('widget_block4_posts_args', array (
					'post_type' => 'post',
					'posts_per_page' => $number_posts,
					'category__in' => $category_parent,
					'post_status' => 'publish',
					'orderby' => $orderby,
					'order' => 'ASC',
					'ignore_sticky_posts' => $ignore_sticky
				)));

		global $wpdb;
		    $request = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
		    $request .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
		    $request .= " WHERE $wpdb->term_taxonomy.parent = '$category_parent' and $wpdb->terms.name <> 'SlideMenu'";
		    $request .= " ORDER BY term_id asc";
		    $category_list_1 = $wpdb->get_results($request);

			?><?php echo $args['before_widget']; ?>
	       <?php if ( $title_0 ) echo $args['before_title'] . $title_0 . $args['after_title']; ?>
			<div class="block9_widget_content">
				<?php while ( $r_0->have_posts() ) : $r_0->the_post(); ?>
				<article class="block-item">
					<div class="block-content">
						<h2 class="h5 block-title">
						      <?php if($title_auto==get_the_title()){ ?>
										<a class = "active" href="<?php the_permalink(); ?>">
											<?php get_the_title() ? the_title() : the_ID(); ?>
										</a>
							  <?php }else{?>
										<a href="<?php the_permalink(); ?>">
											<?php get_the_title() ? the_title() : the_ID()?>
										</a>
							  <?php }?>
						</h2>
					</div>
				</article>
				<?php endwhile; ?>
			</div> <!-- .block2_widget_content -->
			<?php
			// Reset the global $the_post as this query will have stomped on it
			wp_reset_postdata();?>

			<?php if($category_list_1){?>
				<div class="block9_widget_content">
					<?php  foreach( $category_list_1 as $items ){ ?>
						<?php if ( $items->name ) echo $args['before_title'] . " - ".$items->name . $args['after_title']; ?>
						<?php
						   global $post;
						   $r_0 = new WP_Query( apply_filters( 'widget_block4_posts_args', array(
					          'post_type'           => 'post',
					          'posts_per_page'      => $number_posts,
					          'category__in'        => $items->term_id,
					          'post_status'         => 'publish',
					          'orderby'             => $orderby,
					          'order' => 'ASC' ,
					          'ignore_sticky_posts' => $ignore_sticky
					        ) ) );
				        while ( $r_0->have_posts() ) : $r_0->the_post(); ?>

						<article class="block-item">
							<div class="block-content">
								<h2 class="h5 block-title">
									 <?php if($title_auto==get_the_title()){ ?>
										<a class = "active" href="<?php the_permalink(); ?>">
											<?php get_the_title() ? the_title() : the_ID(); ?>
										</a>
							 		 <?php }else{?>
										<a href="<?php the_permalink(); ?>">
											<?php get_the_title() ? the_title() : the_ID()?>
										</a>
								     <?php }?>
								</h2>
							</div>
						</article>
						<?php endwhile; ?>

					<?php }; ?>
				</div> <!-- .block2_widget_content -->
			<?php }; ?>


		<?php echo $args['after_widget']; ?>
		<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		if (!$this->is_preview()) {
			$cache[$args['widget_id']] = ob_get_flush();
			wp_cache_set('widget_block4', $cache, 'widget');
		} else {
			ob_end_flush();
		}

	}


	/**
	 * @param array $new_instance
	 * @param array $old_instance
	 * @return array
	 */
	public function update($new_instance, $old_instance) {
		$instance = $old_instance;

		$this->remove_cache();
		$alloptions = wp_cache_get('alloptions', 'options');
		if (isset ($alloptions['widget_recent_entries']))
			delete_option('widget_recent_entries');

		$new_instance = wp_parse_args($new_instance, array (
			'title' => '',
			'ignore_sticky' => '',
			'featured_categories' => '',
			'number_posts' => '',
			'orderby' => '',


		));

		$instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['ignore_sticky'] = isset ($new_instance['ignore_sticky']) && $new_instance['ignore_sticky'] ? 1 : 0;
		$instance['featured_categories'] = isset ($new_instance['featured_categories']) ? array_map('absint', ( array) $new_instance['featured_categories']) : false;
		$instance['number_posts'] = absint($new_instance['number_posts']);
		$instance['orderby'] = sanitize_text_field($new_instance['orderby']);

		return $instance;

	}

	/**
	 * @access public
	 */
	public function remove_cache() {
		wp_cache_delete('widget_block9', 'widget');
	}

	/**
	 * @param array $instance
	 */
	public function form($instance) {

		// Set default value.
		$defaults = array (
			'title' => '',
			'featured_categories' => '',
			'ignore_sticky' => 1,
			'number_posts' => 4,
			'orderby' => 'date'
		);
		$instance = wp_parse_args((array) $instance, $defaults);
		$featured_categories = (array) $instance['featured_categories'];
		$list_categories = get_categories();
		$orderby = array (
			'date',
			'comment_count',
			'rand',
			'title'
		);
		?>
				<p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e('小工具标题：', 'codilight-lite') ?></label>
					<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
				</p>
		        <?php $categories = get_categories(); ?>
				<p>
					<label for="<?php echo $this->get_field_id( 'featured_categories' ); ?>"><?php esc_html_e('多选分类（默认所有，不选择表示自动读取当前分页的分类）：', 'codilight-lite') ?></label>
					<select class="widefat" multiple="multiple" name="<?php echo $this->get_field_name( 'featured_categories' );?>[]" id="<?php echo $this->get_field_id( 'featured_categories' );?>">
						<?php foreach ( $categories as $category ) { ?>
							<option value="<?php echo $category->term_id; ?>" <?php echo in_array( $category->term_id, $featured_categories ) ? 'selected="selected" ' : '';?>><?php echo $category->name . " (". $category->count . ")"; ?></option>
						<?php } ?>
					</select>
				</p>
				<p>
					<label for="<?php echo $this->get_field_id( 'number_posts' ); ?>"><?php esc_html_e('显示文章数量：', 'codilight-lite') ?></label>
					<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'number_posts' ); ?>" name="<?php echo $this->get_field_name( 'number_posts' ); ?>" value="<?php echo $instance['number_posts']; ?>" />
				</p>
		        <p>
				   <input id="<?php echo $this->get_field_id('ignore_sticky'); ?>" name="<?php echo $this->get_field_name('ignore_sticky'); ?>" type="checkbox" value="1" <?php checked('1', $instance['ignore_sticky']); ?>/>
				   <label for="<?php echo $this->get_field_id('ignore_sticky'); ?>"><?php esc_html_e('忽略置顶帖', 'codilight-lite') ?></label>
			    </p>
				<p>
					<label for="<?php echo $this->get_field_id( 'orderby' ); ?>"><?php esc_html_e('排序：', 'codilight-lite') ?></label>
					<select class="widefat" name="<?php echo $this->get_field_name( 'orderby' );?>" id="<?php echo $this->get_field_id( 'orderby' );?>">
						<?php for ( $i = 0; $i <= 3; $i++ ){ ?>
							<option value="<?php echo $orderby[$i]; ?>" <?php echo ($orderby[$i] == $instance['orderby']) ? 'selected="selected" ' : '';?>><?php echo $orderby[$i]; ?></option>
						<?php } ?>
					</select>
				</p>

		<?php


	}
}


function get_term_top_most_parent($term_id, $taxonomy) {
	// start from the current term
	$parent = get_term_by('id', $term_id, $taxonomy);
	// climb up the hierarchy until we reach a term with parent = '0'
	while ($parent->parent != '0') {
		$term_id = $parent->parent;

		$parent = get_term_by('id', $term_id, $taxonomy);
	}
	return $parent;
}


function get_parent_id($child_id) {
	global $wpdb;
    $request = "SELECT $wpdb->terms.parent FROM $wpdb->py40_term_taxonomy ";
    $request .= " WHERE $wpdb->py40_term_taxonomy.term_id = '$child_id' ";
    $category_list_1 = $wpdb->get_results($request);

    foreach ($category_list_1 as $showpic) {
		$parent_id = $showpic->parent;
	}
	return $parent_id;
}