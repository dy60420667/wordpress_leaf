<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Leaf , Codilight_Lite
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>



	</head>

	<body <?php body_class('topbar-sticky'); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( '跳转到内容', 'codilight-lite' ); ?></a>
			<?php do_action( 'codilight_lite_before_topbar' ); ?>
			<div id="topbar" class="site-topbar">
				<div class="container">
					<div class="topbar-left pull-left">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<span class="home-menu"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri().'/assets/images/logo.png' ?>" alt="" /></a></span>
							<span class="nav-toggle"><a href="#0" id="nav-toggle"><?php esc_html_e( '菜单', 'codilight-lite' ); ?><span></span></a></span>
							<ul class="ft-menu">
								<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => '', 'items_wrap' => '%3$s', 'fallback_cb' => 'codilight_lite_link_to_menu_editor' ) ); ?>
							</ul>
						</nav><!-- #site-navigation -->
					</div>
					<div class="topbar-right pull-right">
						<ul class="topbar-elements">
							<?php do_action( 'codilight_lite_before_topbar_search' ); ?>
  						
							
							<li class="topbar-search">
								<a href="javascript:void(0)"><i class="search-icon fa fa-search"></i><span><?php esc_html_e( 'Search', 'codilight-lite' ); ?></span></a>
								<div class="dropdown-content dropdown-search">
									<?php get_search_form( true ); ?>
								</div>
							</li>
							<?php do_action( 'codilight_lite_after_topbar_search' ); ?>

							<div class="clear"></div>
						</ul>
					</div>
				</div>
			</div><!--#topbar-->
			<?php do_action( 'codilight_lite_after_topbar' ); ?>

			<div class="mobile-navigation">
				<?php do_action( 'codilight_lite_before_mobile_navigation' ); ?>
				<ul>
					<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => '', 'items_wrap' => '%3$s', 'fallback_cb' => 'codilight_lite_link_to_menu_editor' ) ); ?>
				</ul>
				<?php do_action( 'codilight_lite_after_mobile_navigation' ); ?>
			</div>


