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
<SCRIPT language=javascript>
    <!--
    function Check(theForm)
    {
        var name1 = theForm.name1.value;
        if (name1 == "")
        {
            alert("请输入您的姓名！");
            theForm.name1.value="";
            theForm.name1.focus();
            return false;
        }
        if (theForm.name1.value.length < 2 || theForm.name1.value.length>4)
        {
            alert("错误：名字应在2-4个字之间！");
            theForm.name1.focus();
            return (false);
        }
        if (name1.search(/[`1234567890-=\~!@#$%^&*()_+|<>;':",.?/ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz]/) != -1)
        {
            alert("请务必输入简体汉字！");
            theForm.name1.value = "";
            theForm.name1.focus();
            return false;
        }
        var name2 = theForm.name2.value;
        if (name2 == "")
        {
            alert("请输入您爱人的名字！");
            theForm.name2.value="";
            theForm.name2.focus();
            return false;
        }
        if (theForm.name2.value.length < 2 || theForm.name2.value.length>4)
        {
            alert("错误：名字应在2-4个字之间！");
            theForm.name2.focus();
            return (false);
        }
        if (name2.search(/[`1234567890-=\~!@#$%^&*()_+|<>;':",.?/ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz]/) != -1)
        {
            alert("请务必输入简体汉字！");
            theForm.name2.value = "";
            theForm.name2.focus();
            return false;
        }

    }

    //-->
</SCRIPT>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <?php echo ($wgjx); ?>
    <tbody><tr>
        <td width="81%" class="ttd">
            <span class="green">姓名五格配对评分:</span><br>
            根据《易经》的"象"、"数"理论，依据姓名的笔画数和一定规则建立起来天格、地格、人格、总格、外格等五格数理关系，并运用阴阳五行相生相克理论，来推算的各方面运势。 </td>
        <td width="19%" class="ttd"><img src="./Public/images/xmpd.jpg" width="105" height="140"></td>
    </tr>
    <form name="form1" onSubmit="return Check(this)" method="post" action="">
        <input type="hidden" name="act" value="ok" />
        <tr>
            <td colspan="2" class="new">
                请输入您的姓名：
                <input name="name1" type="text" id="name1" size="20"  onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="4">&nbsp;
                <select size="1" name="xing1">
                <?php if($xingtype == ''): ?><option value="1"selected="selected">单姓</option>
                    <option value="2">复姓</option>
                <?php else: ?>
                    <option value="2"selected="selected">复姓</option>
                    <option value="1">单姓</option><?php endif; ?>
            </select>&nbsp;
                <select size="1" name="sex1">
                <?php if($xingbie == '男'): ?><option value="男" selected="selected" >男性</option>
                    <option value="女"  >女性</option>
                    <?php else: ?>
                <option value="男" >男性</option>
                <option value="女" selected="selected" >女性</option><?php endif; ?>
            </select>
        <tr>
            <td colspan="2" class="new">输入另一个姓名:  <input name="name2" type="text" id="name2" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="4">&nbsp;<select size="1" name="xing2">
                <option value="1">单姓</option>
                <option value="2">复姓</option>
            </select>&nbsp;<select size="1" name="sex2">

                    <?php if( $xingbie == '男'): ?><option value="男" >男性</option>
                        <option value="女" selected="selected" >女性</option>
                        <?php else: ?>
                        <option value="男" selected="selected" >男性</option>
                        <option value="女"  >女性</option><?php endif; ?>
            </select>
                <input type="submit" name="Submit1" value="开始测试" style="cursor:hand;">
    </form>
    </tr></tbody>
</table>
<?php if(isset($_REQUEST['act']) and $_REQUEST['act'] == 'ok'): ?><table width="100%" border="0" cellpadding="2" cellspacing="1"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>
        <td colspan="3" class=new>姓名：<?php echo ($name1); ?>  性别：<?php echo ($sex1); ?>  </td>
    </tr>
    <tr>
        <td><table width="100%" border="0" cellpadding="2" cellspacing="1"  style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
            <tbody>
            <tr>
                <td></td>
                <td align="center"><font >繁体</font></td>
                <td align="center"><font >拼音</font></td>
                <td align="center"><font >笔划</font></td>
                <td align="center"><font >五行</font></td>
            </tr>
            <tr>
                <td  align="center" class="new2"><?php echo ($nxing1); ?></td>
                <td align="center" class="new2"><font ><?php echo (gbtobig($nxing1)); ?></font></td>
                <td align="center" class="new2"><font ><?php echo (pinyin($nxing11)); ?></font></td>
                <td align="center" class="new2"><?php echo ($bihua1); ?></td>
                <td align="center" class="new2"><?php echo (getzywh($nxing11)); ?></td>
            </tr>
            <?php if( $nxing2 != ''): ?><tr>
                <td align="center" class="new2"><?php echo ($nxing2); ?></td>
                <td align="center" class="new2"><font ><?php echo (gbtobig($nxing2)); ?></font></td>
                <td align="center" class="new2"><font ><?php echo (pinyin($nxing22)); ?></font></td>
                <td align="center" class="new2"><?php echo ($bihua2); ?></td>
                <td align="center" class="new2"><?php echo (getzywh($nxing22)); ?></td>
            </tr><?php endif; ?>
            <tr>
                <td align="center" class="new2"><?php echo ($nming1); ?></td>
                <td align="center" class="new2"><font ><?php echo (gbtobig($nming1)); ?></font></td>
                <td align="center" class="new2"><font ><?php echo (pinyin($nming12)); ?></font></td>
                <td align="center" class="new2"><?php echo ($bihua3); ?></td>
                <td align="center" class="new2"><?php echo (getzywh($nming12)); ?></td>
            </tr>
            <?php if($nming2 != '' ): ?><tr>
                <td align="center" class="new2"><?php echo ($nming2); ?></td>
                <td align="center" class="new2"><font > <?php echo (gbtobig($nming2)); ?></font></td>
                <td align="center" class="new2"><font ><?php echo (pinyin($nming22)); ?></font></td>
                <td align="center" class="new2"><?php echo ($bihua4); ?></td>
                <td align="center" class="new2"><?php echo (getzywh($nming22)); ?></td>
            </tr><?php endif; ?>
            </tbody>
        </table></td>
        <td width="25%" colspan="-3" align="center"  class="new2">天格-&gt;<?php echo ($tiange1); ?>(<?php echo (getsancai($tiange1)); ?>)
            ->(<font color=red><?php echo ($tgjx); ?></font>)<br />
            <p>人格-&gt; <?php echo ($renge1); ?> (<?php echo (getsancai($renge1)); ?>)
                ->(<font color=red><?php echo ($rgjx); ?></font>)</p><p>地格-&gt; <?php echo ($dige1); ?>(<?php echo (getsancai($dige1)); ?>)
                ->(<font color=red><?php echo ($dgjx); ?></font>)</p></td>
        <td width="25%"  class="new2" align="center">外格-&gt;<?php echo ($waige1); ?> (<?php echo (getsancai($waige1)); ?>)
            ->(<font color=red> <?php echo ($wgjx); ?> </font>)<br />
            <p>　</p>        <p>总格-&gt; <?php echo ($zhongge1); ?> (<?php echo (getsancai($zhongge1)); ?>)
                ->(<font color=red><?php echo ($zgjx); ?></font>)</p></td>
    </tr>
    <tr>
        <td colspan="3" class=new>姓名蕴含的个性分析：<?php echo ($xg1); ?></td>
    </tr>
    </tbody>
</table>

<table width="100%" border="0" cellpadding="2" cellspacing="1"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody> <tr>
        <td colspan="3" class=new>姓名：<?php echo ($name2); ?>  性别：<?php echo ($sex2); ?>  </td>
    </tr>
    <tr>
        <td><table width="100%" border="0" cellpadding="2" cellspacing="1"  style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
            <tbody>
            <tr>
                <td></td>
                <td align="center"><font >繁体</font></td>
                <td align="center"><font >拼音</font></td>
                <td align="center"><font >笔划</font></td>
                <td align="center"><font >五行</font></td>
            </tr>
            <tr>
                <td  align="center" class="new2"><?php echo ($n2xing1); ?></td>
                <td align="center" class="new2"><font ><?php echo (gbtobig($n2xing1)); ?></font></td>
                <td align="center" class="new2"><font ><?php echo (pinyin($n2xing11)); ?></font></td>
                <td align="center" class="new2"><?php echo ($nbihua1); ?></td>
                <td align="center" class="new2"><?php echo (getzywh($n2xing11)); ?></td>
            </tr>
            <tr>
                <?php if($n2xing2 != ''): ?><td align="center" class="new2"><?php echo ($n2xing2); ?></td>
                <td align="center" class="new2"><font ><?php echo (gbtobig($n2xing2)); ?></font></td>
                <td align="center" class="new2"><font ><?php echo (pinyin($n2xing22)); ?></font></td>
                <td align="center" class="new2"><?php echo ($nbihua2); ?></td>
                <td align="center" class="new2"><?php echo (getzywh($n2xing22)); ?></td><?php endif; ?>
            </tr>
            <tr>
                <td align="center" class="new2"><?php echo ($n2ming1); ?></td>
                <td align="center" class="new2"><font ><?php echo (gbtobig($n2ming1)); ?></font></td>
                <td align="center" class="new2"><font ><?php echo (pinyin($n2ming12)); ?></font></td>
                <td align="center" class="new2"><?php echo ($nbihua3); ?></td>
                <td align="center" class="new2"><?php echo (getzywh($n2ming12)); ?></td>
            </tr>
            <?php if($n2ming2 != ''): ?><tr>
                <td align="center" class="new2"><?php echo ($n2ming2); ?></td>
                <td align="center" class="new2"><font ><?php echo (gbtobig($n2ming2)); ?></font></td>
                <td align="center" class="new2"><font ><?php echo (pinyin($n2ming22)); ?></font></td>
                <td align="center" class="new2"><?php echo ($nbihua4); ?></td>
                <td align="center" class="new2"><?php echo (getzywh($n2ming22)); ?></td>
            </tr><?php endif; ?>
            </tbody>
        </table></td>
        <td width="25%" colspan="-3" align="center"  class="new2">天格-&gt; <?php echo ($ntiange1); ?> (<?php echo (getsancai($ntiange1)); ?>)
            ->(<font color=red><?php echo ($tgjx2); ?></font>)<br />
            <p>人格-&gt; <?php echo ($nrenge1); ?> (<?php echo (getsancai($nrenge1)); ?>)
                ->(<font color=red><?php echo ($rgjx2); ?></font>)</p>        <p>地格-&gt;<?php echo ($ndige1); ?>(<?php echo (getsancai($ndige1)); ?>)
                ->(<font color=red><?php echo ($dgjx2); ?></font>)</p></td>
        <td width="25%"  class="new2" align="center">外格-&gt; <?php echo ($nwaige1); ?>(<?php echo (getsancai($nwaige1)); ?>)
            ->(<font color=red><?php echo ($wgjx2); ?></font>)<br />
            <p>　</p>        <p>总格-&gt; <?php echo ($nzhongge1); ?> (<?php echo (getsancai($nzhongge1)); ?>)
                ->(<font color=red><?php echo ($zgjx2); ?></font>)</p></td>
    </tr>
    <tr>
        <td colspan="3" class=new>姓名蕴含的个性分析<?php echo ($xg2); ?></td>
    </tr>
    </tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD class=ttd>经过分析，[<?php echo ($name1); ?>]和[<?php echo ($name2); ?>]的姓名配对评分如下：</TD>
    </tr>      <tr>
        <TD class=new>姓名缘份指数：<span class="pf"><?php echo ($zf); ?></span></TD>
    </tr>  <tr>
        <TD class=new>
            <?php if($sex1 == $sex2): echo ($resault); ?>
            </font><?php endif; ?>
            <?php if($name1 == $name2): ?><br /><font color=#0000ff>^_^ 你们俩同名同姓嘛，真巧哟！</font><?php endif; ?>
        </TD>
    </tr>
    </TBODY>
</TABLE><?php endif; ?>

</div>
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