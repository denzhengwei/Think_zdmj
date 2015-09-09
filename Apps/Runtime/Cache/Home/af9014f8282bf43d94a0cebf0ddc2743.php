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
<script language="JavaScript">
    <!--
    function checkbz()
    {
        var year=document.theform.y.value;
        var month=document.theform.m.value;
        var day=document.theform.d.value;
        var hour=document.theform.hh.value;
        var now=new Date();
        var nowyear=now.getUTCFullYear ();
        var nowmonth=now.getMonth();

        if (year=='')
        {
            alert('请选择出生年份！');
            document.theform.y.focus()
            return false;
        }
        if (year>nowyear || year <=nowyear-100 || isNaN(year))
        {
            alert('请选择正确的出生年份！');
            document.theform.y.focus()
            return false;
        }
        if ( month=='')
        {
            alert('请选择出生月份！');
            document.theform.m.focus()
            return false;
        }
        if (day=='')
        {
            alert('请选择出生日期！');
            document.theform.d.focus()
            return false;
        }
        if ((month==2 && day>29) || ((month==1 || month==3 || month==5 || month==7 || month==8 || month==10|| month==12) && day>31) || ((month==4 || month==6 || month==9 || month==11 ) && day>30))
        {
            alert('请选择正确的出生日期！');
            document.theform.d.focus()
            return false;
        }
        if ( hour=='')
        {
            alert('请选择出生时间！');
            document.theform.hh.focus()
            return false;
        }

        var b=document.theform.b.value;
        if (b=='')
        {
            alert('请选择您的性别！');
            document.theform.b.focus()
            return false;
        }
        var name=document.theform.name.value;
        if (name=='')
        {
            alert('请输入您的姓名！');
            document.theform.name.focus()
            return false;
        }
        if (document.theform.name.value.length < 2 || document.theform.name.value.length>5)
        {
            alert("错误：姓名应在2-5个字之间！");
            document.theform.name.focus();
            return (false);
        }
    }
    //-->

</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD class=ttd style="PADDING-BOTTOM: 8px" vAlign=top>* 本测算来源于民间，仅供娱乐！
        </TD>
    </tr>

    <tr>
        <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top><p>亲爱的<?php echo ($name); ?>：</p>
            <p> 您出生于<?php echo ($y); ?>年<?php echo ($m); ?>月<?php echo ($d); ?>日，今年<?php echo ($yearsOld); ?>岁（以下资料仅供参考）：</p>
            <p> 测测你上辈子是什么人：根据您的公元出生年月日，经过电脑计算，结果为<?php echo ($sbnum3); ?>，表示你上辈子是<font color=#ff0000><?php echo ($intro); ?>
            </font><br /><br /><font color=#0000ff>[他人测试]</font></p>
            <form method="POST" action="" onSubmit="return checkbz();" name="theform">   <tr>
                <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top><strong>公历生日：</strong>
                    <select name="y" size="1" style="font-size: 9pt">
                        <?php if(is_array($years)): $k = 0; $__LIST__ = $years;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>年
                    <select size="1" name="m" style="font-size: 9pt">
                        <?php if(is_array($months)): $i = 0; $__LIST__ = $months;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>月
                    <select size="1" name="d" style="font-size: 9pt">
                        <?php if(is_array($days)): $i = 0; $__LIST__ = $days;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>日
                    <select size="1" name="hh" style="font-size: 9pt">
                        <?php if(is_array($hours)): $i = 0; $__LIST__ = $hours;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>点
                    <select size="1" name="fen" style="font-size: 9pt">
                        <option value="0">未知</option>
                        <?php if(is_array($mins)): $i = 0; $__LIST__ = $mins;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo); ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>分
                </TD>
            </tr>  <tr>
                <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top><strong>姓名：</strong>
                    <input onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" name="name" type="text"  />
                    &nbsp;
                    <select size="1" name="b">
                        <option value="男" >男性</option>
                        <option value="女" >女性</option>
                    </select>&nbsp;<input type="hidden" name="act" value="ok" /><input name="cs" type="submit" value="开始测试" />
                </TD>
            </tr></form>
        </TD>
    </tr>
    </TBODY>
</TABLE>


</div>
<div id="right" class="layout"></div>
</div>
<div id="foot" class="layout"></div>
</body>
</html>