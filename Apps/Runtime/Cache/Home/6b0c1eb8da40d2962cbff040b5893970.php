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
    <tr> <form name="form1" method="post" action="index.php?g=home&m=yuce&a=index&sm=6">
        <input name="act" type="hidden" value="crz">
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px;width:100%">黄历查询:
            <select name="yy" size="1" id="yy" style="font-size: 9pt">
            <?php if(is_array($voyear)): $i = 0; $__LIST__ = $voyear;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo); ?>"><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>年
            <select name="mm" size="1" id="mm" style="font-size: 9pt">
                <?php if(is_array($months)): $i = 0; $__LIST__ = $months;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>月
            <select name="dd" size="1" id="dd" style="font-size: 9pt">
                <?php if(is_array($days)): $i = 0; $__LIST__ = $days;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option>  <?php if(is_array($months)): $i = 0; $__LIST__ = $months;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>日
            <input type="submit" name="Submit" value="查询">        </TD></form>
    </tr>
    <tr>
        <form name="form1" method="post" action="index.php?g=home&m=yuce&a=index&sm=6">
            <TD vAlign=top class=new style="PADDING-BOTTOM: 8px">选日子:<select name="upto" >
                <option value="3">3天以内</option>
                <option value="7">一周以内</option>
                <option value="30">一月以内</option>
                <option value="90">三月以内</option>
                <option value="180">半年内</option>
                <option value="365">今年内</option>
            </select>
                <select name="weekday" >
                    <option value="-">星期</option>
                    <?php if(is_array($WeekName)): $i = 0; $__LIST__ = $WeekName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <select name="tp" size="1">
                    <option value="0" >宜</option>
                    <option value="1" >忌</option>
                </select>
                <select name="word" size="1">
                    <option value="开市" >开市</option>
                    <option value="交易" >交易</option>
                    <option value="嫁娶" >嫁娶</option>
                    <option value="入宅" >入宅</option>
                    <option value="入学" >入学</option>
                    <option value="纳财" >纳财</option>
                    <option value="订盟" >订盟</option>
                    <option value="安门" >安门</option>
                    <option value="出行" >出行</option>
                    <option value="开光" >开光</option>
                    <option value="求嗣" >求嗣</option>
                    <option value="祈福" >祈福</option>
                    <option value="破土" >破土</option>
                    <option value="祭祀" >祭祀</option>
                    <option value="安葬" >安葬</option>
                </select>
                <input type="submit" name="Submit2" value="查询">
                <input name="Submit22" type="button" style="color:#FF0000" onClick="(location='index.php?g=home&m=yuce&a=index&sm=6&act=xrz&word=嫁娶&upto=365&tp=0')" value="结婚吉日">
                <input name="act" type="hidden" value="xrz"></TD>
        </form>
    </tr>
    <?php if(isset($_REQUEST['act']) and $_REQUEST['act'] == 'crz'): ?><tr>
        <TD colspan="2" vAlign=top class=new style="PADDING-BOTTOM: 8px">
            <strong>当日统览：</strong><span class="red">
            <?php echo ($cxdate); ?>农历:<?php echo ($rs["nn"]); echo ($WeekName[$rs['xq']]);?></span></TD>
    </tr>
    </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY><tr>
        <TD width="17%" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>岁次</strong></TD>
        <TD width="83%" vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ($rs["suici"]); ?></TD>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>诸神方位</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px">喜神<?php echo ($zsfw["xs"]); ?>
            财神<?php echo ($zsfw["cs"]); ?>
            福神<?php echo ($zsfw["fs"]); ?>
            鹤神<?php echo ($zsfw["hs"]); ?>
            <br><?php echo ($zsfw["jxrsdj"]); ?>
            <br>凡喜神财神之位宜向之．鹤神宜避之．吉时宜用之．空亡时不可用．
        </TD>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>每日胎神占方</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ($rs["tszf"]); ?></TD>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>五行</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ($rs["wuhang"]); ?></TD>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="./Public/images/ic01.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ($rs["cong"]); ?></TD>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>彭祖百忌</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ($rs["pzbj"]); ?></TD>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>吉神宜趋</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ($rs["jsyq"]); ?></TD>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="./Public/images/ic02.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo (str_replace($word,"'<font color=red><b>'.$word.'</b></font>' ",$rs['yi']));?></TD>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>凶神宜忌</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ($rs["xsyq"]); ?></TD>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="./Public/images/ic03.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo (str_replace($word,"'<font color=red><b>'.$word.'</b></font>' ",$rs['ji']));?></TD>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>详细时辰</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ($rs["xx"]); ?></TD>
    </tr>
    </TBODY>
</TABLE><?php endif; ?>
<?php if(isset($_REQUEST['act']) and $_REQUEST['act'] == 'xrz'): if(!$allshu): ?><tr>
    <TD colspan="2" vAlign=top class=new style="PADDING-BOTTOM: 8px">
        <strong>从<?php echo ($_nowDate); ?>开始<?php echo ($upto); ?>天内，没有符合要求 "<?php echo ($word); ?>" 的记录</strong></TD>
        </tr><?php endif; ?>
</tr>
</TBODY>
</TABLE>

<tr>
    <TD colspan="2" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>从<?php echo ($_nowDate); ?>开始<?php echo ($upto); ?>天内，共有<?php echo ($allshu); ?>个日子符合要求 "<?php echo ($word); ?>"
        <?php if($allshu > 20): ?>程序只列出最近20个记录<?php endif; ?></strong></TD>
</tr>
</TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i;?><tr>
        <TD width="6%" vAlign=top class=new style="PADDING-BOTTOM: 8px">
            <div align="center">
                <STRONG><?php echo ($i); ?></STRONG></div></TD>
        <TD width="94%" vAlign=top class=new style="PADDING-BOTTOM: 8px">
            <a href="index.php?g=home&m=yuce&a=index&sm=6&yy=<?php echo mb_substr($rs['gn'],0,4,'utf-8');?>&mm=<?php echo mb_substr($rs['gn'],5,2,'utf-8');?>&dd=<?php echo mb_substr($rs['gn'],8,2,'utf-8');?>&act=crz&word=<?php echo ($word); ?>">
            <font color=red>公元<?php echo ($rs["gn"]); ?> , 农历<?php echo ($rs["nn"]); ?> <?php echo $WeekName[$rs['xq']];?></font>
                </a>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px">
            <img src="./Public/images/ic01.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ($rs["cong"]); ?></TD>
    </tr>

    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px">
            <img src="./Public/images/ic02.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px">
            <?php echo (str_replace($word,"'<font color=red><b>'.$word.'</b></font>' ",$rs['yi']));?></TD>
    </tr>
    <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="./Public/images/ic03.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo (str_replace($word,"'<font color=red><b>'.$word.'</b></font>' ",$rs['ji']));?></TD>
    </tr>
    <tr>
        <TD colspan="2" vAlign=top class=new><hr noshade color="#CCCCCC"></TD>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </TBODY>
</TABLE><?php endif; ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD align="left" class=new style="PADDING-BOTTOM:5px">黄历名词解释：<BR>
            <STRONG>嫁娶 </STRONG>：男娶女嫁，举行结婚大典的吉日 <STRONG><BR>
                祭祀 </STRONG>：指祠堂之祭祀、即拜祭祖先或庙寺的祭拜、神明等事 <STRONG><BR>
                安葬 </STRONG>：举行埋葬等仪式 <STRONG><BR>
                出行 </STRONG>：指外出旅行、观光游览 <STRONG><BR>
                祈福 </STRONG>：祈求神明降福或设醮还愿之事 <STRONG><BR>
                动土 </STRONG>：建筑时、第一次动起锄头挖土 <STRONG><BR>
                安床 </STRONG>：指安置睡床卧铺之意 <STRONG><BR>
                开光 </STRONG>：佛像塑成后、供奉上位之事 <STRONG><BR>
                纳采 </STRONG>：缔结婚姻的仪式、受授聘金 <STRONG><BR>
                入殓 </STRONG>：将尸体放入棺材之意 <STRONG><BR>
                移徙 </STRONG>：指搬家迁移住所之意 <STRONG><BR>
                破土 </STRONG>：仅指埋葬用的破土、与一般建筑房屋的“动土”不同，即“破土”属阴宅，“动土”属阳宅也。现今社会上多已滥用属阴宅择日时属阴宅须辨别之。 <STRONG><BR>
                解除 </STRONG>：指冲洗清扫宅舍、解除灾厄等事 <STRONG><BR>
                入宅 </STRONG>：即迁入新宅、所谓“新居落成典礼”也 <STRONG><BR>
                修造 </STRONG>：指阳宅之造与修理 <STRONG><BR>
                栽种 </STRONG>：种植物“接果”“种田禾”同 <STRONG><BR>
                开市 </STRONG>：“开业”之意，商品行号开张做生意“开幕典礼”“开工”同。包括：(1)年头初开始营业或开工等事(2)新设店铺商行或新厂开幕等事 <STRONG><BR>
                移柩 </STRONG>：行葬仪时、将棺木移出屋外之事 <STRONG><BR>
                订盟 </STRONG>：订婚仪式的一种，俗称小聘(订) <STRONG><BR>
                拆卸 </STRONG>：拆掉建筑物 <STRONG><BR>
                立卷 </STRONG>：订立各种契约互相买卖之事 <STRONG><BR>
                交易 </STRONG>：订立各种契约互相买卖之事 <STRONG><BR>
                求嗣 </STRONG>：指向神明祈求后嗣(子孙)之意 <STRONG><BR>
                上梁 </STRONG>：装上建筑物屋顶的梁，同架马 <STRONG><BR>
                纳财 </STRONG>：购屋产业、进货、收帐、收租、讨债、贷款、五谷入仓等 <STRONG><BR>
                起基 </STRONG>：建筑时、第一次动起锄头挖土 <STRONG><BR>
                斋醮 </STRONG>：庙宇建醮前需举行的斋戒仪式 <STRONG><BR>
                赴任 </STRONG>：走马上任 <STRONG><BR>
                冠笄 </STRONG>：男女年满二十岁所举行的成年礼仪式 <STRONG><BR>
                安门 </STRONG>：放置正门门框 <STRONG><BR>
                修坟 </STRONG>：修理坟墓 <STRONG><BR>
                挂匾 </STRONG>：指悬挂招牌或各种匾额 </TD>
    </tr>
    </TBODY>
</TABLE></div>
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