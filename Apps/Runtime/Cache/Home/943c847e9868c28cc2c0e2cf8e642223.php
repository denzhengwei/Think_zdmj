<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>index</title>
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
        <td style="background-color: transparent ; border: none ">公历:<?php echo ($_SESSION[jinrihuangli]['gongli']); ?>&nbsp</td>
        <td class="green" style="background-color: transparent ; border: none;padding-right:120px"  >宜:<?php echo ($_SESSION[jinrihuangli]['yi']); ?>&nbsp</td>
        <td class="red" style="background-color: transparent ; border: none ;"  >
            <A href="javascript:" class="red" onClick="window.external.AddFavorite('http://www.zhidianmijin.com','免费算命')">
                [<u class="red">将【本站】在线算命加入收藏夹！</u>]</A>
        </td>
        <td style="border: none"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=120286418&site=qq&menu=yes">
            <img border="0" src="http://wpa.qq.com/pa?p=2:120286418:51" alt="联系站长" title="联系站长" style="border: none"/>
        </a></td>
    </tr>

        <tr>
            <td style="background-color: transparent ; border: none">农历:<?php echo ($_SESSION[jinrihuangli]['nongli']); ?>&nbsp</td>
            <td class="red"style="background-color: transparent ; border: none" >忌:<?php echo ($_SESSION[jinrihuangli]['ji']); ?>&nbsp</td>
            <td class="red"style="background-color: transparent ; border: none ;">
                <A href="http://www.baidu.com">[<u class="green">打开百度</u>]</A>
            </td>
        </tr>
        <tr>
            <td style="background-color: transparent ; border: none"><?php echo ($_SESSION[jinrihuangli]['suici']); ?>&nbsp</td>
            <td class="red"style="background-color: transparent ; border: none">冲:<?php echo ($_SESSION[jinrihuangli]['cong']); ?>&nbsp</td>
            <td class="red"style="background-color: transparent ; border: none">
                <A href="http://www.baidu.com">[<u class="green">友情链接</u>]</A>
            </td>

        </tr>

</table>
</div><?php endif; ?></div>
<div id="topmenu" class="layout"><table id="top_menu">
    <tr>
        <td class="top" id="top_menu_main"><a href="<?php echo U('home/index/index');?>">网站首页</a></td>
        <td class="top" id="top_menu_1"><a href="<?php echo U('home/ctsm/index');?>">传统算命</a></td>
        <td class="top" id="top_menu_2"><a href="<?php echo U('home/sxxzxx/index');?>"> 生肖/星座/血型</a></td>
        <td class="top" id="top_menu_3"><a href="<?php echo U('home/cqczjm/index');?>" >抽签/测字/解梦</a></td>
        <td class="top" id="top_menu_4"><a href="<?php echo U('home/qinglv/index');?>" >恋爱指南</a></td>
        <td class="top" id="top_menu_5"><a href=" <?php echo U('home/yuce/index');?>">民俗预测</a></td>
        <td class="top" id="top_menu_x"><a href="index.php?g=home&m=yuce&a=index&sm=6">黄道吉日</a></td>
    </tr>
</table></div>
<div id="bodydiv" class="layout">
<div id="left" class="layout"><div id="div_li1" class="menu" style="position:relative" >
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
<hr class="left_hr"align="left"/>
   <div id="div_li2" class="menu" >
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
<hr class="left_hr"align="left"/>
    <div id="div_li3" class="menu" value="0">
        <input id="hidval3" type="hidden" value="0"/>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=1" >关帝神签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=2" >观音灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=3" >黄大仙灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=4" >吕祖灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=5" >天后灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=6" >诸葛神算</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=7" >周公解梦</a></li>
      </div>
<hr class="left_hr"align="left"/>
   <div id="div_li4"class="menu" value="0">
       <input id="hidval4" type="hidden" value="0"/>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=1"> 星座组合</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=2">姓名配对</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=3">QQ缘分</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=4">生肖血型</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=5">姓名五格</a></li>
      </div>

<hr class="left_hr" align="left"/>
   <div id="div_li5"class="menu" value="0">
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
      </div>
</div>
<div id="mid" class="layout">
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">    <tbody>
<tr>
    <td  width="6%" rowspan="6" bgcolor="#FFFFFF" class="new">
        <b><?php echo ($xing1); ?></b><br /><br />
        <b><?php echo ($xing2); ?></b> <br /><br />
        <b><?php echo ($ming1); ?></b> <br /><br />
        <b><?php echo ($ming2); ?></b> <br /><br />
    </td>
    <td  width="12%" rowspan="2" bgcolor="#FFFFFF" class="new">出生时间：</td>
    <td  width="9%" bgcolor="#FFFFFF" class="new">(公历)</td>
    <td  width="12%" bgcolor="#FFFFFF" class="new"><?php echo ($nian1); ?>年</td>
    <td  width="10%" bgcolor="#FFFFFF" class="new"><?php echo ($yue1); ?>月</td>
    <td  width="10%" bgcolor="#FFFFFF" class="new"><?php echo ($ri1); ?>日</td>
    <td  width="11%" bgcolor="#FFFFFF" class="new"><?php echo ($hh1); ?>点</td>
    <td width="30%"  rowspan="6" bgcolor="#FFFFFF" class="new" style="padding-left:4px;padding-right:4px;">本命属<?php echo ($sx); ?>，<?php echo ($layin); ?>命。五行<?php echo ($mainw); echo ($mainq); ?>；日主天干为<b><?php echo (tgdzwh($bz[dg])); ?></b>，生于<?php echo (siji($yue1)); ?>季。<br />
        （同类<?php echo ($tnwh); ?>；异类<?php echo ($ynwh); ?>。）八字五行个数 : <?php echo ($wnum1); ?>个金，<?php echo ($wnum2); ?>个木，<?php echo ($wnum3); ?>个水，<?php echo ($wnum4); ?>个火，<?php echo ($wnum5); ?>个土<br /></td>
</tr>
<tr>
    <td bgcolor="#FFFFFF" class="new" >(农历)</td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo ($nian2); ?>年</td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo ($yue2); ?>月</td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo ($ri2); ?>日</td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo ($hh2); ?>时</td>
</tr>

<tr>
    <td  colspan="2" bgcolor="#FFFFFF" class="new">八字：</td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo ($bz[ygz]); ?>　</td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo ($bz[mgz]); ?>　</td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo ($bz[dgz]); ?>　</td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo ($bz[tgz]); ?>　</td>
</tr>
<tr>
    <td  colspan="2" bgcolor="#FFFFFF" class="new">五行：</td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo (tgdzwh($bz[yg])); echo (tgdzwh($bz[yz])); ?></td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo (tgdzwh($bz[mg])); echo (tgdzwh($bz[mz])); ?></td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo (tgdzwh($bz[dg])); echo (tgdzwh($bz[dz])); ?></td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo (tgdzwh($bz[tg])); echo (tgdzwh($bz[tz])); ?></td>
</tr>
<tr>
    <td  colspan="2" bgcolor="#FFFFFF" class="new">纳音：</td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo (layin($bz[ygz])); ?></td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo (layin($bz[mgz])); ?></td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo (layin($bz[dgz])); ?></td>
    <td bgcolor="#FFFFFF" class="new" ><?php echo (layin($bz[tgz])); ?></td>


</tr>
</tbody>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td  width="16%"  bgcolor="#FFFFFF" class="new">生肖个性</td>
        <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new">根据分析，您的生肖为“<?php echo ($sx); ?>”<br /> <?php echo ($sxgx); ?></td>
    </tr>
    </tbody>
</table><table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td  width="16%"  bgcolor="#FFFFFF" class="new">性格分析</td>
        <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new"> <?php echo ($xgfx); ?></td>
    </tr>
    </tbody>
</table><table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td  width="16%"  bgcolor="#FFFFFF" class="new">爱情分析</td>
        <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new"> <?php echo ($aqfx); ?></td>
    </tr>
    </tbody>
</table><table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td  width="16%"  bgcolor="#FFFFFF" class="new">事业分析</td>
        <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new"> <?php echo ($syfx); ?></td>
    </tr>
    </tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td  width="16%"  bgcolor="#FFFFFF" class="new">财运分析</td>
        <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new"><?php echo ($cyfx); ?></td>
    </tr>
    </tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td  width="16%"  bgcolor="#FFFFFF" class="new">健康分析</td>
        <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new"><?php echo ($jkfx); ?></td>
    </tr>
    </tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td class="new"><div id="ft">说明:日干论命仅对八字中日柱的信息进行分析，为片面的信息，仅供参考！</div></td>
    </tr>
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
联系站长   Email:zhaoge110164@163.com   QQ:120286418  </p>
 <p align="center"> 京ICP备XXXXXXXX号</p></div>
</body>
</html>