<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<title><?php
	$t = trim(wp_title('', false));
	if($t) echo $t._hui('connector');
	else ''; bloginfo('name');
	if ($paged > 1) echo _hui('connector').__('第', 'haoui'), $paged, __('页', 'haoui');
	if (is_home ()) echo _hui('connector').get_option('blogdescription');
?></title>
<?php wp_head(); ?>
<link rel="shortcut icon" href="<?php echo HOME_URI.'/favicon.ico' ?>">
<!--[if lt IE 9]><script src="<?php echo THEME_URI ?>/js/html5.js"></script><![endif]-->
</head>
<body <?php body_class( hui_bodyclass() ); ?>>
<?php if( _hui('layout') == 'ui-navtop' ){ ?>
<header class="header">
<div class="container">
<?php }else{ ?>
<section class="container">
<header class="header">
<div class="wy-side-scroll">
<?php } ?>
	<?php echo '<a href="'.get_bloginfo('url').'" class = "header_home">'.get_bloginfo('name').'</a>' ?>
	<?php if( _hui('search_nav') || _hui('search_nav_m') ){
		echo '<form method="get" class="search-form" action="'.esc_url( home_url( '/' ) ).'" ><input class="form-control" name="s" type="text" placeholder="输入关键字" value="'.htmlspecialchars($s).'"></form>';
	} ?>
	<?php if( _hui('search_nav_m') ){
		echo '<span class="glyphicon glyphicon-search m-search"></span>';
	} ?>


	<?php hui_nav_menu(); ?>


<?php if( _hui('layout') == 'ui-navtop' ){ ?>
</div>
</header>
</div>
<section class="container">
<?php }else{ ?>
</header>
<?php } ?>