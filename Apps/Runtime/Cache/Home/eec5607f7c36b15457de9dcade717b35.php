<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="description" content="时来运来免费在线算命，占卜，八字，生辰八字，生男生女预测，日干，称骨，黄历，生肖，姓名，星座，黄道吉日，恋爱预测，恋爱测算，
  星座运势，抽签，眼皮跳，指纹算命"/>
  <meta name="keywords" content="时来运来,免费在线算命，占卜，八字，日干，称骨，黄历，生肖，姓名，星座"/>
<title>时来运来-在线算命-解梦-星座</title>
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
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px">介绍：本类测试主要是有关于在线算命的内容。包括黄道吉日、黄历查询、测字算命、手机吉凶、生男生女、指纹算命六大测试。你可以从本类测试中了解到关于在线算命的相关内容，手机号码吉凶查询、姓名测字、指纹算命等一系列趣味测试，满足你在线算命的需求。</TD>
    </tr>
    </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1">
    <TBODY>
    <tr>
        <TD colspan="3"  vAlign=top class=ttop style="PADDING-BOTTOM: 1px">预测列表</TD>
    </tr><tr>
        <TD width="13%" vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><img src="./Public//images/sss.gif" width="100%" height="100%" ></TD>
        <TD width="5%" vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><a  class="red" href="index.php?g=home&m=yuce&a=index&sm=8">三世财运</a></TD>
        <TD width="82%" vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><a href="index.php?g=home&m=yuce&a=index&sm=8"><span class="new" style="PADDING-BOTTOM: 1px">三世书是传说中一本可以看到你前世,今生和后世的书.里面所有人的一切都包括.这个财运篇是专门从里面精选而来,可以算到你的财运属于哪种类型的,据说很准的哦,试试吧~~</span></a></TD>
    </tr>
    <tr>
        <TD width="13%" vAlign=top class=ttd style="PADDING-BOTTOM: 1px">
            <img src="./Public//images/c1.gif" width="100%" height="100%"></TD>
        <TD width="5%" vAlign=top class=ttd style="PADDING-BOTTOM: 1px">
            <a  class="red" href="index.php?g=home&m=yuce&a=index&sm=9">生男生女</a></TD>
        <TD width="82%" vAlign=top class=ttd style="PADDING-BOTTOM: 1px">
            <a href="index.php?g=home&m=yuce&a=index&sm=9">
                <span class="new" style="PADDING-BOTTOM: 1px">想预测一下,你们会生个男宝宝或是女宝宝吗?传统命理精髓，神奇预测生男生女结果。现提供免费测算，快来尝试一下这项在线算命服务吧！</span></a></TD>
    </tr>
    <tr>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><img src="./Public//images/c2.gif" width="100%" height="100%"></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><a href="index.php?g=home&m=yuce&a=index&sm=6" class="red">黄道吉日</a></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><A href="index.php?g=home&m=yuce&a=index&sm=6">所谓黄道吉日就是六神青龙，天德，玉堂，司命，明堂，金匮所在的日子。这六神所值日的那一天——黄道吉日，指百事吉利，不避凶忌，万事如意。现提供免费测算，快来尝试一下这项在线算命服务吧！</A></TD>
    </tr>
    <tr>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><img src="./Public//images/c3.gif" width="100%" height="100%"></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><a href="index.php?g=home&m=yuce&a=index&sm=10" class="red">指纹算命 </a></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><A href="index.php?g=home&m=yuce&a=index&sm=10">据多年研究报告，人的性格是与生具来的。令人奇怪的是，人的指纹也是终生不变的。经过多年的研究，终于通过指纹可以辅助研究人的性格。下面的程序可以使您对自己或他人的性格有一定的了解，在生活中泰然处之。方法如下：男左手，女右手。从拇指开始，斗（或叫箩）用O(OPQ的O,不是零0），簸箕用X（XYZ的X）代表。输入5个指纹代码，然后按"查看结果"按钮，即出结果！</A></TD>
    </tr>
    <tr>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><img src="./Public//images/c4.gif" width="100%" height="100%"></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><a href="index.php?g=home&m=yuce&a=index&sm=7" class="red">手机吉凶</a></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><A href="index.php?g=home&m=yuce&a=index&sm=7">有些人会问，手机号码为什么会影响一个人的运势？其实这就像风水、阳宅会影响运势命运的意义是一样的。虽然这只是一个号码，但是它与您的生活息息相关，也代表您与所有人的沟通桥梁！所以『吉』与『凶』关系非常大！现提供免费测算，快来尝试一下这项在线算命服务吧！</A></TD>
    </tr>
    <tr>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><img src="./Public//images/c5.gif" width="100%" height="100%"></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><a href="index.php?g=home&m=yuce&a=index&sm=4" class="red">眼跳预测 </a></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><A href="index.php?g=home&m=yuce&a=index&sm=4">耳朵里好象有“小蜜蜂”在“嗡嗡嗡”，或者时刻像在听“摇滚乐”？你这是耳鸣现象啦！为什么会耳鸣呢？当然有科学的解释，也有一些是科学所不能告诉你的部分哦^_^   通过耳鸣占卜，看看这种耳鸣预测出你将来会发生什么事情哦。</A></TD>
    </tr>

    <tr>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><img src="./Public//images/c6.gif" width="100%" height="100%"></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><a href="index.php?g=home&m=yuce&a=index&sm=2" class="red">面热预测</a></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><A href="index.php?g=home&m=yuce&a=index&sm=2">脸如火在烧？热的不得了？不是感冒，又没发烧，为何脸会红？不能不知道！面热预测，告诉你面热征兆,面热吉凶,面热的原因，快来算哦~ </A></TD>
    </tr>
    <tr>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><img src="./Public//images/c7.gif" width="100%" height="100%"></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><a href="index.php?g=home&m=yuce&a=index&sm=3" class="red">喷嚏预测</a></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><A href="index.php?g=home&m=yuce&a=index&sm=3">真的是一想,二骂,三念叨吗？这可是受到当时磁场的影响。喷嚏预测，告诉你打喷嚏的预兆，来看个究竟吧！</A></TD>
    </tr>
    <tr>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><img src="./Public//images/c8.gif" width="100%" height="100%"></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><a href="index.php?g=home&m=yuce&a=index&sm=5" class="red">心惊预测</a></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><A href="index.php?g=home&m=yuce&a=index&sm=5">总是会莫名的心惊，为了它，你总烦躁不安，告诉自己要镇定下来。到底心惊预测着什么，心惊的原因，心惊的征兆是什么，快来看看心惊释义怎么说吧！</A></TD>
    </tr>
    <tr>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><img src="./Public/images/em.gif" width="100%" height="100%"></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><a href="index.php?g=home&m=yuce&a=index&sm=1" class="red">耳鸣预测</a></TD>
        <TD vAlign=top class=ttd style="PADDING-BOTTOM: 1px"><A href="index.php?g=home&m=yuce&a=index&sm=1">耳朵里好象有“小蜜蜂”在“嗡嗡嗡”，或者时刻像在听“摇滚乐”？你这是耳鸣现象啦！为什么会耳鸣呢？当然有科学的解释，也有一些是科学所不能告诉你的部分哦^_^ 通过耳鸣占卜，看看这种耳鸣预测出你将来会发生什么事情哦。！</A></TD>
    </tr>
    </TBODY>
</TABLE>
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