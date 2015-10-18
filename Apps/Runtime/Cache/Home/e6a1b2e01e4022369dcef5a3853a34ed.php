<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>电脑算命</title>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/css/css.css" />
  <script src="__ROOT__/Public/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="__ROOT__/Public/js/main.js" type="text/javascript"></script>
</head>
<body id="body">
<div id="head" class="layout">
<iframe style="float: left" allowtransparency="true" frameborder="0" width="290" height="80" scrolling="no" src="http://tianqi.2345.com/plugin/widget/index.htm?s=1&z=1&t=0&v=0&d=2&bd=0&k=&f=&q=1&e=1&a=1&c=54511&w=290&h=96&align=center">
</iframe>
<?php if($_SESSION[jinrihuangli]['gongli']!=''): ?><div style="float:left;margin: 10px">
    <table id="top_menu_table" style="font-family: 楷体 " >
        <tr>
            <td style="background-color: transparent ; border: none ">公历:<?php echo ($_SESSION[jinrihuangli]['gongli']); ?>&nbsp农历:<?php echo ($_SESSION[jinrihuangli]['nongli']); ?>&nbsp</td>
            <td style="background-color: transparent ; border: none"><?php echo ($_SESSION[jinrihuangli]['suici']); ?>&nbsp</td>
        </tr>
    <tr>
        <td class="green" style="background-color: transparent ; border: none;"  >宜:<?php echo ($_SESSION[jinrihuangli]['yi']); ?>&nbsp</td>
        <td class="red"style="background-color: transparent ; border: none" >忌:<?php echo ($_SESSION[jinrihuangli]['ji']); ?>&nbsp</td>
    </tr>
        <tr>
            <td class="red"style="background-color: transparent ; border: none">冲:<?php echo ($_SESSION[jinrihuangli]['cong']); ?>&nbsp</td>
            <td class="red"style="background-color: transparent ; border: none">
                <A href="javascript:" class="red" onClick="window.external.AddFavorite('http://www.zhidianmijin.com','免费算命')">
                    [<u class="red">将【本站】在线算命加入收藏夹！</u>]</A>
            </td>

        </tr>
        <tr>


        </tr>

</table>
</div><?php endif; ?></div>
<div id="topmenu" class="layout"><script type="text/javascript">
    /*主菜单鼠标经过的变化*/
    $(function () {
        $(".button").hover(
                function () {
                    $(this).addClass("hover");
                    $(this).removeClass("button")
                },
                function () {
                    $(this).removeClass("hover");
                    $(this).addClass("button");
                }
        )
    })

</script>
<table id="top_menu" align="center">

    <tr>
        <td class="top" id="top_menu_main"><a href="<?php echo U('home/index/index');?>"><button class="button" >网站首页</button></a></td>
        <td class="top" id="top_menu_1"><a href="<?php echo U('home/ctsm/index');?>"><button class="button">传统算命</button></a></td>
        <td class="top" id="top_menu_2"><a href="<?php echo U('home/sxxzxx/index');?>"><button class="button"> 生肖/星座/血型</button></a></td>
        <td class="top" id="top_menu_3"><a href="<?php echo U('home/cqczjm/index');?>" ><button class="button">抽签/测字/解梦</button></a></td>
        <td class="top" id="top_menu_4"><a href="<?php echo U('home/qinglv/index');?>" ><button class="button">恋爱指南</button></a></td>
        <td class="top" id="top_menu_5"><a href=" <?php echo U('home/yuce/index');?>"><button class="button">民俗预测</button></a></td>
        <td class="top" id="top_menu_x"><a href="index.php?g=home&m=yuce&a=index&sm=6"><button class="button">黄道吉日</button></a></td>
    </tr>

</table>
<hr/></div>
<div id="bodydiv" class="layout">
<div id="left" class="layout"><?php if(mokuai() == 'ctsm' || mokuai() == 'index' ): ?><div id="div_li1" class="menu" style="position:relative" >
    <input id="hidval1" type="hidden" value="0"/>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/scbz');?>">生辰八字</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/bzcs');?>">八字测算</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/rglm');?>">日干论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/cglm');?>">称骨论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmcs');?>">姓名测试</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmpd');?>">姓命配对</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/sbwr');?>">上辈为人</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xsqy');?>">姓氏起源</a></li>
   </div>
<hr class="left_hr"align="left"/><?php endif; ?>
<?php if(mokuai() == 'sxxzxx' || mokuai() == 'index' ): ?><div id="div_li2" class="menu" >
       <input id="hidval2" type="hidden" value="0"/>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=bj">星座保健</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=eq">星座EQ</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=iq">星座IQ</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=mr">星座名人</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=sy">星座失败教训</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=sl">星座实力</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=jy">星座5大建议</a></li>
       <li class="second_li"><a href="<?php echo U('home/sxxzxx/xzyc');?>">星座运程</a></li>
      </div>
<hr class="left_hr"align="left"/><?php endif; ?>
<?php if(mokuai() == 'cqczjm' || mokuai() == 'index' ): ?><div id="div_li3" class="menu" value="0">
        <input id="hidval3" type="hidden" value="0"/>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=1" >关帝神签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=2" >观音灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=3" >黄大仙灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=4" >吕祖灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=5" >天后灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=6" >诸葛神算</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=7" >周公解梦</a></li>
      </div>
<hr class="left_hr"align="left"/><?php endif; ?>
<?php if(mokuai() == 'qinglv' || mokuai() == 'index' ): ?><div id="div_li4"class="menu" value="0">
       <input id="hidval4" type="hidden" value="0"/>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=1"> 星座组合</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=2">姓名配对</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=3">QQ缘分</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=4">生肖血型</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=5">姓名五格</a></li>
      </div>

<hr class="left_hr" align="left"/><?php endif; ?>
<?php if(mokuai() == 'yuce' || mokuai() == 'index' ): ?><div id="div_li5"class="menu" value="0">
       <input id="hidval5" type="hidden" value="0"/>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=1" >耳鸣</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=2" >面热</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=3" >面热</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=4" >眼跳</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=5" >心惊</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=6" ><span  id="left_hdjr">黄道吉日</span></a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=7" >QQ/手机号码吉凶</a></li>
       <li class="second_li" ><a href="index.php?g=home&m=yuce&a=index&sm=8" >三世财运</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=9" >生男生女</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=10" >指纹</a></li>
      </div><?php endif; ?></div>
<div id="mid" class="layout">
<script>
/*首页菜单的滑行*/
$(function (){
$("#top_menu_1").mouseenter(function menu1(){
if($('#hidval1').val()==0) {
$('#hidval1').val(1);
$("#div_li1").show();
$("#div_li1").css({"color": "#999900"});
$("#div_li1").animate({
left: "+=100px",
height: "+=20px"
}
)
if($('#hidval2').val()==1){
$("#div_li2").css({"color": "black"});
$("#div_li2").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval2').val(0);

}

if($('#hidval3').val()==1){
$("#div_li3").css({"color":"black"});
$("#div_li3").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval3').val(0);
}
if($('#hidval4').val()==1){
$("#div_li4").css({"color":"black"});
$("#div_li4").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval4').val(0);
}
if($('#hidval5').val()==1){
$("#div_li5").css({"color":"black"});
$("#div_li5").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval5').val(0);
}
$("#div_li2").hide(500);
$("#div_li3").hide(500);
$("#div_li4").hide(500);
$("#div_li5").hide(500);


}
}

);
/**/
$("#top_menu_2").mouseenter(function(){
if($("#hidval2").val()==0) {
$("#hidval2").val(1);
$("#div_li2").show();
$("#div_li2").css({"color": "#999900"});
$("#div_li2").animate({
left: "+=100px",
height: "+=20px"
}
)
if($('#hidval1').val()==1){
$("#div_li1").css({"color":"black"});
$("#div_li1").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval1').val(0);
}

if($('#hidval3').val()==1){
$("#div_li3").css({"color":"black"});
$("#div_li3").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval3').val(0);
}
if($('#hidval4').val()==1){
$("#div_li4").css({"color":"black"});
$("#div_li4").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval4').val(0);
}
if($('#hidval5').val()==1){
$("#div_li5").css({"color":"black"});
$("#div_li5").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval5').val(0);
}
$("#div_li1").hide(500);
$("#div_li3").hide(500);
$("#div_li4").hide(500);
$("#div_li5").hide(500);

}
}
)
/**/
$("#top_menu_3").mouseenter(function(){
if($('#hidval3').val()==0) {
$('#hidval3').val(1);
$("#div_li3").show();
$("#div_li3").css({"color": "#999900"});
$("#div_li3").animate({
left: "+=100px",
height: "+=20px"
}
)
if($('#hidval1').val()==1){
$("#div_li1").css({"color":"black"});
$("#div_li1").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval3').val(0);
}
if($('#hidval2').val()==1){
$("#div_li2").css({"color": "black"});
$("#div_li2").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval2').val(0);

}


if($('#hidval4').val()==1){
$("#div_li4").css({"color":"black"});
$("#div_li4").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval4').val(0);
}
if($('#hidval5').val()==1){
$("#div_li5").css({"color":"black"});
$("#div_li5").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval5').val(0);
}
$("#div_li1").hide(500);
$("#div_li2").hide(500);
$("#div_li4").hide(500);
$("#div_li5").hide(500);

}
}
)
/**/
$("#top_menu_4").mouseenter(function(){
if($('#hidval4').val()==0) {
$('#hidval4').val(1);
$("#div_li4").show();
$("#div_li4").css({"color": "#999900"});
$("#div_li4").animate({
left: "+=100px",
height: "+=20px"
}
)
if($('#hidval1').val()==1){
$("#div_li1").css({"color":"black"});
$("#div_li1").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval1').val(0);
}
if($('#hidval2').val()==1){
$("#div_li2").css({"color": "black"});
$("#div_li2").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval2').val(0);

}

if($('#hidval3').val()==1){
$("#div_li3").css({"color":"black"});
$("#div_li3").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval3').val(0);
}

if($('#hidval5').val()==1){
$("#div_li5").css({"color":"black"});
$("#div_li5").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval5').val(0);
}
$("#div_li1").hide(500);
$("#div_li2").hide(500);
$("#div_li3").hide(500);
$("#div_li5").hide(500);

}
}
)
/**/
$("#top_menu_5").mouseenter(function(){
if($('#hidval5').val()==0) {
$('#hidval5').val(1);
$("#div_li5").show();
$("#div_li5").css({"color": "#999900"});
$("#div_li5").animate({
left: "+=100px",
height: "+=20px"
}
)
if($('#hidval1').val()==1){
$("#div_li1").css({"color":"black"});
$("#div_li1").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval1').val(0);
}
if($('#hidval2').val()==1){
$("#div_li2").css({"color": "black"});
$("#div_li2").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval2').val(0);

}

if($('#hidval3').val()==1){
$("#div_li3").css({"color":"black"});
$("#div_li3").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval3').val(0);
}
if($('#hidval4').val()==1){
$("#div_li4").css({"color":"black"});
$("#div_li4").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval4').val(0);
}

$("#div_li1").hide(500);
$("#div_li2").hide(500);
$("#div_li3").hide(500);
$("#div_li4").hide(500);

}
}
)
/**/
$("#top_menu_x").mouseenter(function(){
if($('#hidval5').val()==0) {
$('#hidval5').val(1);
$("#div_li5").show();
$("#div_li5").css({"color": "#999900"});
$("#div_li5").animate({
left: "+=100px",
height: "+=20px"
}
)
$("#left_hdjr").css({"color":"red","border":"1px"});
if($('#hidval1').val()==1){
$("#div_li1").css({"color":"black"});
$("#div_li1").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval1').val(0);
}
if($('#hidval2').val()==1){
$("#div_li2").css({"color": "black"});
$("#div_li2").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval2').val(0);

}

if($('#hidval3').val()==1){
$("#div_li3").css({"color":"black"});
$("#div_li3").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval3').val(0);
}
if($('#hidval4').val()==1){
$("#div_li4").css({"color":"black"});
$("#div_li4").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval4').val(0);
}

$("#div_li1").hide(500);
$("#div_li2").hide(500);
$("#div_li3").hide(500);
$("#div_li4").hide(500);

}
}
)

/**/
$("#top_menu_main").mouseenter(function(){
if($('#hidval1').val()==1){
$("#div_li1").css({"color":"black"});
$("#div_li1").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval1').val(0);
}
if($('#hidval2').val()==1){
$("#div_li2").css({"color": "black"});
$("#div_li2").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval2').val(0);

}

if($('#hidval3').val()==1){
$("#div_li3").css({"color":"black"});
$("#div_li3").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval3').val(0);
}
if($('#hidval4').val()==1){
$("#div_li4").css({"color":"black"});
$("#div_li4").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval4').val(0);
}
if($('#hidval5').val()==1){
$("#div_li5").css({"color":"black"});
$("#div_li5").animate({
left: "-=100px",
height: "-=20px"
});
$('#hidval5').val(0);
}
$("#div_li1").show();
$("#div_li2").show();
$("#div_li3").show();
$("#div_li4").show();
$("#div_li5").show();
})
}
)
</script>
<p style="padding: 0px;margin: 0px"><h3 style="color: #991F1F;margin: 0px;padding: 0">免费在线算命测算项目：</h3>
  <span class="green" style="font-size: 15px"> 本站目前可以进行：姓名测试、姓氏起源、周公解梦、号码吉凶分析、每日运程、今日命理、今日运程、本周运程、
      本月运程、本年运程、心理测试、婚姻试配、属相配对、事业测试、爱情测试、财运测试、观音灵签（观音神签）、
      吕祖灵签、诸葛神算（诸葛神签、诸葛灵签）、关公灵签、黄历查询、EQ测试、个性、人际关系、
      特性、性格、优缺点、心智、休闲、大师点拨、小建议、在线抽签、生日密码、
      身体保健、血型属相、血型特性、星座运程、星座名人、星座分析、生男生女、指纹测算、八字分析、称骨论命、上辈为人、
      星相命理、八字排盘、眼跳预测、耳鸣预测、面热预测、喷嚏预测、心惊预测等与您命运休戚相关的内容。</p></span>
 <p align="center" style="margin: 0px;padding: 0px"><img src="./public/images/bg/bagua.png" width="40%"></p></div>
<div id="right" class="layout"></div>
</div>
<div id="foot" class="layout">
<h4 align="center">免责声明：</h4>
<p align="center">1.本站算命系统来源于中国民俗学的一些测算方法，并非科学研究成果，仅供休闲娱乐，请勿迷信，按此操作一切后果自负！</p>
<p align="center">2.任何人均不得将本算命系统用于任何非法用途，且必须自行承担因使用本系统带来的任何后果和责任。</p>
<p align="center"> 祝您在本站玩的愉快，且每日吉星高照！希望您把本站推荐给朋友，或者链接到您的网页和博客上，谢谢!
联系站长   Email:zhaoge110164@163.com  <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=120286418&site=qq&menu=yes">
 <img border="0" src="http://wpa.qq.com/pa?p=2:120286418:51" alt="联系站长" title="联系站长" style="border: none"/>
</a>
 <p align="center"> 京ICP备XXXXXXXX号</p></div>
</body>
</html>