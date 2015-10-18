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
        $(".top").hover(
                function () {
                    $(this).addClass("hover");
                },
                function () {
                    $(this).removeClass("hover");
                }
        )
    })
    /*$(function () {
        $("#top_menu_main").hover(
                function(){

                    $("#top_menu_main").addClass("hover");


                },
                function(){

                    $("#top_menu_main").removeClass("hover")

                }
        )
*//**//*
        $("#top_menu_1").hover(
                function(){

                    $("#top_menu_1").addClass("hover");
                    $("#top_menu_1").removeClass("top")
                },
                function(){

                    $("#top_menu_1").removeClass("hover")
                    $("#top_menu_1").addClass("top");
                }
        )
        *//**//*
        $("#top_menu_2").hover(
                function(){

                    $("#top_menu_2").addClass("hover");
                    $("#top_menu_2").removeClass("top")
                },
                function(){

                    $("#top_menu_2").removeClass("hover")
                    $("#top_menu_2").addClass("top");
                }
        )
        *//**//*
        $("#top_menu_3").hover(
                function(){

                    $("#top_menu_3").addClass("hover");
                    $("#top_menu_3").removeClass("top")
                },
                function(){

                    $("#top_menu_3").removeClass("hover")
                    $("#top_menu_3").addClass("top");
                }
        )
        *//**//*
        $("#top_menu_3").hover(
                function(){

                    $("#top_menu_3").addClass("hover");
                    $("#top_menu_3").removeClass("top")
                },
                function(){

                    $("#top_menu_3").removeClass("hover")
                    $("#top_menu_3").addClass("top");
                }
        )
        *//**//*
        $("#top_menu_4").hover(
                function(){

                    $("#top_menu_4").addClass("hover");
                    $("#top_menu_4").removeClass("top")
                },
                function(){

                    $("#top_menu_4").removeClass("hover")
                    $("#top_menu_4").addClass("top");
                }
        )
        *//**//*
        $("#top_menu_5").hover(
                function(){

                    $("#top_menu_5").addClass("hover");
                    $("#top_menu_5").removeClass("top")
                },
                function(){

                    $("#top_menu_5").removeClass("hover")
                    $("#top_menu_5").addClass("top");
                }
        )
        *//**//*
        $("#top_menu_x").hover(
                function(){

                    $("#top_menu_x").addClass("hover");
                    $("#top_menu_x").removeClass("top")
                },
                function(){

                    $("#top_menu_x").removeClass("hover")
                    $("#top_menu_x").addClass("top");
                }
        )
    })*/
</script>
<table id="top_menu" align="center">
    <tr>
        <td class="top" id="top_menu_main"><a href="<?php echo U('home/index/index');?>"><button class="button"> 网站首页</button></a></td>
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

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>
        <td width="81%" class="ttd"><span class="red">生肖配对:</span><br>
            属相有鼠、牛、虎、兔、龙、蛇、马、羊、猴、鸡、狗、猪十二种。属相又都是由五行来区分的，而五行则存在着相生相克的道理。相生的属相较能和睦相处，而相克的属相就不那么……了。您是否还对您的爱情犹豫不决啊，那就进来看看你们的生肖配不配吧！<BR></td>
        <td width="19%" class="ttd"><img src="./Public/images/sxpd.jpg" width="120" height="90"></td>
    </tr>
    <form name="form1"  method="post" action="">
        <input type="hidden" name="act" value="sxok" />
        <tr>
            <td colspan="2" class="new">
                我的生肖：
                <SELECT name="p5" class="style3">
                    <OPTION value=鼠>鼠</OPTION>
                    <OPTION value=牛>牛</OPTION>
                    <OPTION value=虎>虎</OPTION>
                    <OPTION value=兔>兔</OPTION>
                    <OPTION value=龙>龙</OPTION>
                    <OPTION value=蛇>蛇</OPTION>
                    <OPTION value=马>马</OPTION>
                    <OPTION value=羊>羊</OPTION>
                    <OPTION value=猴>猴</OPTION>
                    <OPTION value=鸡>鸡</OPTION>
                    <OPTION value=狗>狗</OPTION>
                    <OPTION value=猪>猪</OPTION>
                </SELECT>
                他/她的生肖
                :
                <SELECT name="p6" class="style3">
                    <OPTION value=鼠 selected>鼠</OPTION>
                    <OPTION value=牛>牛</OPTION>
                    <OPTION value=虎>虎</OPTION>
                    <OPTION value=兔>兔</OPTION>
                    <OPTION value=龙>龙</OPTION>
                    <OPTION value=蛇>蛇</OPTION>
                    <OPTION value=马>马</OPTION>
                    <OPTION value=羊>羊</OPTION>
                    <OPTION value=猴>猴</OPTION>
                    <OPTION value=鸡>鸡</OPTION>
                    <OPTION value=狗>狗</OPTION>
                    <OPTION value=猪>猪</OPTION>
                </SELECT>
                <input type="submit" name="Submit1" value="开始配对" style="cursor:hand;">
    </form></td>
    </tr>
        <?php if(isset($_REQUEST['act']) and $_REQUEST['act'] == 'sxok'): ?><tr >
        <td class="new" colspan="2" valign="middle">
            <br>配对生肖：<font color=blue><?php echo ($title); ?></font><br><br>
            <font color=red><?php echo ($content1); ?></font><br><br>
            <?php echo ($content2); ?><br>

        </td>
    </tr><?php endif; ?>
    </tbody>
</table>  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>
        <td width="79%" class="ttd"><span class="green">血型配对:</span><br>
            血型配对，根据血型测试您和恋人的缘分和婚姻！ <BR></td>
        <td width="21%" class="ttd"><img src="./Public/images/xxpd.jpg" width="140" height="94"></td>
    </tr>
    <form name="form1"  method="post" action="">
        <input type="hidden" name="act" value="xxok" />
        <tr>
            <td colspan="2" class="new">
                我的血型：
                <SELECT name="p3" class="style3">
                    <OPTION value=AB>AB型</OPTION>
                    <OPTION value=A>A型</OPTION>
                    <OPTION value=B>B型</OPTION>
                    <OPTION value=O>O型</OPTION>
                </SELECT>
                他/她的血型
                :
                <SELECT name="p4" class="style3">
                    <OPTION value=AB>AB型</OPTION>
                    <OPTION value=A>A型</OPTION>
                    <OPTION value=B>B型</OPTION>
                    <OPTION value=O>O型</OPTION>
                </SELECT>
                <input type="submit" name="Submit1" value="开始配对" style="cursor:hand;">
    </form></td>
    </tr>
    <?php if(isset($_REQUEST['act']) and $_REQUEST['act'] == 'xxok'): ?><tr >
        <td class="new" colspan="2" valign="middle">
            <br>配对生肖：<font color=blue><?php echo ($title1); ?></font><br><br>
            <font color=red><?php echo ($title2); ?></font><br><br>
            <?php echo ($content); ?><br>

        </td>
    </tr><?php endif; ?>
    </tbody>
</table>
</div>
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