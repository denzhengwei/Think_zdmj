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
        <td class="green" style="background-color: transparent ; border: none">宜:<?php echo ($_SESSION[jinrihuangli]['yi']); ?>&nbsp</td>
    </tr>
        <tr>
            <td style="background-color: transparent ; border: none">农历:<?php echo ($_SESSION[jinrihuangli]['nongli']); ?>&nbsp</td>
            <td class="red"style="background-color: transparent ; border: none" >忌:<?php echo ($_SESSION[jinrihuangli]['ji']); ?>&nbsp</td>
        </tr>
        <tr>
            <td style="background-color: transparent ; border: none"><?php echo ($_SESSION[jinrihuangli]['suici']); ?>&nbsp</td>
            <td class="red"style="background-color: transparent ; border: none">冲:<?php echo ($_SESSION[jinrihuangli]['cong']); ?>&nbsp</td>
        </tr>
</table>
</div><?php endif; ?></div>
<div id="topmenu" class="layout"><table id="top_menu">
    <tr>
        <td class="top"><a href="<?php echo U('home/index/index');?>">网站首页</a></td>
        <td class="top"><a href="<?php echo U('home/ctsm/index');?>">传统算命</a></td>
        <td class="top"><a href="index.php?g=home&m=yuce&a=index&sm=6">黄道吉日</a></td>
        <td class="top" ><a href="<?php echo U('home/sxxzxx/index');?>"> 生肖/星座/血型</a></td>
        <td class="top"><a href="<?php echo U('home/cqczjm/index');?>" >抽签/测字/解梦</a></td>
        <td class="top"><a href="<?php echo U('home/qinglv/index');?>" >恋爱指南</a></td>
        <td class="top"><a href=" <?php echo U('home/yuce/index');?>">民俗预测</a></td>
    </tr>
</table></div>
<div id="bodydiv" class="layout">
<div id="left" class="layout">
<ul> <div id="div1" class="menu">
       <li class="second_li"><a  href="<?php echo U('home/ctsm/scbz');?>">生辰八字</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/bzcs');?>">八字测算</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/rglm');?>">日干论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/cglm');?>">称骨论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmcs');?>">姓名测试</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmpd');?>">姓命配对</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/sbwr');?>">上辈为人</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xsqy');?>">姓氏起源</a></li>
   </div>
</ul>
<ul>
   <div id="div_li2">
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=bj">星座保健</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=eq">星座EQ</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=iq">星座IQ</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=mr">星座名人</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=sy">星座失败教训</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=sl">星座实力</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=jy">星座5大建议</a></li>
       <li class="second_li"><a href="<?php echo U('home/sxxzxx/xzyc');?>">星座运程</a></li>
      </div>
</ul>
    <div id="div_li3" >
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=1" >关帝神签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=2" >观音灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=3" >黄大仙灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=4" >吕祖灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=5" >天后灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=6" >诸葛神算</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=7" >周公解梦</a></li>
      </div>
</ul>
<ul>
   <div id="div_li4">
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=1"> 星座组合</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=2">姓名配对</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=3">QQ缘分</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=4">生肖血型</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=5">姓名五格</a></li>
      </div>
</ul>
<ul>
   <div id="div_li5">
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=1" >耳鸣</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=2" >面热</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=3" >面热</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=4" >眼跳</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=5" >心惊</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=6" >黄道吉日</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=7" >QQ/手机号码吉凶</a></li>
       <li class="second_li" ><a href="index.php?g=home&m=yuce&a=index&sm=8" >三世财运</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=9" >生男生女</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=10" >指纹</a></li>
      </div>
  </ul></div>
<div id="mid" class="layout">

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody>
<?php if($lvzulqid != ''): ?><tr>
        <td align="center" class="new">
            <img src="./Public/images/lvzu/<?php echo ($lvzulqid); ?>.gif">
        </td>
    </tr>
    <tr>
        <td class="new">
            <A href="index.php?g=home&m=cqczjm&a=index">
                <font color=red>
                    点击这里返回抽签首页！</font>
            </A>
        </td>
    </tr>
<?php else: ?>
    <tr>
        <td align="center" class="new">
            <img src="./Public/images/lvzul.jpg" width="159" height="240">
        </td>
        <td width="50%" align="center" class="new">
<?php if($_REQUEST['act'] == ok and $lvzulqid == '' ): ?>您刚抽了第&nbsp;<font style="color: #FF0000;FONT-SIZE: 26px;font-weight: bold;">
            <?php echo ($num); ?></font>
            &nbsp;签<br>
            <br><?php endif; ?>
            <?php if( $gyclicknum < 3 and $gysmile != 4 and $num != '' and $lvzulqid == ''): ?><a href="index.php?g=home&m=cqczjm&a=index&sm=4&act=ok&gyclicknum=<?php echo ($gyclicknum+1); ?>&lvzulqid=<?php echo ($num); ?>" title="首先请您心无杂念，然后点这里开始擲出聖杯">
                <img src=./Public/images/sign<?php echo ($picnum); ?>.gif width=100 height=77 border=0>
                <br/>
                第<?php echo ($gyclicknum); ?>次
            </a>
            <br>
            <br>
            需连续掷出三次圣杯，才是灵签！请点上面图标开始掷出圣杯<?php endif; ?>


                <br>
            <?php if( $gyclicknum == 3 and $gysmile != 4 and $jieqian == ''): ?><a href="index.php?g=home&m=cqczjm&a=index&sm=4&act=jq&lvzulqid=<?php echo ($num); ?>">
            <font color=blue>
                恭喜，您连续掷出了三次圣杯，请点这里察看签词！</font>
        </a><?php endif; ?>
            <?php if( $gyclicknum < 3 and $gysmile != 4 and $jieqian == '' and $$gyclicknum > 0): ?>需连续掷出三次圣杯，才是灵签！目前，您已经掷出<?php echo ($gyclicknum); ?>次<?php endif; ?>
                <?php if($gysmile == 4): ?><br>
            <a href="index.php?g=home&m=cqczjm&a=index&sm=4&sm=4">
                <font color=red>
                  您掷出笑杯了，此签不准，请点这里重新抽签！</font>
            </a><?php endif; ?>
            <br>
            <br>
            <br>
            <?php if($num == ''and $jieqian == '' ): ?><a href="index.php?g=home&m=cqczjm&a=index&sm=4&act=ok" title="首先请您心无杂念，然后点这里开始抽签">
                <img src="./Public/images/yzqian.gif" width="103" height="134" border="0" />
            </a>
            <br />
            <DIV align="left" class="new2">
                1.抽签前先合手默念“吕祖仙师 指点迷经”三遍。<BR>
                2.默念自己姓名、出生时辰、年龄、现在居住地址。 <BR>
                3.请求指点事情，如婚姻、事业、运程、流年、工作、财运......等。   <BR>
                4.点上面的签筒开始抽签。   </DIV>

    </td>
        <td class="new" align="center">
            <img src="./Public/images/lvzu.jpg" width="159" height="240" border="0" />
        </td><?php endif; ?>
    </tr><?php endif; ?>
    </tbody>
</table>
</div>
<div id="right" class="layout"></div>
</div>
<div id="foot" class="layout"></div>
</body>
</html>