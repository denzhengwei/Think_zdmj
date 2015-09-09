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
       <li class="second_li">星座保健</li>
       <li class="second_li">星座EQ</li>
       <li class="second_li">星座IQ</li>
       <li class="second_li">星座名人</li>
       <li class="second_li">星座失败教训</li>
       <li class="second_li">星座实力</li>
       <li class="second_li">星座5大建议</li>
       <li class="second_li">星座运程</li>
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

<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td colspan="5" bgcolor="#FFFFFF"><table height='100%' width="100%" border="0" cellpadding="0" cellspacing="0"  style="border:1px 0 1px 0; table-layout:fixed;word-wrap:break-word;">
            <tbody>
            <tr>
                <td bgcolor="#FFFFFF"></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">繁体</font></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">拼音</font></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">康熙笔划</font></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">字意五行</font></td>
            </tr>
            <tr>
                <td  align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($xing1); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($xing1)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($xing1)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($xing1)); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($xing1)); ?></td>
            </tr>
            <tr>
                  <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($xing2); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($xing2)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($xing2)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($xing2 )); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($xing2)); ?></td>
            </tr><?/if}
            <tr>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($ming1); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($ming1)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($ming1)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($ming1 )); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($ming1)); ?></td>
            </tr>
          <tr>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($ming2); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($ming2)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($ming2)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($ming2 )); ?></td><td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($ming2)); ?></td>
            </tr><?/if}
            </tbody>
        </table></td>
        <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">天格-&gt; <?php echo ($tiange); ?> (<?php echo (getsancai($tiange)); ?>)<br />
            <p>人格-&gt; <?php echo ($renge); ?> (<?php echo (getsancai($renge)); ?>)</p>        <p>地格-&gt; <?php echo ($dige); ?> (<?php echo (getsancai($dige)); ?>)</p></td>
        <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">外格-&gt; <?php echo ($waige); ?> (<?php echo (getsancai($waige)); ?>)<br />
            <p>　</p>        <p>总格-&gt; <?php echo ($zhongge); ?> (<?php echo (getsancai($zhongge)); ?>)</p></td>
    </tr>
    </tbody>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD class=ttd><p><font color="#0000FF">天格<?php echo ($tiange); ?>的解析：</font><font color="#ff0000">天格数是先祖留传下来的，其数理对人影响不大。</font>
        </TD>
    </tr>
    <tr>
        <TD class=ttd>
            <?php echo ($tgyy); ?>&nbsp;<font color=red>(<?php echo ($tgjx); ?>)</font></TD>
    </tr> <tr>
        <TD class=ttd>→ 详细解释：
            <br />
            <?php echo ($tgxx); ?></TD>
    </tr>      <tr>
        <TD class=ttd><p><font color="#0000FF">人格<?php echo ($renge); ?>的解析：</font><font color="#ff0000">人格数又称主运，是整个姓名的中心点，影响人的一生命运。</font>
        </TD>
    </tr>
    <tr>
        <TD class=ttd>
            <?php echo ($rgyy); ?>&nbsp;<font color=red>(<?php echo ($rgjx); ?>)</font></TD>
    </tr> <tr>
        <TD class=ttd>→ 详细解释：
            <br />
            <?php echo ($rgxx); ?></TD>
    </tr>  <tr>
        <TD class=ttd><p><font color="#0000FF">地格<?php echo ($dige); ?>的解析：</font><font color="#ff0000">地格数又称前运，影响人中年（36岁）以前的活动力。</font>
        </TD>
    </tr>
    <tr>
        <TD class=ttd>
            <?php echo ($dgyy); ?>&nbsp;<font color=red>(<?php echo ($dgjx); ?>)</font></TD>
    </tr> <tr>
        <TD class=ttd>→ 详细解释：
            <br />
            <?php echo ($dgxx); ?></TD>
    </tr> <tr>
        <TD class=ttd><p><font color="#0000FF">总格<?php echo ($zhongge); ?>的解析：</font><font color="#ff0000">总格又称后运，影响人中年（36岁）以后的命运。</font>
        </TD>
    </tr>
    <tr>
        <TD class=ttd>
            <?php echo ($zgyy); ?>&nbsp;<font color=red>(<?php echo ($zgjx); ?>)</font></TD>
    </tr> <tr>
        <TD class=ttd>→ 详细解释：
            <br />
            <?php echo ($zgxx); ?></TD>
    </tr> <tr>
        <TD class=ttd><p><font color="#0000FF">外格<?php echo ($waige); ?>的解析：</font><font color="#ff0000">外格又称变格，影响人的社交能力、智慧等，其数理不用重点去看。</font>
        </TD>
    </tr>
    <tr>
        <TD class=ttd>
            <?php echo ($wgyy); ?>&nbsp;<font color=red>(<?php echo ($wgjx); ?>)</font></TD>
    </tr> <tr>
        <TD class=new>→ 详细解释：
            <br />
            <?php echo ($wgxx); ?></TD>
    </tr>
    </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD class=ttd>

            <font color="#0000FF">对三才数理的影响:</font> 您的姓名三才配置为：<font color="#ff0000"><?php echo ($sancai); ?></font>。它具有如下数理诱导力，据此会对人生产生一定的影响。</TD>
    </tr><tr><td class=ttd><?php echo ($scyy); ?> (<?$scjx})
    </td></tr><tr><td class=new><?php echo ($sancaicontent); ?>
    </td></tr>
    </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD width="24%" class=ttd>
            <font color="#0000FF">对基础运的影响:</font></TD>
        <TD width="76%" class=ttd><?php echo ($jcy); ?> <?$jcyjx}</TD>
    </tr><tr><td class=ttd>
        <font color="#0000FF">对成功运的影响:</font></td>
        <td class=ttd><?php echo ($cgy); ?> <?$cgyjx}</td>
    </tr>
    <tr><td class=ttd>
        <font color="#0000FF">对人际关系的影响:</font></td>
        <td class=ttd><?php echo ($rjgx); ?> <?php echo ($rjgxjx); ?></td>
    </tr><tr><td class=new>
        <font color="#0000FF">对性格的影响:</font></td>
        <td class=new><?php echo ($xg); ?></td>
    </tr>
    </TBODY>
</TABLE><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD width="24%" class=ttd>
            <font color="#0000FF">人格<?php echo ($renge); ?>有以下数理暗示:</font></TD>
        <TD width="76%" class=ttd><?php echo ($rgas); ?></TD>
    </tr><tr><td class=ttd>
        <font color="#0000FF">地格<?php echo ($dige); ?>有以下数理暗示:</font></td>
        <td class=ttd><?php echo ($dgas); ?></td>
    </tr>
    <tr><td class=ttd>
        <font color="#0000FF">总格<?php echo ($zhonggee); ?>有以下数理暗示:</font></td>
        <td class=ttd><?php echo ($zgas); ?></td>
    </tr><tr><td class=new>
        <font color="#0000FF">地格<?php echo ($waigee); ?>有以下数理暗示:</font></td>
        <td class=new><?php echo ($wgas); ?></td>
    </tr>
    </TBODY>
</TABLE><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>

        <TD width="67%" class=new>总评及建议：<br /><br />
            <?php if($xmdf < 60): ?>你的名字可能不是很好。强烈建议你换个名字试试，也许人生会因此而改变的。
            <?php elseif(($xmdf < 70) and ($xmdf >= 60)): ?>
            你的名字可能不太好，如果可能的话，不妨尝试改变一下，也许会有事半功倍之效。
            <?php elseif(($xmdf < 80) and ($xmdf >= 70 )): ?>你的名字可能不太理想，要想赢得成功，必须比别人付出更多的艰辛和汗水。如果有条件，改个名字也未尝不可。
            <?php elseif( ($xmdf < 80) and ($xmdf >= 70)): ?>你的名字一般。虽然人生路途中会遇到一些困难，但只要努力，还是会有很多收获的。如果有条件，改个名字也未尝不可。
            <?php elseif(($xmdf < 90) and ($xmdf >= 80) ): ?>
            你的名字取得不错，如果与命理搭配得当，相信它会助你一生顺利的，祝你好运！
            <?php elseif($xmdf >= 90): ?>
            你的名字取得非常棒，如果与命理搭配得当，成功与惊喜将会伴随你的一生。但千万注意不要失去上进心。<?php endif; ?>
            <br><br>
            姓名五格评分：</font><span class=pf><?php echo ($xmdf); ?>分</span> </TD>
    </tr>
    </TBODY>
</TABLE>
</div>
<div id="right" class="layout"></div>
</div>
<div id="foot" class="layout"></div>
</body>
</html>