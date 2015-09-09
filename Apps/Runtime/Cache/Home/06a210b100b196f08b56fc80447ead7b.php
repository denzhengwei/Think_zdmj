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
       <li class="second_li">上辈为人</li>
       <li class="second_li">姓氏起源</li>
   </div>
   </div>
</ul>
<ul>
   <div id="div2"  class="menu">
    <li class="main_li">生肖/星座/血型</li>
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
<div id="mid" class="layout"></tbody>
</table>
<?else?>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody>    <tr>
        <td colspan="3" class=new bgcolor="#FFFFFF">姓名：<?php echo ($name1); ?>  性别：<?php echo ($sex1); ?>&nbsp;年<?php echo ($m1); ?>月<?php echo ($d1); ?>日<?php echo ($h1); ?>时<?php echo ($f1); ?>分</if>}</td>
    </tr>
    <tr>
        <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0"  style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
            <tbody>
            <tr>
                <td bgcolor="#FFFFFF"></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">繁体</font></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">拼音</font></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">笔划</font></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">五行</font></td>
            </tr>
            <tr>
                <td  align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($nxing1); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($nxing1)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($bihua1); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nxing11)); ?></td>
            </tr>
            <tr>
                <?if ($nxing2<>'' ) ?>   <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($nxing2); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($nxing2)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (c($nxing22)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($bihua2); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nxing22)); ?></td>
            </tr><?/if?>
            <tr>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($nming1); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($nming1)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (c($nming12)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($bihua3); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nming12)); ?></td>
            </tr>
            <?if ($nming2<>'' )?><tr>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($nming2); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($nming2)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (c($nming22)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($bihua4); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nming22)); ?></td>
            </tr><?/if?>
            </tbody>
        </table></td>
        <td width="25%" colspan="-3" align="center" bgcolor="#FFFFFF"  class="new2">天格-&gt; <?$tiange1?> (<?$tiange1|getsancai?>)  ->(<font color=red><?$tgjx?></font>)<br />
            <p>人格-&gt; <?$renge1?> (<?$renge1|getsancai?>) ->(<font color=red><?$rgjx?></font>)</p>        <p>地格-&gt; <?$dige1?> (<?$dige1|getsancai?>) ->(<font color=red><?$dgjx?></font>)</p></td>
        <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">外格-&gt; <?$waige1?> (<?$waige1|getsancai?>) ->(<font color=red><?$wgjx?></font>)<br />
            <p>　</p>        <p>总格-&gt; <?$zhongge1?> (<?$zhongge1|getsancai?>) ->(<font color=red><?$zgjx?></font>)</p></td>
    </tr>
    <tr>
        <td colspan="3" class=new bgcolor="#FFFFFF">姓名蕴含的个性分析：<?$xg1?></td>
    </tr>
    </tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody> <tr>
        <td colspan="3" class=new bgcolor="#FFFFFF">姓名：<?$name2?>  性别：<?$sex2?> &nbsp;<?if ($fs==1)?>生日:<?$y2?>年<?$m2?>月<?$d2?>日<?$h2?>时<?$f2?>分<?/if?></td>
    </tr>
    <tr>
        <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0"  style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
            <tbody>
            <tr>
                <td bgcolor="#FFFFFF"></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">繁体</font></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">拼音</font></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">笔划</font></td>
                <td align="center" bgcolor="#FFFFFF"><font color="ababab">五行</font></td>
            </tr>
            <tr>
                <td  align="center" bgcolor="#FFFFFF" class="new2"><?$n2xing1?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2xing1|GbToBig?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2xing11|truncate2|c?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?$nbihua1?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2xing11|getzywh?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2xing22|getzywh?></td>
            </tr><?/if?>
            </tr>
            <tr>
                <?if ($n2xing2<>'' ) ?>   <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2xing2?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2xing2|GbToBig?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2xing22|c?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?$nbihua2?></td>
            <tr>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2ming1?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2ming1|GbToBig?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2ming12|c?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?$nbihua3?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2ming12|getzywh?></td>
            </tr>
            <?if ($n2ming2<>'' )?><tr>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2ming2?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2ming2|GbToBig?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2ming22|c?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?$nbihua4?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2ming22|getzywh?></td>
            </tr><?/if?>
            </tbody>
        </table></td>
        <td width="25%" colspan="-3" align="center" bgcolor="#FFFFFF"  class="new2">天格-&gt; <?$ntiange1?> (<?$ntiange1|getsancai?>)
            ->(<font color=red><?$ntgjx?></font>)<br />
            <p>人格-&gt; <?$nrenge1?> (<?$nrenge1|getsancai?>)
                ->(<font color=red><?$nrgjx?></font>)</p>        <p>地格-&gt; <?$ndige1?> (<?$ndige1|getsancai?>)
                ->(<font color=red><?$ndgjx?></font>)</p></td>
        <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">外格-&gt; <?$nwaige1?> (<?$nwaige1|getsancai?>)
            ->(<font color=red><?$nwgjx?></font>)<br />
            <p>　</p>        <p>总格-&gt; <?$nzhongge1?> (<?$nzhongge1|getsancai?>)
                ->(<font color=red><?$nzgjx?></font>)</p></td>
    </tr>
    <tr>
        <td colspan="3" class=new bgcolor="#FFFFFF">姓名蕴含的个性分析：<?$xg2?></td>
    </tr>
    </tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD class=ttd>经过分析，[<?$name1?>]和[<?$name2?>]的姓名配对评分如下：</TD>
    </tr>      <tr>
        <TD class=new><span class="red">姓名缘份指数：<?$zf?></span></TD>
    </tr>  <tr>
        <TD class=new><?if ($sex1==$sex2)?><font color=red>本站是按中国民俗学的一些测算方法来计算的，暂时不支持同性缘份的测试</font><?else?><font color=green>
            <?if ($zf<60)?>你们的姓名五格可能不是太合，不过八字配合所起的作用更大，另外彼此的努力也会让你们改善关系，记住：事在人为！
            
            你们的姓名五格相合程度马马虎虎，不过八字配合所起的作用更大，继续努力改善关系，会对你们的关系有帮助的！
            <?elseif ($zf<80 and $zf>=70)?>你们的姓名五格相合一般！
            <?elseif ($zf<80 and $zf>=70)?>你们的姓名五格相合程度还不错哟！
            <?elseif ($zf<90 and $zf>=80)?>
            你们的姓名五格相合程度相当棒！
            <?elseif ($zf>=90)?>
            你们的姓名五格相合程度太棒了！！恭喜！</font><?if ($name1==$name2)?><br /><font color=#0000ff>^_^ 你们俩同名同姓嘛，真巧哟！</font> <?/if?><?/if?>
            <?/if?></TD>
    </tr>
    </TBODY>
</TABLE>
<?/if?></div>
<div id="right" class="layout"></div>
</div>
<div id="foot" class="layout"></div>
</body>
</html>