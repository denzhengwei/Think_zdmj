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
    <table id="top_menu_table">
    <tr>
        <td style="background-color: transparent">公历:<?php echo ($_SESSION[jinrihuangli]['gongli']); ?>&nbsp</td>
        <td class="green" style="background-color: transparent">宜:<?php echo ($_SESSION[jinrihuangli]['yi']); ?>&nbsp</td>
    </tr>
        <tr>
            <td style="background-color: transparent">农历:<?php echo ($_SESSION[jinrihuangli]['nongli']); ?>&nbsp</td>
            <td class="red"style="background-color: transparent">忌:<?php echo ($_SESSION[jinrihuangli]['ji']); ?>&nbsp</td>
        </tr>
        <tr>
            <td style="background-color: transparent"><?php echo ($_SESSION[jinrihuangli]['suici']); ?>&nbsp</td>
            <td class="red"style="background-color: transparent">冲:<?php echo ($_SESSION[jinrihuangli]['cong']); ?>&nbsp</td>
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
<div id="mid" class="layout"><SCRIPT language=javascript>
    <!--
    function valid_checkdream(){
        if(  document.form1.word.value.length==""  )
        {window.alert("对不起，请输入梦的关键字！");
            document.form1.word.focus();
            return false;
        } ;
        if(  document.form1.word.value.length>20  )
        {window.alert("对不起，请将描述控制在20个字以内！");
            document.form1.word.focus();
            return false;
        } ;
        win = window.open('','dream','scrollbars=yes,top=0,left=0,width=580,height=510');
        form1.submit();
        return ;
    }
    //-->
</SCRIPT>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>
        <td width="79%" class="ttd"><span class="red">周公解梦:</span><br>
            <br>
            周公，即周公旦，他是周成王的叔父，对于建立和完善周代的封建制度他有很大贡献。周公在儒家文化中享有崇高的地位，孔子以“吾不复梦见周公矣”之言，隐喻周代礼仪文化的失落。
            　　周公是一个在孔子梦中频频出现的人物，在儒教长期主导文化的中国，周公也就不可避免的直接与梦联系起来。梦，经常被成为“周公之梦”,或“梦见周公”。因此，周公解梦中的周公，即是周公旦。</td>
        <td width="21%" class="ttd"><img src="./Public/images/zg.gif" width="150" height="218"></td>
    </tr>
    <form method="post" action=index.php?g=home&m=cqczjm&a=index&sm=8" name="form1" onSubmit="return valid_checkdream()" target="dream">
        <input type="hidden" name="act" value="ok" />
        <tr>
            <td colspan="2" class="new">
                请输入做梦内容的关键字 ：<input name="word" type="text" id="word" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="20">
                <select size="1" name="act">
                    <option selected="" value="1">简明</option>
                    <option value="2">详细</option>
                </select>  <input type="submit" name="Submit1" value="开始解梦" style="cursor:hand;">
    </form></td>
    </tr>
    </tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td width="12%" class="new">&nbsp;<strong><?php echo ($vo[0]); ?></strong></td>
        <td width="88%" class="new">
        <?php if(is_array($vo[1])): $i = 0; $__LIST__ = $vo[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><A onClick="window.open(this.href,'','location=no,menu=no,scrollbars=yes,resizable=no,top=0,left=0,width=580,height=510');return false;" href="index.php?g=home&m=cqczjm&a=index&sm=8&act=1&word=<?php echo ($vo2); ?>" target="_blank">
            <?php echo ($vo2); ?></A>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>


</div>
<div id="right" class="layout">rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr</div>
</div>
<div id="foot" class="layout">ffffffffffffffffffffffffffffffffffffffffff</div>
</body>
</html>