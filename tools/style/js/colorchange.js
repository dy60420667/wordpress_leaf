/*颜色值转换
*/
function showRGB() {
    hexcode = "#";
    for (x = 0; x < 3; x++) {
        var n = document.form1.r1e[x].value;
        if (n == "") n = "0";
        if (parseInt(n) != n) return alert("请输入数字！");
        if (n > 255) return alert("数字在0-255之间！");
        var c = "0123456789ABCDEF",
        b = "",
        a = n % 16;
        b = c.substr(a, 1);
        a = (n - a) / 16;
        hexcode += c.substr(a, 1) + b;
    }
    document.getElementById("color1").style.background =a_mo2.value= hexcode;
}

function clearRGB () {
	for(x=0;x<3;x++){
		document.form1.r1e[x].value = "";

	}
	document.getElementById("a_mo2").value = "";
    document.getElementById("color1").style.background = "#fff"
}
function showRGB2() {;
    var a = document.form2.rgb2.value;
    if (a.substr(0, 1) == "#") a = a.substring(1);
    if (a.length != 6) return alert("请输入正确的十六进制颜色码！\n 如：#121212");
    document.getElementById("color2").style.background = "#" + a;
    a = a.toLowerCase();
    b = new Array();
    for (x = 0; x < 3; x++) {
        b[0] = a.substr(x * 2, 2);
        b[3] = "0123456789abcdef";
        b[1] = b[0].substr(0, 1);
        b[2] = b[0].substr(1, 1) ;
        b[20 + x] = b[3].indexOf(b[1]) * 16 + b[3].indexOf(b[2]);
    }
    a_mo3.value = b[20] + "," + b[21] + "," + b[22];
    document.getElementById("a_mo3_1").value = b[20];
    document.getElementById("a_mo3_2").value = b[21];
    document.getElementById("a_mo3_3").value = b[22];
}
function clearRGB2 () {
	document.form2.rgb2.value="";
	document.getElementById("a_mo3").value = "";
	 document.getElementById("a_mo3_1").value = "";
    document.getElementById("a_mo3_2").value = "";
    document.getElementById("a_mo3_3").value = "";
    document.getElementById("color2").style.background = "#fff"
}