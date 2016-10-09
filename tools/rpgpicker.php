<!DOCTYPE HTML>
<html>
<head>
	<title>拾色器</title>
	<meta name="keywords" content="拾色器,在线拾色器,网络拾色器,色板,在线颜色识别,颜色识别器,网页拾色器">
	<meta name="Description" content="拾色器就是拾取颜色的器具。多用吸管表示，在颜色上单击就能拾取所单击的颜色。" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href="style/css/style.css" rel='stylesheet' type='text/css' />


	<link rel="stylesheet" type="text/css" href="style/jpicker/jPicker.css" />
	<script src="style/jpicker/jquery-1.4.4.min.js" type="text/javascript"></script>
	<script src="style/jpicker/jpicker-1.1.6.min.js" type="text/javascript"></script>
	<script src="style/jpicker/colorpicker.js" type="text/javascript"></script>
	<style type="text/css">
		.jPicker .Icon {
		display:inline-block;
		height:24px;
		position:relative;
		text-align:left;
		width:25px
		}
		.jPicker .Icon span.Color,.jPicker .Icon span.Alpha {
			background-position:2px 2px;
			display:block;
			height:100%;
			left:0;
			position:absolute;
			top:0;
			width:100%
		}
		.jPicker .Icon span.Image {
			background-repeat:no-repeat;
			cursor:pointer;
			display:block;
			height:100%;
			left:0;
			position:absolute;
			top:0;
			width:100%
		}
		.jPicker.Container {
			color:#000;
			z-index:10
		}
		table.jPicker {
			background-color:#efefef;
			border:1px outset #666;
			font-family:Arial,Helvetica,Sans-Serif;
			font-size:12px!important;
			margin:0;
			padding:5px;
			width:545px;
			z-index:20
		}
		.jPicker .Move {
			background-color:#ddd;
			border-color:#fff #666 #666 #fff;
			border-style:solid;
			border-width:1px;
			cursor:move;
			height:12px;
			padding:0
		}
		.jPicker .Title {
			font-size:11px!important;
			font-weight:bold;
			margin:-2px 0 0 0;
			padding:10px 0 0 0;
			text-align:center;
			width:100%
		}
		.jPicker div.Map {
			border-bottom:2px solid #fff;
			border-left:2px solid #9a9a9a;
			border-right:2px solid #fff;
			border-top:2px solid #9a9a9a;
			cursor:crosshair;
			height:260px;
			margin:0 10px 10px 10px;
			overflow:hidden;
			padding:0;
			position:relative;
			width:260px
		}
		.jPicker div[class="Map"] {
			height:256px;
			width:256px
		}
		.jPicker div.Bar {
			border-bottom:2px solid #fff;
			border-left:2px solid #9a9a9a;
			border-right:2px solid #fff;
			border-top:2px solid #9a9a9a;
			cursor:n-resize;
			height:260px;
			margin:12px 10px 0 5px;
			overflow:hidden;
			padding:0;
			position:relative;
			width:24px
		}
		.jPicker div[class="Bar"] {
			height:256px;
			width:20px
		}
		.jPicker .Map .Map1,.jPicker .Map .Map2,.jPicker .Map .Map3,.jPicker .Bar .Map1,.jPicker .Bar .Map2,.jPicker .Bar .Map3,.jPicker .Bar .Map4,.jPicker .Bar .Map5,.jPicker .Bar .Map6 {
			background-color:transparent;
			background-image:none;
			display:block;
			left:0;
			position:absolute;
			top:0
		}
		.jPicker .Map .Map1,.jPicker .Map .Map2,.jPicker .Map .Map3 {
			height:2596px;
			width:256px
		}
		.jPicker .Bar .Map1,.jPicker .Bar .Map2,.jPicker .Bar .Map3,.jPicker .Bar .Map4 {
			height:3896px;
			width:20px
		}
		.jPicker .Bar .Map5,.jPicker .Bar .Map6 {
			height:256px;
			width:20px
		}
		.jPicker .Map .Map1,.jPicker .Map .Map2,.jPicker .Bar .Map6 {
			background-repeat:no-repeat
		}
		.jPicker .Map .Map3,.jPicker .Bar .Map5 {
			background-repeat:repeat
		}
		.jPicker .Bar .Map1,.jPicker .Bar .Map2,.jPicker .Bar .Map3,.jPicker .Bar .Map4 {
			background-repeat:repeat-x
		}
		.jPicker .Map .Arrow {
			display:block;
			position:absolute
		}
		.jPicker .Bar .Arrow {
			display:block;
			left:0;
			position:absolute
		}
		.jPicker .Preview {
			font-size:9px;
			padding:5px 0 0 0;
			text-align:center
		}
		.jPicker .Preview div {
			border:2px inset #eee;
			height:62px;
			margin:0 auto;
			padding:0;
			width:62px
		}
		.jPicker .Preview div span {
			border:1px solid #000;
			display:block;
			height:30px;
			margin:0 auto;
			padding:0;
			width:60px
		}
		.jPicker .Preview .Active {
			border-bottom-width:0
		}
		.jPicker .Preview .Current {
			border-top-width:0;
			cursor:pointer
		}
		.jPicker input {
			font-size:13px
		}
		.jPicker .Button {
			text-align:center;
			padding:0 4px;
			width:115px
		}
		.jPicker .Button input {
			padding:2px 0;
			width:100px
		}
		.jPicker .Button .Ok {
			margin:12px 0 5px 0
		}
		.jPicker td {
			margin:0;
			padding:0
		}
		.jPicker td.Radio {
			margin:0;
			padding:0;
			width:31px
		}
		.jPicker td.Radio input {
			margin:0 5px 0 0;
			padding:0
		}
		.jPicker td.Text {
			font-size:12px!important;
			height:22px;
			margin:0;
			padding:0;
			text-align:left;
			width:70px
		}
		.jPicker tr.Hex td.Text {
			width:100px
		}
		.jPicker td.Text input {
			background-color:#fff;
			border:1px inset #aaa;
			height:19px;
			margin:0 0 0 5px;
			text-align:left;
			width:30px
		}
		.jPicker td[class="Text"] input {
			height:15px
		}
		.jPicker tr.Hex td.Text input.Hex {
			width:50px
		}
		.jPicker tr.Hex td.Text input.AHex {
			width:20px
		}
		.jPicker .Grid {
			text-align:center;
			width:114px
		}
		.jPicker .Grid span.QuickColor {
			border:1px inset #aaa;
			cursor:pointer;
			display:inline-block;
			height:15px;
			line-height:15px;
			margin:0;
			padding:0;
			width:19px
		}
		.jPicker .Grid span[class="QuickColor"] {
			width:17px
		}

	</style>

</head>
<body>


	<!-- 导航栏 -->
	<!-- 导航栏 -->
	<div class="container navigation">
		<div class="row">
			<div class="col nav">
				<ul class="pc-nav" >
					 <li><a href="http://tools.py40.com">颜色值转换</a></li>
					 <li><a href="rpgcolors.php">颜色值表</a></li>
					 <li class="active"><a href="rpgpicker.php">拾色器</a></li>
					 <li><a href="rpgcolorsment.php">颜色搭配</a></li>
					 <li><a href="rpgstudy.php">色彩学</a></li>
				</ul>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<!--container main-->
	<div class="container main">
		<div class="row">
			<!--左边栏-->
			<div class="col left-column">
				<H1></H1>
				<!-- <div class="sidebar-box gallery-list">
					<div class="design" id="leftcolumn">
						<a target="_top" title="HTML 教程"  href="/html/html-tutorial.html" >HTML 教程			</a>
					</div>
				</div>
				 -->
			</div>

			<div class="col middle-column">
				<div class = "article">
				 	<div class = "article-body">
				 		<div class = "article-intro" id="content">
							<h1>HTML <span class="color_h1">拾色器</span></h1>
							<div id="Inline"></div>
						</div>
					</div>
				</div>
			</div>

		</div>

			<!-- 右边栏 -->
		<div class="fivecol last right-column"></div>
	</div>



	<?php
	 include 'inclues/footer.php';
	?>
	<?php
	 include 'inclues/footer_btn_noback.php';
	?>
</body>
</html>