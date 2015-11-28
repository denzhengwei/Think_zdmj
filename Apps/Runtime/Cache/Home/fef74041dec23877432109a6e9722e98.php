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
        <TD align="left" class=new style="PADDING-BOTTOM: 1px">
            <?php if($xing != ''): echo ($xing); echo ($ming); ?>(<?php echo ($nian1); ?>-<?php echo ($yue1); ?>-<?php echo ($ri1); ?>) 我的星座：<?php echo ($myxz); ?>
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=<?php echo ($myxz); ?>">[星座详情]</a>
            我的属相:<?php echo ($sx); ?><a href="?g=home&m=sxxzxx&a=index&flag=5&xiao=<?php echo ($sx); ?>">[属相性格]</a>
            我的血型:<?php echo ($xuexing); ?><a href="?g=home&m=sxxzxx&a=index&flag=6&xuexing=<?php echo ($xuexing); ?>">[血型详解]</a><?php endif; ?>
            <form action="" method="post">查询星座:
                <select name="y" size="1" id="y" style="font-size: 9pt">
                    <?php if(is_array($years)): $k = 0; $__LIST__ = $years;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>年
                <select name="m" size="1" id="_m" style="font-size: 9pt">
                    <?php if(is_array($months)): $i = 0; $__LIST__ = $months;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>月
                <select name="d" size="1" id="_d" style="font-size: 9pt">
                    <?php if(is_array($days)): $i = 0; $__LIST__ = $days;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>日(公历生日)
                <input name="Input2" type="submit" value="查询" class="bot01"   />
                <input name="act" type="hidden" value="xzcx">
                <?php if($myxz1 != ''): ?>&nbsp;查询结果:<?php echo ($myxz1); endif; ?>
            </form>
           </TD>
    </tr>
    <tr>
        <TD align="left" class=new style="PADDING-BOTTOM: 1px"><span class="green">星座详解</span>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=白羊座">牡羊座</a>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=金牛座">金牛座</a>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=双子座">双子座</a>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=巨蟹座">巨蟹座</a>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=狮子座">狮子座</a>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=处女座">处女座</a>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=天秤座">天秤座</a>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=天蝎座">天蝎座</a>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=射手座">射手座</a>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=魔羯座">魔羯座</a>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=水瓶座">水瓶座</a>·
            <a href="?g=home&m=sxxzxx&a=index&flag=4&astro=双鱼座">双鱼座</a>
        </TD>
    </tr>
    </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td width="100%" colspan="6" class="ttop"><?php echo ($_thisYear); ?>年12生肖运势抢先播报</td>
    </tr>
    <tr>
        <td colspan="6" class="new2"><span class="green">·你知道十二生肖<?php echo ($_thisYear); ?>年会走什么好运吗？发财？升迁？还是遇桃花？快来点击查看属于你的<?php echo ($_thisYear); ?>生肖运程吧！</span></td>
    </tr>
    <tr>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=鼠" target="_blank"><img src="./Public/images/sx1.gif" width="90" height="80" border="0"></a></td>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=牛" target="_blank"><img src="./Public/images/sx2.gif" width="90" height="80" border="0"></a></td>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=虎" target="_blank"><img src="./Public/images/sx3.gif" width="90" height="80" border="0"></a></td>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=兔" target="_blank"><img src="./Public/images/sx4.gif" width="90" height="80" border="0"></a></td>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=龙" target="_blank"><img src="./Public/images/sx5.gif" width="90" height="80" border="0"></a></td>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=蛇" target="_blank"><img src="./Public/images/sx6.gif" width="90" height="80" border="0"></a></td>
    </tr>
    <tr>
        <td class="new"><DIV align="center"><STRONG>生肖鼠<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
        <td class="new"><DIV align="center"><STRONG>生肖牛<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
        <td class="new"><DIV align="center"><STRONG>生肖虎<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
        <td class="new"><DIV align="center"><STRONG>生肖兔<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
        <td class="new"><DIV align="center"><STRONG>生肖龙<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
        <td class="new"><DIV align="center"><STRONG>生肖蛇<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
    </tr>
    <tr>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=马" target="_blank"><img src="./Public/images/sx7.gif" width="90" height="80" border="0"></a></td>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=羊" target="_blank"><img src="./Public/images/sx8.gif" width="90" height="80" border="0"></a></td>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=猴" target="_blank"><img src="./Public/images/sx9.gif" width="90" height="80" border="0"></a></td>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=鸡" target="_blank"><img src="./Public/images/sx10.gif" width="90" height="80" border="0"></a></td>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=狗" target="_blank"><img src="./Public/images/sx11.gif" width="90" height="80" border="0"></a></td>
        <td class="new"><a href="?g=home&m=sxxzxx&a=index&flag=12&sx=猪" target="_blank"><img src="./Public/images/sx12.gif" width="90" height="80" border="0"></a></td>
    </tr>
    <tr>
        <td class="new"><DIV align="center"><STRONG>生肖马<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
        <td class="new"><DIV align="center"><STRONG>生肖羊<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
        <td class="new"><DIV align="center"><STRONG>生肖猴<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
        <td class="new"><DIV align="center"><STRONG>生肖鸡<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
        <td class="new"><DIV align="center"><STRONG>生肖狗<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
        <td class="new"><DIV align="center"><STRONG>生肖猪<?php echo ($_thisYear); ?>运势</STRONG></DIV></td>
    </tr>
    </tbody>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td colspan="2" class="ttop">星座预测</td>
    </tr>
    <tr>
        <td colspan="2" class="new">
           |<a href="index.php?g=home&m=sxxzxx&a=xzyc&type=today&xz=<?php echo ($xz); ?>">今日运程</a>
            | <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=today&xz=<?php echo ($xz); ?>">今日运程</a>
            |<a href="index.php?g=home&m=sxxzxx&a=xzyc&type=nextday&xz=<?php echo ($xz); ?>">明日运程</a>
            |<a href="index.php?g=home&m=sxxzxx&a=xzyc&type=week&xz=<?php echo ($xz); ?>">本周运程</a>
            |<a href="index.php?g=home&m=sxxzxx&a=xzyc&type=month&xz=<?php echo ($xz); ?>">本月运程</a>
            |<a href="index.php?g=home&m=sxxzxx&a=xzyc&type=year&xz=<?php echo ($xz); ?>">今年运程</a>
            |<a href="index.php?g=home&m=sxxzxx&a=xzyc&type=yearlove&xz=<?php echo ($xz); ?>">今年爱情运势</a>|
    </tr>
    <tr>
        <td colspan="2" class="new"><span class="green">星座查询:</span></td>
    </tr>
    <tr>
        <td width="49%" class="new">
            <form action=?g=home&m=sxxzxx&a=index& method=post target=_blank>
            <input type=hidden name=flag value=4><select name=astro >
            <option value="白羊座" selected>白羊座 3月21-4月20</option>
            <option value="金牛座">金牛座 4月21-5月21</option>
            <option value="双子座">双子座 5月22-6月21</option>
            <option value="巨蟹座">巨蟹座 6月22-7月22</option>

            <option value="狮子座">狮子座 7月23-8月23</option>
            <option value="处女座">处女座 8月24-9月23</option>
            <option value="天秤座">天秤座 9月24-10月23</option>
            <option value="天蝎座">天蝎座 10月24-11月22</option>
            <option value="射手座">射手座 11月23-12月21</option>
            <option value="魔羯座">魔羯座 12月22-1月20</option>

            <option value="水瓶座">水瓶座 1月21-2月19</option>
            <option value="双鱼座">双鱼座 2月20-3月20</option>
        </select>
            <!--<input type="hidden" name="g" value="home"/>
                <input type="hidden" name="m" value="sxxzxx"/>
                <input type="hidden" name="a" value="index"/>-->
            <input name="" type="submit" value="星座详解" ></p>
        </form></td>
        <td width="51%" class="new">
            <form action=?g=home&m=sxxzxx&a=index& method=post target=_blank>
            <input type=hidden name=flag value=7>
            <select name="astro">
                <option>白羊座</option>		<option>金牛座</option>		<option>双子座</option>
                <option>巨蟹座</option>		<option>狮子座</option>		<option>处女座</option>
                <option>天秤座</option>		<option>天蝎座</option>		<option>射手座</option>
                <option>魔羯座</option>		<option>水瓶座</option>		<option>双鱼座</option>
            </select>

            <select name="blood" class="sele01">
                <option value="O">O型</option><option value="A">A型</option><option value="B">B型</option><option value="AB">AB型</option>
            </select>
            <input name="" type="submit" value="星座+血型"></p>
        </form></td>
    </tr><tr>
        <td colspan="2" class="new"><span class="green">生日密码-生日花语:</span></td>
    </tr>
    <tr>
        <td class="new">
            <form action=?g=home&m=sxxzxx&a=index& method=post target=_blank>
            <input type=hidden name=flag value=8>
            <select name="m" class="sele02" id="m">
                <option value="1" selected>月</option>
                <?php if(is_array($months)): $i = 0; $__LIST__ = $months;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <select name="d" class="sele02" id="d">f
                <option value="1" selected>日</option>
                <?php if(is_array($days)): $i = 0; $__LIST__ = $days;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>


            <select name=flag1 class="sele01" id="flag1">
                <option value="生日书">生日书</option>
                <option value="生日花">生日花</option>
            </select>

            <input name="" type="submit" value="查询" class="bot01"   /></p>
        </form></td>
    </tr>      <tr>
        <td colspan="2" class="new"><span class="green">星盘分析:</span></td>
    </tr>  <tr>
        <td width="49%" class="new">
            <form action=?g=home&m=sxxzxx&a=index& method=post target=_blank>
            <input type=hidden name=flag value=9>
            <select name="11-1">
                <option value="太阳" selected>当太阳</option>

                <option value="月亮">当月亮
                <option value="水星">当水星
                <option value="金星">当金星
                <option value="火星">当火星
                <option value="木星">当木星
                <option value="土星">当土星
                <option value="天王星">当天王星
                <option value="海王星">当海王星
                <option value="冥王星">当冥王星
            </select>
            <select name="11-2" style="width:91px;">

                <option value="白羊座">落入白羊座</option>

                <option value="金牛座">落入金牛座
                <option value="双子座">落入双子座
                <option value="巨蟹座">落入巨蟹座
                <option value="狮子座">落入狮子座
                <option value="处女座">落入处女座
                <option value="天秤座">落入天秤座
                <option value="天蝎座">落入天蝎座
                <option value="射手座">落入射手座
                <option value="魔羯座">落入魔羯座
                <option value="水瓶座">落入水瓶座
                <option value="双鱼座">落入双鱼座
            </select>
            <input name="" type="submit" value="查看"></p>

        </form></td>
        <td width="51%" class="new"><form action=?g=home&m=sxxzxx&a=index& method=post target=_blank>
            <input type=hidden name=flag value=10>
            <select name="12-1" >
                <option value="太阳" selected>当太阳</option>
                <option value="月亮">当月亮
                <option value="水星">当水星
                <option value="金星">当金星
                <option value="火星">当火星
                <option value="木星">当木星
                <option value="土星">当土星
                <option value="天王星">当天王星
                <option value="海王星">当海王星
                <option value="冥王星">当冥王星
            </select>

            <select name="12-2" style="width:91px;">
                <option value="第一宫">落入第一宫</option>

                <option value="第二宫">落入第二宫
                <option value="第三宫">落入第三宫
                <option value="第四宫">落入第四宫
                <option value="第五宫">落入第五宫
                <option value="第六宫">落入第六宫
                <option value="第七宫">落入第七宫
                <option value="第八宫">落入第八宫
                <option value="第九宫">落入第九宫
                <option value="第十宫">落入第十宫
                <option value="第十一宫">落入第十一宫
                <option value="第十二宫">落入第十二宫
            </select>

            <input name="" type="submit" value="查看" /></p>
        </form></td>
    </tr>
    <tr>
        <td class="new"><form action=?g=home&m=sxxzxx&a=index& method=post target=_blank>
            <input type=hidden name=flag value=11><select name="star1" >
            <option value="太阳" selected>当太阳</option>
            <option value="月亮">当月亮
            <option value="水星">当水星
            <option value="金星">当金星
            <option value="火星">当火星
            <option value="木星">当木星
            <option value="土星">当土星
            <option value="天王星">当天王星
            <option value="海王星">当海王星
            <option value="冥王星">当冥王星
        </select>

            <select name="star2" style="width:60px;">

                <option value="月亮">与月亮
                <option value="水星">与水星
                <option value="金星">与金星
                <option value="火星">与火星
                <option value="木星">与木星
                <option value="土星">与土星
                <option value="天王星">与天王星
                <option value="海王星">与海王星
                <option value="冥王星">与冥王星
            </select>
            <select name="13-3" style="width:42px;">
                <option>0度</option>

                <option>60度</option>
                <option>90度</option>
                <option>120度</option>
                <option>180度</option>
            </select>
            <input name="" type="submit" value="查看"></p>
        </form></td>
        <td class="new">&nbsp;</td>
    </tr>  <tr>
        <td colspan="2" class="new"><span class="green">星座配对:</span></td>
    </tr>  <tr>
        <td width="49%" class="new"><form action=?g=home&m=sxxzxx&a=index& method=post target=_blank>
            <input name=flag type=hidden id="flag" value=1>
            <select name="astro_m" id="astro_m"  style="width:65px">
                <option value="牡羊座">男白羊</option>
                <option>金牛座</option>
                <option>双子座</option>
                <option>巨蟹座</option>
                <option>狮子座</option>
                <option>处女座</option>
                <option>天秤座</option>
                <option>天蝎座</option>
                <option>射手座</option>
                <option>魔羯座</option>
                <option>水瓶座</option>
                <option>双鱼座</option>
            </select>
            <select name="astro_f" id="astro_f" style="width:65px">
                <option value="牡羊座">女白羊</option>
                <option>金牛座</option>
                <option>双子座</option>
                <option>巨蟹座</option>
                <option>狮子座</option>
                <option>处女座</option>
                <option>天秤座</option>
                <option>天蝎座</option>
                <option>射手座</option>
                <option>魔羯座</option>
                <option>水瓶座</option>
                <option>双鱼座</option>
            </select>
            <input type="submit" value="情侣速配">

        </form></td>
        <td width="51%" class="new"><form action=?g=home&m=sxxzxx&a=index& method=post target=_blank>
            <input type=hidden name=flag value=2>
            <select name="astro_m" id="select"  style="width:65px">
                <option value="白羊座">男白羊</option>
                <option>金牛座</option>
                <option>双子座</option>
                <option>巨蟹座</option>
                <option>狮子座</option>
                <option>处女座</option>
                <option>天秤座</option>
                <option>天蝎座</option>
                <option>射手座</option>
                <option>魔羯座</option>
                <option>水瓶座</option>
                <option>双鱼座</option>
            </select>
            <select name="astro_f" id="select2" style="width:65px">
                <option value="白羊座">女白羊</option>
                <option>金牛座</option>
                <option>双子座</option>
                <option>巨蟹座</option>
                <option>狮子座</option>
                <option>处女座</option>
                <option>天秤座</option>
                <option>天蝎座</option>
                <option>射手座</option>
                <option>魔羯座</option>
                <option>水瓶座</option>
                <option>双鱼座</option>
            </select>
            <input type="submit" value="星座互动" />
        </form></td>
    </tr>
    <tr>
        <td class="new"><form action=?g=home&m=sxxzxx&a=index& method=post target=_blank>
            <input type=hidden name=flag value=3>
            <select name="xiao_m" id="xiao_m"  style="width:65px">
                <option value=鼠 selected>男鼠</option>
                <option>牛</option>
                <option>虎</option>
                <option>兔</option>
                <option>龙</option>
                <option>蛇</option>
                <option>马</option>
                <option>羊</option>
                <option>猴</option>
                <option>鸡</option>
                <option>狗</option>
                <option value=猪>猪</option>
            </select>
            <select name="xiao_f" id="xiao_f" style="width:65px">
                <option value=鼠 selected>女鼠</option>
                <option>牛</option>
                <option>虎</option>
                <option>兔</option>
                <option>龙</option>
                <option>蛇</option>
                <option>马</option>
                <option>羊</option>
                <option>猴</option>
                <option>鸡</option>
                <option>狗</option>
                <option value=猪>猪</option>
            </select>
            <input type="submit" value="情侣速配">
        </form></td>
    </tr>     <tr>
        <td colspan="2" class="new"><span class="green">生肖血型:</span></td>
    </tr>  <tr>
        <td width="49%" class="new"><form action=?g=home&m=sxxzxx&a=index& method=post target=_blank>
            <input type=hidden name=flag value=5><select name=xiao style="width:176px;">
            <option value=鼠>属鼠人的性格</option>
            <option value=牛>属牛人的性格</option>
            <option value=虎>属虎人的性格</option>
            <option value=兔>属兔人的性格</option>

            <option value=龙>属龙人的性格</option>
            <option value=蛇>属蛇人的性格</option>
            <option value=马>属马人的性格</option>
            <option value=羊>属羊人的性格</option>
            <option value=猴>属猴人的性格</option>
            <option value=鸡>属鸡人的性格</option>

            <option value=狗>属狗人的性格</option>
            <option value=猪>属猪人的性格</option>
        </select>
            <input name="" type="submit" value="查看" class="bot05" /></p>
        </form></td>
        <td width="51%" class="new"><form action=?g=home&m=sxxzxx&a=index& method=post target=_blank>
            <input type=hidden name=flag value=6>
            <select name="xuexing" style="width:176px;">
                <option value=O>O血型详解</option>
                <option value=A>A血型详解</option>
                <option value=B>B血型详解</option>
                <option value=AB>AB血型详解</option>
            </select>
            <input name="" type="submit" value="查看" class="bot05" /></p>
        </form></td>
    </tr>
    </tbody>
</table></div>
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