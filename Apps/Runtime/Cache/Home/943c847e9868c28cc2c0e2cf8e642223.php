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
<div id="foot" class="layout"></div>
</body>
</html>