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
<div id="head" class="layout"></div>
<div id="bodydiv" class="layout">
<div id="left" class="layout"><ul> <div id="div1" class="menu">
    <li class="main_li" ><a href="<?php echo U('home/ctsm/index');?>">传统算命</a></li>
            <div id="div_li1">
       <li class="second_li"><a  href="<?php echo U('home/ctsm/scbz');?>">生辰八字</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/bzcs');?>">八字测算</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/rglm');?>">日干论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/cglm');?>"> 称骨论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmcs');?>">姓名测试</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmpd');?>">姓命配对</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/sbwr');?>">上辈为人</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xsqy');?>">姓氏起源</a></li>
   </div>
   </div>
</ul>
<ul>
   <div id="div2"  class="menu">
    <li class="main_li"><a href="<?php echo U('home/sxxzxx/index');?>"> 生肖/星座/血型</a></li>
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
      </div>
</ul>
<ul>
       <div id="div3"  class="menu">
    <li class="main_li">抽签/测字/解梦</li>
    <div id="div_li3" >
       <li class="second_li">关帝神签</li>
       <li class="second_li">观音灵签</li>
       <li class="second_li">黄大仙灵签</li>
       <li class="second_li">吕祖灵签</li>
       <li class="second_li">天后灵签</li>
       <li class="second_li">诸葛神算</li>
       <li class="second_li">周公解梦</li>
      </div>
          </div>
</ul>
<ul>
   <div class="menu">
    <li class="main_li">婚姻系数</li>
      </div>
</ul>
<ul>
       <div id="div4"  class="menu" >
    <li class="main_li">恋爱指南</li>
   <div id="div_li4">
       <li class="second_li">星座组合</li>
       <li class="second_li">姓名配对</li>
       <li class="second_li">QQ缘分</li>
       <li class="second_li">生肖血型</li>
       <li class="second_li">姓名五格</li>
      </div>
          </div>
</ul>
<ul>
   <div id="div5"  class="menu" >
    <li class="main_li">民俗预测</li>
   <div id="div_li5">
       <li class="second_li">耳鸣</li>
       <li class="second_li">面热</li>
       <li class="second_li">面热</li>
       <li class="second_li">眼跳</li>
       <li class="second_li">心惊</li>
       <li class="second_li">黄道吉日</li>
       <li class="second_li">QQ/手机号码吉凶</li>
       <li class="second_li" >三世财运</li>
       <li class="second_li">生男生女</li>
       <li class="second_li">指纹</li>
      </div>
      </div>
  </ul></div>
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
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=yearlove&xz=<?php echo ($xz); ?>">今年爱情运势</a>) </TD>
    </tr>
    <tr>
        <TD class=new style="PADDING-BOTTOM: 1px" vAlign=top><span class="new" style="PADDING-BOTTOM: 1px">·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=1">牡羊座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=2">金牛座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=3">双子座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=4">巨蟹座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=5">狮子座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=6">处女座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=7">天秤座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=8">天蝎座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=9">射手座</a>·
            <a href="index.php?g=home&m=sxxzxx&a=xzyc&type=<?php echo ($yctype); ?>&xz=10">魔羯座</a>·
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
        <?php if( $xing == ''): ?><td colspan="6" class="ttop">
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
            <?php if($xing == ''): echo ($xing); echo ($ming); ?>(<?php echo ($nian1); ?>-<?php echo ($yue1); ?>-<?php echo ($ri1); ?>) 我的星座：<?php echo ($myxz); endif; ?>
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
            <?php if($xing == ''): echo ($xing); echo ($ming); ?>(<?php echo ($nian1); ?>-<?php echo ($yue1); ?>-<?php echo ($ri1); ?>) 我的星座：<?php echo ($myxz); endif; ?>
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
<div id="foot" class="layout"></div>
</body>
</html>