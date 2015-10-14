<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>1</title>
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
<div id="topmenu" class="layout">
<table id="top_menu" align="center">
    <tr>
        <td class="top" id="top_menu_main"><a href="<?php echo U('home/index/index');?>">网站首页</a></td>
        <td class="top" id="top_menu_1"><a href="<?php echo U('home/ctsm/index');?>">传统算命</a></td>
        <td class="top" id="top_menu_2"><a href="<?php echo U('home/sxxzxx/index');?>"> 生肖/星座/血型</a></td>
        <td class="top" id="top_menu_3"><a href="<?php echo U('home/cqczjm/index');?>" >抽签/测字/解梦</a></td>
        <td class="top" id="top_menu_4"><a href="<?php echo U('home/qinglv/index');?>" >恋爱指南</a></td>
        <td class="top" id="top_menu_5"><a href=" <?php echo U('home/yuce/index');?>">民俗预测</a></td>
        <td class="top" id="top_menu_x"><a href="index.php?g=home&m=yuce&a=index&sm=6">黄道吉日</a></td>
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
    $(document).ready(function(){
        $('#jieguo').hide();
    })

$('#ajax_post').click(function () {
            $.post();

            return false ;
        }
)
    $('#ajax_post').click(function () {
                $('#jieguo').show();
            }

    )


</SCRIPT>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <form name="form1" method="post" onSubmit="return Check(this)"  action=""> <tr>
        <td class=new bgcolor="#FFFFFF">配对测试 <input name="fs" type="radio" onClick="javacript:document.getElementById('fs11').style.display='none';document.getElementById('fs21').style.display='none';" value="0" checked="" />不测试八字相合程度　<input type="radio" name="fs" value="1" onClick="javacript:document.getElementById('fs11').style.display='block';document.getElementById('fs21').style.display='block';" />同时测试八字相合程度

    </tr>  <tr>
        <td class=new bgcolor="#FFFFFF"><strong>请输入第一个姓名：</strong>
            <input name="name1" type="text" id="name1" value="<?php echo ($xing1); echo ($xing11); echo ($ming1); echo ($ming11); ?>" />
            &nbsp;
            <select size="1" name="xing1">
                <option value="1" <?php if($xing2 == false): ?>selected="selected"<?php endif; ?>>单姓</option>
                <option value="2" <?php if($xing2 != '' ): ?>selected="selected"<?php endif; ?>>复姓</option>
            </select>
            &nbsp;
            <select size="1" name="sex1" id="sex1">
                <option value="男"> <?php if($xingbi == '男'): ?>selected="selected"<?php endif; ?>男性</option>
                <option value="女"><?php if($xingbie == '女'): ?>selected="selected"<?php endif; ?>女性</option>
            </select><br /><br /><div id="fs11" style="display:none">
                <div class="divh2"></div>公历/阳历生日：
                <select size="1" name="y1">
                {<?php if(is_array($years)): $k = 0; $__LIST__ = $years;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>}
            </select>年
                <select name="m1" size="1">
                    <?php if(is_array($months)): $i = 0; $__LIST__ = $months;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>月
                <select name="d1" size="1">
                    <?php if(is_array($days)): $i = 0; $__LIST__ = $days;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>日
                    <select size="1" name="h1"> <?php if(is_array($hours)): $i = 0; $__LIST__ = $hours;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>点
                    <select size="1" name="f1"><option value="0">未知</option>
                        <?php if(is_array($mins)): $i = 0; $__LIST__ = $mins;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>分
                    &nbsp;<a title="如果您只知道生日的农历日期，不要紧，请点这里去查询公历日期" style="CURSOR: hand" onClick="window.open('wannianli.htm','httpcnnongli','left=0,top=0,width=680,height=480,scrollbars=no,resizable=no,status=no')" href="#wnl1"><font color="#008000">只知道农历生日请点此查询公历</font></a>
                <hr size="1">
            </div><br /><strong>请输入第二个姓名：</strong>
            <input type="text" name="name2" />
            &nbsp;
            <select size="1" name="xing2">
                <option value="1">单姓</option>
                <option value="2">复姓</option>
            </select>
            &nbsp;
            <select size="1" name="sex2">
                <option value="男" <?php if($xingbie == "女"): ?>selected="selected"<?php endif; ?>>男性</option>
                <option value="女" <?php if($xingbie == "男"): ?>selected="selected"<?php endif; ?>>女性</option>
            </select><input type="hidden" name="act" value="ok" /><br /><br /><div id="fs21" style="display:none">
                公历/阳历生日：
                <select size="1" name="y2">
                    {<?php if(is_array($years)): $k = 0; $__LIST__ = $years;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>}
                </select>年
                <select name="m2" size="1">
                    <?php if(is_array($months)): $i = 0; $__LIST__ = $months;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>月
                <select name="d2" size="1">
                    <?php if(is_array($days)): $i = 0; $__LIST__ = $days;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>日
                <select size="1" name="h2"> <?php if(is_array($hours)): $i = 0; $__LIST__ = $hours;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>点
                <select size="1" name="f2"><option value="0">未知</option>
                    <?php if(is_array($mins)): $i = 0; $__LIST__ = $mins;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>分

                &nbsp;<a title="如果您只知道生日的农历日期，不要紧，请点这里去查询公历日期" style="CURSOR: hand" onClick="window.open('wannianli.htm','httpcnnongli','left=0,top=0,width=680,height=480,scrollbars=no,resizable=no,status=no')" href="#wnl1"><font color="#008000">只知道农历生日请点此查询公历</font></a>
                <hr size="1">
            </div>
           <!-- <input type="submit" value="开始测试" style="cursor:hand;" />-->
            <button id="ajax_post">开始测试1</button>
        </td>
    </tr> </form>
</table>

<?php if($message == 2): ?><table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>
        <td colspan="3" class=new bgcolor="#FFFFFF">姓名：<?php echo ($name1); ?>  性别：<?php echo ($sex1); ?>&nbsp;
            <?php if($fs == 1): ?>生日:<?php echo ($y1); ?>年<?php echo ($m1); ?>月<?php echo ($d1); ?>日<?php echo ($h1); ?>时<?php echo ($f1); ?>分<?php endif; ?></td>
    </tr>
    <tr>
        <td bgcolor="#FFFFFF">
            <table width="100%" border="0" cellpadding="0" cellspacing="0"  style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
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
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($nxing1)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($nxing1)); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nxing1)); ?></td>
            </tr>
           <?php if($nxing2 != ''): ?><tr>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($nxing2); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($nxing2)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($nxing2)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($nxing2 )); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nxing2)); ?></td>

            </tr><?php endif; ?>
            <tr>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($nming1); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($nming1)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($nming1)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($nming1 )); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nming1)); ?></td>
            </tr>
            <?php if($nming2 != ''): ?><tr>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($nming2); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($nming2)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($nming2)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($nming2 )); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nming2)); ?></td>
            </tr><?php endif; ?>
            </tbody>
        </table></td>

        <td width="25%" colspan="-3" align="center" bgcolor="#FFFFFF"  class="new2">天格-&gt; <?php echo ($tiange1); ?> (<?php echo (getsancai($tiange1)); ?>)  ->(<font color=red><?php echo ($tgjx); ?></font>)<br />
            <p>人格-&gt; <?php echo ($renge1); ?> (<?php echo (getsancai($renge1)); ?>) ->(<font color=red><?php echo ($rgjx); ?></font>)</p>        <p>地格-&gt; <?php echo ($dige1); ?> (<?php echo (getsancai($dige1)); ?>) ->(<font color=red><?php echo ($dgjx); ?></font>)</p></td>
        <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">外格-&gt; <?php echo ($waige1); ?> (<?php echo (getsancai($waige1)); ?>) ->(<font color=red><?php echo ($wgjx); ?></font>)<br />
            <p>　</p>        <p>总格-&gt; <?php echo ($zhongge1); ?>> (<?php echo (getsancai($zhongge1)); ?>) ->(<font color=red><?php echo ($zgjx); ?></font>)</p></td>
    </tr>
    <tr>
        <td colspan="3" class=new bgcolor="#FFFFFF">姓名蕴含的个性分析：<?php echo ($xg1); ?></td>
    </tr>
    </tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody > <tr>
        <td colspan="3" class=new bgcolor="#FFFFFF">姓名：<?php echo ($name2); ?>  性别：<?php echo ($sex2); ?> &nbsp;
            <?php if($fs == 1): ?>生日:<?php echo ($y2); ?>年<?php echo ($m2); ?>月<?php echo ($d2); ?>日<?php echo ($h2); ?>时<?php echo ($f2); ?>分<?php endif; ?></td>
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
                <td  align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($nxing11); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($nxing11)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($nxing11)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($nxing11 )); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nxing11)); ?></td>

            </tr>

            <?php if($nxing12 != ''): ?><tr>
                  <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($nxing12); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($nxing12)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($nxing12)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($nxing12)); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nxing12)); ?></td>
            </tr><?php endif; ?>
            <tr>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($nming11); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($nming11)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($nming11)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($nming11)); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nming11)); ?></td>
            </tr>
           <?php if($nming12 != '' ): ?><tr>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ($nming12); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (gbtobig($nming12)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo (pinyin($nming12)); ?></font></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getnum($nming12)); ?></td>
                <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo (getzywh($nming12)); ?></td>
            </tr><?php endif; ?>
            </tbody>
        </table></td>
        <td width="25%" colspan="-3" align="center" bgcolor="#FFFFFF"  class="new2">天格-&gt; <?php echo ($ntiange1); ?> (<?php echo (getsancai($ntiange1)); ?>)
            ->(<font color=red><?php echo ($ntgjx); ?></font>)<br />
            <p>人格-&gt; <?php echo ($nrenge1); ?> (<?php echo (getsancai($nrenge1)); ?>)
                ->(<font color=red><?php echo ($nrgjx); ?></font>)</p>        <p>地格-&gt; <?php echo ($ndige1); ?> (<?php echo (getsancai($ndige1)); ?>)
                ->(<font color=red><?php echo ($ndgjx); ?></font>)</p></td>
        <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">外格-&gt; <?php echo ($nwaige1); ?>(<?php echo (getsancai($nwaige1)); ?>)
            ->(<font color=red><?php echo ($nwgjx); ?></font>)<br />
            <p>　</p>        <p>总格-&gt; <?php echo ($nzhongge1); ?> (<?php echo (getsancai($nzhongge1)); ?>)
                ->(<font color=red><?php echo ($nzgjx); ?></font>)</p></td>
    </tr>
    <tr>
        <td colspan="3" class=new bgcolor="#FFFFFF">姓名蕴含的个性分析：<?php echo ($xg2); ?></td>
    </tr>
    </tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD class=ttd>经过分析，[<?php echo ($name1); ?>]和[<?php echo ($name2); ?>]的姓名配对评分如下：</TD>
    </tr>      <tr>
        <TD class=new><span class="red">姓名缘份指数：<?php echo ($zf); ?></span></TD>
    </tr>  <tr>
        <TD class=new>
          <font color=red><?php echo ($checksex); ?></font>
            <font color=green>
                <?php echo ($zdjg); ?>
            </font>

            <?php if( $name1 == $name2 ): ?><br /><font color=#0000ff>^_^ 你们俩同名同姓嘛，真巧哟！</font><?php endif; ?>
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