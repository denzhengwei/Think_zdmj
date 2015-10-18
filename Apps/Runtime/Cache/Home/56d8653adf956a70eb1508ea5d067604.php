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
    <TBODY>
    <tr>
        <TD class=new style="PADDING-BOTTOM: 1px" vAlign=top>点击星座查看运程
           ( <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=today&xz=<?php echo ($xz); ?>">今日</a>
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=nextday&xz=<?php echo ($xz); ?>">明日</a>
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=week&xz=<?php echo ($xz); ?>">本周</a>
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=month&xz=<?php echo ($xz); ?>">本月</a>
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=year&xz=<?php echo ($xz); ?>">今年</a>
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=yearlove&xz=<?php echo ($xz); ?>">今年爱情运势</a></TD>
    </tr>
    <tr>
        <TD class=new style="PADDING-BOTTOM: 1px" vAlign=top><span class="new" style="PADDING-BOTTOM: 1px">
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=1">牡羊座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=2">金牛座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=3">双子座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=4">巨蟹座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=5">狮子座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=6">处女座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=7">天秤座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=8">天蝎座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=9">射手座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=10">摩羯座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=11">水瓶座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=12">双鱼座</a>
        </span></TD>
    </tr>
    </TBODY>
</TABLE>

<?php if($yctype == 'today'): ?><table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>

            <?php if($xing != ''): ?><td colspan="6" class="ttop">

            <?php echo ($xing); echo ($ming); ?>(<?php echo ($nian1); ?>-<?php echo ($yue1); ?>-<?php echo ($ri1); ?>) 我的星座：<?php echo ($myxz); ?>


            当前星座：<?php echo ($rs["xzmc"]); ?>今日运程:</td><?php endif; ?>
    </tr>
    <tr>
        <td width="17%" rowspan="4" class="new"><img src="./Public/images/xz_<?php echo ($rs["id"]); ?>.gif" width="100" height="100"><br>
        </td>
        <td width="14%" rowspan="4" class="new"><span class="red"><?php echo ($rs["xzmc"]); ?><br>
            <?php echo ($rs["xzrq"]); ?></span></td>
        <td width="16%" bgcolor="e7e7e7" class="new">爱情运势:</td>
        <td width="24%" class="new"><img src="./Public/images/x_<?php echo ($rs["aqys"]); ?>.gif"></td>
        <td width="14%" bgcolor="e7e7e7" class="new">综合运势:</td>
        <td width="15%" class="new"><img src="./Public/images/x_<?php echo ($rs["zhys"]); ?>.gif"></td>
    </tr>
    <tr>
        <td bgcolor="e7e7e7" class="new">工作状况:</td>
        <td class="new"><img src="./Public/images/x_<?php echo ($rs["gzzk"]); ?>.gif"></td>
        <td bgcolor="e7e7e7" class="new">理财投资:</td>
        <td class="new"><img src="./Public/images/x_<?php echo ($rs["nctz"]); ?>.gif"></td>
    </tr>
    <tr>
        <td bgcolor="e7e7e7" class="new">健康指数:</td>
        <td class="new"><?php echo ($rs["jkzs"]); ?></td>
        <td bgcolor="e7e7e7" class="new">商谈指数:<br>    </td>
        <td class="new"><?php echo ($rs["stzs"]); ?></td>
    </tr>
    <tr>
        <td bgcolor="e7e7e7" class="new">幸运数字:</td>
        <td class="new"><?php echo ($rs["xysz"]); ?></td>
        <td bgcolor="e7e7e7" class="new">速配星座:</td>
        <td class="new"><?php echo ($rs["spxz"]); ?></td>
    </tr>
    <tr>
        <td colspan="6" class="new"><?php echo ($rs["zhpg"]); ?><div align="right"><br>
            有效日期：<?php echo ($rs["yxqx"]); ?></div></td>
    </tr>
    </tbody>
</table>
<?php elseif($yctype == 'nextday'): ?>
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>
        <?php if($xing != ''): ?><td colspan="6" class="ttop">
            <?php echo ($xing); echo ($ming); ?>
            (<?php echo ($nian1); ?>-<?php echo ($yue1); ?>-<?php echo ($ri1); ?>) 我的星座：<?php echo ($myxz); ?>
            当前星座：<?php echo ($rs["xzmc"]); ?>明日运程:
        </td><?php endif; ?>
    </tr>

    <tr>
        <td width="17%" rowspan="4" class="new"><img src="./Public/images/xz_<?php echo ($rs["id"]); ?>.gif" width="100" height="100"><br>
        </td>
        <td width="14%" rowspan="4" class="new"><span class="red"><?php echo ($rs["xzmc"]); ?><br>
            <?php echo ($rs["xzrq"]); ?></span></td>
        <td width="16%" bgcolor="e7e7e7" class="new">爱情运势:</td>
        <td width="24%" class="new"><img src="./Public/images/x_<?php echo ($rs["aqys"]); ?>.gif"></td>
        <td width="14%" bgcolor="e7e7e7" class="new">综合运势:</td>
        <td width="15%" class="new"><img src="./Public/images/x_<?php echo ($rs["zhys"]); ?>.gif"></td>
    </tr>
    <tr>
        <td bgcolor="e7e7e7" class="new">工作状况:</td>
        <td class="new"><img src="./Public/images/x_<?php echo ($rs["gzzk"]); ?>.gif"></td>
        <td bgcolor="e7e7e7" class="new">理财投资:</td>
        <td class="new"><img src="./Public/images/x_<?php echo ($rs["nctz"]); ?>.gif"></td>
    </tr>
    <tr>
        <td bgcolor="e7e7e7" class="new">健康指数:</td>
        <td class="new"><?php echo ($rs["jkzs"]); ?></td>
        <td bgcolor="e7e7e7" class="new">商谈指数:<br>    </td>
        <td class="new"><?php echo ($rs["stzs"]); ?></td>
    </tr>
    <tr>
        <td bgcolor="e7e7e7" class="new">幸运数字:</td>
        <td class="new"><?php echo ($rs["xysz"]); ?></td>
        <td bgcolor="e7e7e7" class="new">速配星座:</td>
        <td class="new"><?php echo ($rs["spxz"]); ?></td>
    </tr>
    <tr>
        <td colspan="6" class="new"><?php echo ($rs["zhpg"]); ?><div align="right"><br>
            有效日期：<?php echo ($rs["yxqx"]); ?></div></td>
    </tr>
    </tbody>

</table>
        <?php elseif($yctype == 'week'): ?>
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td class="ttop">
            <?php if($xing != ''): echo ($xing); echo ($ming); ?>(<?php echo ($nian1); ?>-<?php echo ($yue1); ?>-<?php echo ($ri1); ?>) 我的星座：<?php echo ($myxz); endif; ?>
            当前星座：<?php echo ($rs["xzmc"]); ?>本周运程</td>
    </tr>
    <tr>
        <td class="new">
            <table width="100%" border="0">
                <tr>
                    <td width="16%"><img src="./Public/images/xz_<?php echo ($rs["id"]); ?>.gif" width="100" height="100"></td>
                    <td width="20%" class="new">  <span class="red"> <?php echo ($rs["xzmc"]); ?><br>
                        <?php echo ($rs["xzrq"]); ?></span></td>
                    <td width="64%" class="new"><span class="red"><?php echo ($rs["title"]); ?>(<?php echo ($rs["yxqx"]); ?>)</span></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="new"><strong>整体运势</strong>:<img src="./Public/images/x_<?php echo ($rs["ztzs"]); ?>.gif"><BR>
            <?php echo ($rs["ztys"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>爱情运势</strong>:<br>
            有对象:<img src="./Public/images/x_<?php echo ($rs["aqzs1"]); ?>.gif"><BR>
            <?php echo ($rs["aqys1"]); ?><br>
            没对象:<img src="./Public/images/x_<?php echo ($rs["aqzs2"]); ?>.gif"><BR>
            <?php echo ($rs["aqys2"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>健康运势</strong>:<img src="./Public/images/x_<?php echo ($rs["jkzs"]); ?>.gif"><BR>
            <?php echo ($rs["jkys"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>工作学业运</strong>:<img src="./Public/images/x_<?php echo ($rs["gzzs"]); ?>.gif"><BR>
            <?php echo ($rs["gzys"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>性欲指数</strong>:<img src="./Public/images/x_<?php echo ($rs["xyzs"]); ?>.gif"><BR>
            <?php echo ($rs["xyys"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>红心日</strong>: <?php echo ($rs["hxri"]); ?><BR>
            <?php echo ($rs["hxsm"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>黑梅日</strong>: <?php echo ($rs["hmri"]); ?><BR>
            <?php echo ($rs["hmsm"]); ?></td>
    </tr>
    </tbody>
</table>
<?php elseif($yctype == 'month'): ?>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>
        <td class="ttop">
            <?php if($xing != ''): echo ($xing); echo ($ming); ?>(<?php echo ($nian1); ?>-<?php echo ($yue1); ?>-<?php echo ($ri1); ?>) 我的星座：<?php echo ($myxz); endif; ?>
            当前星座：<?php echo ($rs["xzmc"]); ?>本月运程</td>
    </tr>
    <tr>
        <td class="new">
            <table width="100%" border="0">
                <tr>
                    <td width="16%"><img src="./Public/images/xz_<?php echo ($rs["id"]); ?>.gif" width="100" height="100"></td>
                    <td width="20%" class="new">  <span class="red"> <?php echo ($rs["xzmc"]); ?><br>
                        <?php echo ($rs["xzrq"]); ?></span></td>
                    <td width="64%" class="new"><span class="red">有效日期:(<?php echo ($rs["yxqx"]); ?>)</span></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="new"><strong>整体运势</strong>:<img src="./Public/images/x_<?php echo ($rs["ztzs"]); ?>.gif"><BR>
            <?php echo ($rs["ztys"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>爱情运势</strong>:<img src="./Public/images/x_<?php echo ($rs["aqzs"]); ?>.gif"><BR>
            <?php echo ($rs["aqys"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>投资理财运</strong>:<img src="./Public/images/x_<?php echo ($rs["tzzs"]); ?>.gif"><BR>
            <?php echo ($rs["tzys"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>解压方式</strong>:<BR>
            <?php echo ($rs["jyfs"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>幸运物</strong>:<BR>
            <?php echo ($rs["xyw"]); ?></td>
    </tr>

    </tbody>
</table>
<?php elseif($yctype == 'year'): ?> >
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td class="ttop">
            <?php if($xing != ''): echo ($xing); echo ($ming); ?>(<?php echo ($nian1); ?>-<?php echo ($yue1); ?>-<?php echo ($ri1); ?>) 我的星座：<?php echo ($myxz); endif; ?>
            当前星座：<?php echo ($rs["xzmc"]); ?>今年运程</td>
    </tr>
    <tr>
        <td class="new"><table width="100%" border="0">
            <tr>
                <td width="16%"><img src="./Public/images/xz_<?php echo ($rs["id"]); ?>.gif" width="100" height="100"></td>
                <td width="18%" class="new"><span class="red"> <?php echo ($rs["xzmc"]); ?><br>
                    <?php echo ($rs["xzrq"]); ?></span></td>
                <td width="66%" class="new"><span class="red"><?php echo ($rs["title"]); ?>(<?php echo ($rs["yxqx"]); ?>)</span></td>
            </tr>
        </table></td>
    </tr>
    <tr>
        <td class="new"><strong>整体概况</strong>:<img src="./Public/images/x_<?php echo ($rs["ztzs"]); ?>.gif"><br>
            <?php echo ($rs["ztzk"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>功课学业</strong>:<img src="./Public/images/x_<?php echo ($rs["gkzs"]); ?>.gif"><br>
            <?php echo ($rs["gkxy"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>工作职场</strong>:<img src="./Public/images/x_<?php echo ($rs["gzzs"]); ?>.gif"><br>
            <?php echo ($rs["gzzc"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>金钱理财</strong>:<img src="./Public/images/x_<?php echo ($rs["jqzs"]); ?>.gif"><br>
            <?php echo ($rs["zqlc"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>恋爱婚姻</strong>:<img src="./Public/images/x_<?php echo ($rs["lazs"]); ?>.gif"><br>
            <?php echo ($rs["lzfy"]); ?></td>
    </tr>
    </tbody>
</table>
<?php elseif($yctype == 'yearlove'): ?>  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>
        <td class="ttop">
            <?php if($xing != ''): echo ($xing); echo ($ming); ?>(<?php echo ($nian1); ?>-<?php echo ($yue1); ?>-<?php echo ($ri1); ?>) 我的星座：<?php echo ($myxz); endif; ?>
            当前星座：<?php echo ($rs["xzmc"]); ?>今年爱情运势</td>
    </tr>
    <tr>
        <td class="new">
            <table width="100%" border="0">
                <tr>
                    <td width="16%"><img src="./Public/images/xz_<?php echo ($rs["id"]); ?>.gif" width="100" height="100"></td>
                    <td width="18%" class="new">  <span class="red"> <?php echo ($rs["xzmc"]); ?><br>
                        <?php echo ($rs["xzrq"]); ?></span></td>
                    <td width="66%" class="new"><span class="red">有效期限:(<?php echo ($rs["yxqx"]); ?>)</span></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="new"><strong>整体概况</strong>:<BR>
            <?php echo ($rs["ztzk"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
        <td class="new"><strong>女生篇</strong>:<BR>
            <?php echo ($rs["nv"]); ?>
            <hr noshade color="#CCCCCC"></td>
    </tr><tr>
        <td class="new"><strong>男生篇</strong>:<BR>
            <?php echo ($rs["nan"]); ?>
        </td>
    </tr>
    <tr>


    </tbody>
</table><?php endif; ?></div>
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