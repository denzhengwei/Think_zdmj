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
    <li class="main_li"><a href="<?php echo U('home/cqczjm/index');?>" >抽签/测字/解梦</a></li>
    <div id="div_li3" >
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=1" >关帝神签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=2" >观音灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=3" >黄大仙灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=4" >吕祖灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=5" >天后灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=6" >诸葛神算</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=7" >周公解梦</a></li>
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
<table cellspacing="1" cellpadding="0" border="0" class="tablebgcolor4">
    <TBODY>
    <?php if(!isset($list) and !count($list)): ?><script>
        alert('没有找到相关解梦内容');window.close()</script>
    <?php else: ?>
    <TR class="tdbgcolor">
        <TD height="25" align="right" width="100%">
            共找到<FONT COLOR="#FF0000">
            <?php echo ($allshu); ?></FONT>
            个解梦结果，分为<font color="#FF0000">
            <?php echo ($mpage); ?></font>
            页，目前是第<font color="#FF0000">
            <?php echo ($currentPage); ?></font>
            页</TD>
    </TR>
    <TR class="tdbgcolor2">
        <TD>
            <div align="center">
                <table border="0" width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                    <?php if(is_array($list)): foreach($list as $i=>$vo): if($vo["content"] != ''): ?><tr>
                        <td style="line-height:200%">
                            <font color="green">
                              [  <?php echo ( $i+1);?>.<?php echo ($vo["jmlb"]); ?>]</font>
                            <font color="red">
                                （<?php echo ($vo["title"]); ?>）</font>
                            <br />
                       <?php echo ($vo["content"]); ?>
                        </td>
                    </tr><?php endif; endforeach; endif; ?>

                    </tbody>
                </table>
            </div>
            <hr size="1" color="#d2d0d0" />

            <!--分页开始-->
            <div align="center">
                <script>
                     PageCount=<?php echo ($mpage); ?> ;//总页数r
                     topage=<?php echo ($currentPage); ?> ;  //当前停留页
                    if (topage>1){document.write("<a href='index.php?g=home&m=cqczjm&a=index&sm=8&act=<?php echo $_REQUEST["act"] ?>&word=<?php echo $word ?>&page=<?php echo $currentPage-1 ?>' title='上一页'> 上一页</a>");}
                    for (var i=1; i <= PageCount; i++) {
                        if (i <= topage+6 && i >= topage-6 || i==1 || i==PageCount){
                            if (i > topage+7 || i < topage-5 && i!=1 && i!=2 ){document.write(" ... ");}
                            if (topage==i){document.write("<font color=#d2d0d0> "+ i +" </font> ");}
                            else{
                                document.write(" <a href='index.php?g=home&m=cqczjm&a=index&sm=8&act=<?php echo ($_REQUEST['act']); ?>&word=<?php echo ($word); ?>&page="+i+"'> ["+ i +"]</a> ");
                            }
                        }
                    }
                   if (PageCount-topage>=1){document.write("<a href='index.php?g=home&m=cqczjm&a=index&sm=8&act=<?php echo $_REQUEST["act"]?>&word=<?php echo $word ?>&page=<?php echo $currentPage+1 ?>' title='下一页'>下一页</a>");}
                </script>
            </div>
            <!--分页结束-->
        </TD>
    </TR><?php endif; ?>
    </TBODY>
</table>
<br />
<a href="javascript:window.close()">
    [关闭页面]</a>
</div>
<div id="right" class="layout"></div>
</div>
<div id="foot" class="layout"></div>
</body>
</html>