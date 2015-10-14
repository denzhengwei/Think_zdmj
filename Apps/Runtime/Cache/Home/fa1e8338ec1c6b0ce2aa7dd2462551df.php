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
<div id="topmenu" class="layout">
<table id="top_menu" align="center">
    <tr>
        <td class="top" id="top_menu_main"><a href="<?php echo U('home/index/index');?>">网站首页</a></td>
        <td class="top" id="top_menu_1"><a href="<?php echo U('home/ctsm/index');?>">传统算命</a></td>
        <td class="top" id="top_menu_2"><a href="<?php echo U('home/sxxzxx/index');?>"> 生肖/星座/血型</a></td>
        <td class="top" id="top_menu_3"><a href="<?php echo U('home/cqczjm/index');?>" >抽签/测字/解梦</a></td>
        <td class="top" id="top_menu_4"><a href="<?php echo U('home/qinglv/index');?>" >恋爱指南</a></td>
        <td class="top" id="top_menu_5"><a href=" <?php echo U('home/yuce/index');?>">民俗预测</a></td>
        <td class="top" id="top_menu_x"><a href="index.php?g=home&m=yuce&a=index&sm=6">黄道吉日</a></td>
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
<SCRIPT language=JavaScript>
    <!--
    function IsCn(Str)
    {
        for(i=0;i<Str.length;i++) {
            if(41125<Str.charCodeAt(i) || Str.charCodeAt(i)<20224) {
                return false;
            }
        }
        return true;
    }
    function submitchecken() {
        if (document.cidu.youname1.value == "") {
            alert("请输入姓氏。");
            document.cidu.youname1.focus();
            return false;
        }
        if (IsCn(document.cidu.youname1.value)==false) {
            alert("输入出错,应该都为汉字。");
            document.cidu.youname1.focus();
            return false;
        }
        if (document.cidu.youname1.value.length > 2) {
            alert("姓氏输入出错,不能多于2字。");
            document.cidu.youname1.focus();
            return false;
        }

        if (document.cidu.youname2.value == "") {
            alert("请输入名。");
            document.cidu.youname2.focus();
            return false;
        }
        if (IsCn(document.cidu.youname2.value)==false) {
            alert("输入出错,应该都为汉字。");
            document.cidu.youname2.focus();
            return false;
        }
        if (document.cidu.youname2.value.length > 2) {
            alert("名字输入出错,不能多于2字。");
            document.cidu.youname2.focus();
            return false;
        }
        if (document.cidu.nn.value.length != 4) {
            alert("年的位数出错了,必须为4位。");
            document.cidu.nian.focus();
            return false;
        }

        re="请重新输入！";
        y=document.cidu.nian.value;
        m=document.cidu.yue.value;

        h=document.cidu.hh.value;

        if (y==""||y<1901||y>2050) {
            alert("年应在1901和2050之间。"+re);
            document.cidu.nian.focus();
            return false;
        }
        if (m>12||m<1) {
            alert("月应在1与12之间。"+re);
            document.cidu.yue.focus();
            return false;
        }


        if (h>23||h<0) {
            alert("时应在0与23之间。"+re);
            document.cidu.hh.focus();
            return false;
        }
        return true;
    }
    //-->
</SCRIPT>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>
        <td width="79%" class="ttd"><span class="red">&lt;&lt;三世书-财运篇&gt;&gt; 看看你的财运是属于哪种类型?</span>
            <br>
            介绍:三世书是传说中一本可以看到你前世,今生和后世的书.里面所有人的一切都包括.这个财运篇是专门从里面精选而来,可以算到你的财运属于哪种类型的,据说很准的哦,试试吧~~</td>
        <td width="21%" class="ttd"><img src="./Public/images/sss.gif"></td>
    </tr>
    <form method="post" action="index.php?g=home&m=yuce&a=index&sm=8" name=cidu  onsubmit="return submitchecken();">
        <tr>
            <td colspan="2" class="new"><div align=center>
                姓：<input type=txt name=youname1 size=4 value=""  onKeypress="if ((event.keyCode != 13 && event.keyCode < 160)) event.returnValue = false;">
                名：<input type=txt name=youname2 size=4 value=""  onKeypress="if ((event.keyCode != 13 && event.keyCode < 160)) event.returnValue = false;">
                性别：<select name="sex" size="1" style="font-size: 9pt">
                <option value="男" selected>男</option>
                <option value="女" >女</option>
            </select>
                请输入农历生辰!:
                <input name="nx" size="1" type=hidden value="公历">
                <select name="nn" size="1" style="font-size: 9pt">
                    <?php if(is_array($years)): $k = 0; $__LIST__ = $years;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>年
                <select size="1" name="yue" style="font-size: 9pt">
                    <?php if(is_array($months)): $i = 0; $__LIST__ = $months;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>月
                <select size="1" name="ri" style="font-size: 9pt">
                    <?php if(is_array($days)): $i = 0; $__LIST__ = $days;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>日
                <select size="1" name="hh" style="font-size: 9pt">
                    <?php if(is_array($hours)): $i = 0; $__LIST__ = $hours;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>点
                <input type="submit" name="btnAdd" value="测算"></td>
        </tr><tr bgcolor="#EFF8FE">

        <td class="new" colspan="2" valign="middle"><div align="center"><A href='#' style='cursor:hand;' onclick="window.open('wannianli.htm','cidunongli','left=160,top=100,width=700,height=400,scrollbars=no,resizable=no,status=no')" title="如果您只知道生日的公历日期，不要紧，请点这里去查询农历日期">[<font color=red>查询农历生日</font>]</a></div></td>
    </tr>
        <?php if($_REQUEST['nn'] != ''): ?><tr bgcolor="#EFF8FE">
            <td class="new" colspan="2" valign="middle">
                <br>&nbsp;<?php echo ($name); ?>:预测结果如下：<br><br>&nbsp;你的财运属<font size='6' color=red>『<?php echo ($content); ?>』</font><br><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($content1); ?>
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