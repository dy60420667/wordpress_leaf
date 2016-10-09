<!DOCTYPE HTML>
<html>
<head>
<title>颜色值工具</title>
	<meta name="keywords" content="颜色值转换,十六进制颜色码转换成RGB颜色值,RGB颜色值转换成十六进制颜色码,rgb转16进制,颜色值在线转换,颜色代码转换,十六进制颜色转换">
	<meta name="Description" content="在线十六进制颜色码和RGB颜色值互转，用户数据十六进制颜色码，可以自动转换成RPG颜色值，用户输入颜色值，可以转换成颜色码" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="./style/css/style.css" rel='stylesheet' type='text/css' />

	<script src="./style/js/colorchange.js" type="text/javascript"></script>
</head>
<body>
	<!-- 导航栏 -->
	<div class="container navigation">
		<div class="row">
			<div class="col nav">
				<ul >
					 <li class="active"><a href="http://tools.py40.com">颜色值转换</a></li>
					 <li><a href="rpgcolors.php">颜色值表</a></li>
					 <li><a href="rpgpicker.php">拾色器</a></li>
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
				 			<h1>RGB <span class="color_h1">颜色值转换</span></h1>
                            <p class="intro">颜色由红(R)、绿(G)、蓝(B)组成。</p>
                            <hr>
                            <h2 class="example">颜色值</h2>
                            <p>颜色值由十六进制来表示红、绿、蓝（RGB）。</p>
                            <p>每个颜色的最低值为0(十六进制为00)，最高值为255(十六进制为FF)。</p>
                            <p>十六进制值的写法为#号后跟三个或六个十六进制字符。</p>
                            <p>三位数表示法为：#RGB，转换为6位数表示为：#RRGGBB。</p>
                            <hr>
							<h2>RGB颜色值转换成十六进制颜色码</h2>
							<table style="border:0">
								<tr >
									<td align="left" colspan="2">
									 	<form name="form1" >
						                        <input name="r1e" value="" size="6" maxlength="3" style="height:20px" onmouseover="this.focus();">
						                        <input name="r1e" value="" size="6" maxlength="3" style="height:20px" onmouseover="this.focus();">
						                        <input name="r1e" value="" size="6" maxlength="3" style="height:20px" onmouseover="this.focus();">
						                        <input onclick="showRGB()" type="button" value="点我转换" name="button" class = "format_btn" >
						                        <input onclick="clearRGB()" type="button" value="点我清理" name="button_clear" class = "format_btn">
						                </form>
									</td>

								</tr>

								<tr>
									<td  width="10%" align="left" >
										<input style="border:0" id="a_mo2" type="text" value="" onmouseover="this.select()">
									</td>
									<td id="color1" width="10%" align="left" height="20px" align="left">
									</td>
								</tr>
							</table>
						    <hr>

							<h2>十六进制颜色码转换成RGB颜色值</h2>
							<table style="border:0">
								<tr >
									<td align="left" colspan="2">
									 	<form name="form2">
					                        <input name="rgb2" value="" size="8" maxlength="7" style="height:20px"  onmouseover="this.focus();">
					                        <input onclick="showRGB2()" type="button" value="点我转换" name="button" class = "format_btn">
					                        <input onclick="clearRGB2()" type="button" value="点我清理" name="button_clear" class = "format_btn">
						                </form>
									</td>
								</tr>
								<tr>
									<td width="10%" align="left" ><input style="border:0" id="a_mo3" type="text" value="" onmouseover="this.select()"></td>
									<td  width="10%" id="color2" align="left" height="20px"></td>
								</tr>
								<tr>
									<td width="10%" align="left" colspan="2">
										<input style="border:0" id="a_mo3_1" type="text" size="3" value="" onmouseover="this.select()">
										<input style="border:0" id="a_mo3_2" type="text" size="3" value="" onmouseover="this.select()">
										<input style="border:0" id="a_mo3_3" type="text" size="3" value="" onmouseover="this.select()">
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

			<!-- 右边栏 -->
		<div class="fivecol last right-column"></div>
	</div>

	<?php
	 include './inclues/footer.php';
	?>
	<?php
	 include './inclues/footer_btn_noback.php';
	?>




<!---->
</body>
</html>