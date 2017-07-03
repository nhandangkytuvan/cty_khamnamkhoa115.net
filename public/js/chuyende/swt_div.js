// JavaScript Document
document.writeln("<style type=\'text/css\'>");
document.writeln("*{margin:0;padding:0;}");
document.writeln("ul,li{list-style:none;}");
document.writeln(".c_swt{position:fixed;left:0;top:100%;z-index:2147483647;width:100%;height:100%;background:rgba(0,0,0,0.8);}");
document.writeln(".c_swt_box{position:relative;width:100%;height:100%;overflow:hidden;}");
document.writeln(".c_btn{width:35px;height:35px;float:right;overflow:hidden;}");
document.writeln(".c_btn img{width:100%;}");
document.writeln(".c_btn_info{width:220px;overflow:hidden;position:absolute; top:; left:30px;}");
document.writeln(".c_btn_info a{display:block;text-align:center;font-size:22px;color:#fff;}");
document.writeln(".c_btn_info a img{margin-bottom:5px;}");
document.writeln(".c_btn_b{position:absolute;left:0;bottom:8%;width:100%;text-align:center;line-height:300%;}");
document.writeln(".c_btn_b strong{color:#fff;font-size:18px;display:block;padding-bottom:15px;}");
document.writeln(".c_btn_b a{padding-left:25px;display:inline-block;width:256px;height:45px;line-height:45px;background: url(http://phongkhamnamkhang.net/public/images/chuyende/mobile/popup/1_07.png) no-repeat 25px center #37aeec;border-radius:6px;font-size:15px;color:#fff;margin-top:0;font-weight: bold;text-decoration: none;}");
document.writeln(".c_btn_b a.atop{ padding-left:25px;display:inline-block;margin-top:1%;background: url(http://phongkhamnamkhang.net/public/images/chuyende/mobile/popup/1_15.png) no-repeat 25px center #efc239;margin-top:20px;}.c_btn_b a:hover{ color:#fff;}.c_btn_b a:visited{ color:#fff;}.c_btn_b a:active {color: #fff;}");
document.writeln(".c_btn_b a.atop1{ padding-left:25px;display:inline-block;margin-top:1%;background: url(http://phongkhamnamkhang.net/public/images/chuyende/mobile/popup/1_13.png) no-repeat 25px center #f48a4a;margin-top:20px;}.c_btn_b a:hover{ color:#fff;}.c_btn_b a:visited{ color:#fff;}.c_btn_b a:active {color: #fff;}");
document.writeln(".c_btn_inner{position:absolute;width:90%;}");
document.writeln(".c_btn_inner dt{text-align:center;color:#fff;font-size:22px;margin-bottom:10px;}");
document.writeln(".c_btn_inner dd{width:100%;display:table;margin-bottom:10px;overflow:hidden;}");
document.writeln(".c_btn_inner dd:last-child{margin-bottom:0;}");
document.writeln(".c_btn_inner dd:last-child input{width:60%;}");
document.writeln(".c_btn_inner dd:last-child img{width:44px;vertical-align:middle;}");
document.writeln(".c_btn_inner dd span{display:table-cell;vertical-align:middle;width:75px;padding-right:10px;text-align:right;font-size:14px;color:#fff;}");
document.writeln(".c_btn_inner dd span em{font-style:normal;color:#ff6821;}");
document.writeln(".c_btn_inner dd font{display:table-cell;font-size:26px;vertical-align:middle;}");
document.writeln(".c_btn_inner dd font input{padding:0;margin:0;height:30px;line-height:30px;width:95%;padding:0 2%;background:transparent;border:1px solid #858585;color:#9c9c9c;font-size:14px;}");
document.writeln(".c_btn_inner dd font textarea{padding:0;margin:0;height:45px;padding:5px 2%;width:95%;background:transparent;border:1px solid #858585;color:#9c9c9c;font-size:14px;}");
document.writeln(".c_btn_inner button{display:block;margin:0;padding:0;border:0;position:absolute;bottom:-25%;left:5%;width:90%;height:45px;line-height:45px;background:#ff6821;border-radius:6px;font-size:18px;color:#fff;}");
document.writeln(".c_btn_ts{color:#fff;position:absolute;bottom:-55%;left:0;font-size:14px;}");
document.writeln(".c_btn_info{ bottom:45%;  margin-left:-110px;left:50%;}");
document.writeln("#LRfloater1{z-index: 2147483646 !important;}");
document.writeln("</style>");
document.writeln("<div id=\"c_swt\" class=\"c_swt\">");
document.writeln("    <div class=\"c_swt_box\" id=\"c_swt_box\">");
document.writeln("        <div id=\"c_btn\" class=\"c_btn\">");
document.writeln("            <img src=\"http://phongkhamnamkhang.net/public/images/chuyende/mobile/popup/c_btn.png\" alt=\"\">");
document.writeln("        </div>");
document.writeln("        <div id=\"center_n\" class=\"c_btn_info\">");
document.writeln("            <a href=\"http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en\">");
document.writeln("                <img src=\"http://phongkhamnamkhang.net/public/images/chuyende/mobile/popup/c_zj.png\" alt=\"\">");
document.writeln("            </a>");
document.writeln("            <div style='font-size:20px;line-height:50px;font-weight:bold; color:#fff; text-align:center;' id=\"atext\"></div>");
document.writeln("        </div>");
document.writeln("        <div class=\"c_btn_b\">");
document.writeln("            <a href=\"http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en\">Hỏi bác sĩ trực tuyến</a><br>");
document.writeln("            <a href=\"http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en\" class=\"atop\">Hỏi chi phí điều trị</a><br>");
document.writeln("            <a href=\"http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en\" class=\"atop1\">Xem kĩ thuật điều trị</a>");
document.writeln("        </div>");

document.writeln("    </div>");
document.writeln("</div>");

$("#c_btn").on("click",function(){
	$("#c_swt").stop().animate({top:"100%"},1000,function(){
		//setTimeout("showSwt()",20000);  //关闭了再次弹出
	});
});

setTimeout("showSwt()",20000);   //第一次弹出时间

function showSwt()
{
    $("#c_swt").animate({top:"0"},1000);
}



/* 商务通中间弹出框重写 */
refer=document.referrer; //搜索来源页
sosuo=refer.split(".")[1];
grep=null;
str=null;
cms="";
switch(sosuo){
  case "baidu":
    grep=/word\=.*\&/i;
    str=refer.match(grep)
    cms=str.toString().split("=")[1].split("&")[0];
    cms=decodeURIComponent(cms);
  break;
  case "google":
    grep=/q\=.*\&/i;
    str=refer.match(grep)
    cms=str.toString().split("=")[1].split("&")[0];
    cms=decodeURIComponent(cms);
  break;
  case "sogou":
    grep=/query\=.*\&/i;
    str=refer.match(grep)
    cms=str.toString().split("=")[1].split("&")[0];
    cms=decodeURIComponent(cms);
  break;
   case "soso":
    grep=/query\=.*\&/i;
    str=refer.match(grep)

    cms=str.toString().split("=")[1].split("&")[0];
    cms=decodeURIComponent(cms);
  break;
   case "bing":
    grep=/q\=.*\&/i;
    str=refer.match(grep)
    cms=str.toString().split("=")[1].split("&")[0];
      cms=decodeURIComponent(cms);
  break;
  case "yahoo":
    grep=/p\=.*\&/i;
    str=refer.match(grep)
    cms=str.toString().split("=")[1].split("&")[0];
	cms=decodeURIComponent(cms);
  break;
  case "soso":
    grep=/query\=.*\&/i;
    str=refer.match(grep)
    cms=str.toString().split("=")[1].split("&")[0];
    cms=decodeURIComponent(cms);
  break;
    case "so":
    grep=/q\=.*\&/i;
    str=refer.match(grep)
    cms=str.toString().split("=")[1].split("&")[0];
    cms=decodeURIComponent(cms);
  break;
}
if(cms==null||cms==undefined||cms=='')
{
	document.getElementById('atext').innerHTML="Cơ thể khó chịu?";
}else
{
	document.getElementById('atext').innerHTML=cms;
}
