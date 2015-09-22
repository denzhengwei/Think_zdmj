<?php
if($_SESSION['xing'] != ''){//如果没提交数据进入页面 默认第一人 为Session中的资料写入第一个人默认
    $xing=$_SESSION['xing'];
    $ming=$_SESSION['ming'];
    $xingbie=$_SESSION['xingbie'];
$this->assign('xingbie',$xingbie);
if (mb_substr($xing,1,1,'utf-8') <> ""){
    $xingtype=1;
}
$this->assign("xingtype",$xingtype);
}
var_dump($name);
if (isset($_POST["act"]) && $_POST["act"]=="ok") {
    //'处理用户信息;
/*   无用：  $tiange=0;
    $dige=0;
    $renge1=0;
    $renge2=0;
    $renge=0;
    //'姓;
    $bihua1=0;
    $bihua2=0;
   $xing1=mb_substr($xing,0,1,'utf-8');
    $xing11=mb_substr($xing,0,1,'utf-8');
    $bihua1=getnum($xing1);
    $tiange=$bihua1+1;
    $tiangee=$bihua1+1;
    $renge1=$bihua1;
    if (mb_substr($xing,1,1,'utf-8') <> "") {
        $xing2=mb_substr($xing,1,1,'utf-8');
        $xing22=mb_substr($xing,1,1,'utf-8');
        $bihua2=getnum($xing2);
        $tiange=$bihua1+$bihua2;
        $tiangee=$bihua1+$bihua2;
        $renge1=$bihua2 ;
        $this->assign('xing2',$xing2);
    }
    //'名;
    $bihua3=0;
    $bihua4=0;
    $ming1=mb_substr($ming,0,1,'utf-8');
    $ming11=mb_substr($ming,0,1,'utf-8');
    $bihua3=getnum($ming1);
    $dige = $bihua3+1;
    $digee = $bihua3+1;
    $renge2 = $bihua3;
    if (mb_substr($ming,1,1,'utf-8') <> "") {
        $ming2=mb_substr($ming,1,1,'utf-8');
        $ming22=mb_substr($ming,1,1,'utf-8');
        $bihua4=getnum($ming2);
        $dige = $bihua3 + $bihua4;
        $digee = $bihua3 + $bihua4;
    }
    $zhongge = $bihua1 + $bihua2 + $bihua3 + $bihua4;
    $zhonggee = $bihua1 + $bihua2 + $bihua3 + $bihua4;
    //'计算三才;
    $renge = $renge1 + $renge2;
    $rengee = $renge1 + $renge2;
    $waige = $zhongge - $renge;
    $waigee = $zhonggee - $rengee;
    if (mb_substr($xing,1,1,'utf-8') == "") {
        $waige = $waige +1;
        $waigee = $waigee+1;
    }
    if (mb_substr($ming,1,1) == "") {
        $waige = $waige +1;
        $waigee = $waigee+1;
    }
 */
    $name1=$_REQUEST['name1'];
    $name2=$_REQUEST['name2'];
    $xing1=$_REQUEST['xing1'];
    $xing2=$_REQUEST['xing2'];
    $sex1=$_REQUEST['sex1'];
    $sex2=$_REQUEST['sex2'];
    $tiange=0;
    $dige = 0;
    $renge1 = 0;
    $renge2 = 0;
    $renge = 0;
    $bihua1 = 0;
    $bihua2 = 0;
    $nxing1= mb_substr($name1,0,1,'utf-8');
    $nxing11=mb_substr($name1,0,1,'utf-8');
    $bihua1=getnum($nxing1);
    $tiange1=$bihua1+1;
    $tiangee1=$bihua1+1;
    $renge1=$bihua1;
    $rengee1=$bihua1;
    //'判断第一个名字 姓;//复姓
    if ($xing1 == "2") {
        $nxing2=mb_substr($name1,1,1,'utf-8');
        $nxing22=mb_substr($name1,1,1,'utf-8');
        $bihua2=getnum($nxing2);
        $tiange1=$bihua1+$bihua2;
        $tiangee1=$bihua1+$bihua2;
        $renge1=$bihua2;
        $rengee1=$bihua2;
        $bihua3 = 0;
        $bihua4 = 0;
        $nming1=mb_substr($name1,2,1,'utf-8');
        $nming12=mb_substr($name1,2,1,'utf-8');
        $bihua3=getnum($nming1);
        $dige1=$bihua3+1;
        $digee1=$bihua3+1;
        $renge2=$bihua3;
        $rengee2=$bihua3;
        if (mb_substr($name1,3,1,'utf-8') <> "") {
            $nming2=mb_substr($name1,3,1,'utf-8');
            $nming22=mb_substr($name1,3,1,'utf-8');
            $bihua4=getnum($nming2);
            $dige1=$bihua3+$bihua4;
            $digee1=$bihua3+$bihua4;
        }
    } else {
        $bihua3 = 0;;
        $bihua4 = 0;;
        $nming1=mb_substr($name1,1,1,'utf-8');
        $nming12=mb_substr($name1,1,1,'utf-8');
        $bihua3=getnum($nming1);
        $dige1=$bihua3+1;
        $digee1=$bihua3+1;
        $renge2=$bihua3;
        $rengee2=$bihua3;
        $waige1=$waige1+1;
        $waigee1=$waigee1+1;
        if (mb_substr($name1,2,1,'utf-8') <> "") {
            $nming2=mb_substr($name1,2,1,'utf-8');
            $nming22=mb_substr($name1,2,1,'utf-8');
            $bihua4=getnum($nming2);
            $dige1=$bihua3+$bihua4;
            $digee1=$bihua3+$bihua4;
        }
    }
    $zhongge1=$bihua1+$bihua2+$bihua3+$bihua4;
    $zhonggee1=$bihua1+$bihua2+$bihua3+$bihua4;
    $renge1=$renge1+$renge2;
    $rengee1=$rengee1+$rengee2;
    $waige1=$zhongge1-$renge1;
    $waigee1=$zhonggee1-$rengee1;
    if ($nxing2 == "") {
        $waige1=$waige1+1;
        $waigee1=$waigee1+1;
    }
    if ($nming2 == "") {
        $waige1=$waige1+1;
        $waigee1=$waigee1+1;
    }

    $this->assign('name1',  $name1);
    $this->assign('sex1', $sex1);
     $this->assign('nxing1', $nxing1);
     $this->assign('nxing11', $nxing11);
    $this->assign('bihua1', $bihua1);
    if ($nxing2<>"") {
        $this->assign('nxing2', $nxing2);
        $this->assign('bihua2',$bihua2);
         $this->assign('nxing22', $nxing22);
    }

     $this->assign('nming1', $nming1);
    $this->assign('nming12', $nming12);
     $this->assign('bihua3', $bihua3);

    if ($nming2<>"") {
        $this->assign('nming2', $nming2);
        $this->assign('nming22', $nming22);
      $this->assign('bihua4', $bihua4);
    }

     $this->assign('tiange1', $tiange1);

 /*    $sql="select * from `81` where num=?";
    $db->query($sql, array($tiangee1));
    $rs = $db->fetchArray(); */
     $rs=sancaism($tiangee1);//第一人天格吉凶
     $rs=$rs[0];
     $tgjx=$rs['jx'];

    $tgf1=getpf($tgjx);
    $this->assign('tgjx', $tgjx);
    $this->assign('renge1', $renge1);
   /*  $sql="select * from `81` where num=?";
    $db->query($sql, array($rengee1));
    $rs = $db->fetchArray(); */
    $rs=sancaism($rengee1);//第一人人格吉凶
    $rs=$rs[0];
    $rgjx=$rs['jx'];
    $rgf1=getpf($rgjx);
    $this->assign('rgjx', $rgjx);
    $this->assign('dige1', $dige1);

   /*  $sql="select * from `81` where num=?";
    $db->query($sql, array($digee1));
    $rs = $db->fetchArray(); */
    $rs=sancaism($digee1);//第一人地格吉凶欧
    $rs=$rs[0];
    $dgjx=$rs['jx'];

    $dgf1=getpf($dgjx);
    $this->assign('dgjx', $dgjx);
    $this->assign('waige1', $waige1);

   /*  $sql="select * from `81` where num=?";
    $db->query($sql, array($waigee1));
    $rs=$db->fetchArray(); */
    $rs=sancaism($waigee1);//第一人外格吉凶
    $rs=$rs[0];
    $wgjx=$rs['jx'];
    $wgf1=getpf($wgjx);
    $this->assign('wgjx',$wgjx);
    $this->assign('zhongge1', $zhongge1);
   /*  $sql="select * from `81` where num=?";
    $db->query($sql, array($zhonggee1));
    $rs=$db->fetchArray(); */
    $rs=sancaism($zhonggee1);//第一人总格吉凶欧
    $rs=$rs[0];
    $zgjx=$rs['jx'];

    $zgf1=getpf($zgjx);
    $this->assign('zgjx', $zgjx);

    $sancai1=getsancai($tiangee1) . getsancai($rengee1) . getsancai($digee1);//第一人的三才
   /*  $sqlsancai="select * from sancai where title=?";
    $db->query($sqlsancai, array($sancai1)); */
    $rs=sancaijx($sancai1);//根据三才算出第一人性格
    $rs=$rs[0];
    $xg1=$rs['xg'];
    $this->assign('xg1',$xg1);

/* 开始第二个人。。。。。。。。。。。。。。。。 */


    $name2=$_REQUEST['name2'];
    $xing1=$_REQUEST['xing1'];
    $xing2=$_REQUEST['xing2'];
    $sex1=$_REQUEST['sex1'];
    $sex2=$_REQUEST['sex2'];

    $ntiange = 0;
    $ndige = 0;
    $nrenge1 = 0;
    $nrenge2 = 0;
    $nrenge = 0;
    $nbihua1 = 0;
    $nbihua2 = 0;
    $n2xing1=mb_substr($name2,0,1,'utf-8');
    $n2xing11=mb_substr($name2,0,1,'utf-8');
    $nbihua1=getnum($n2xing1);
    $ntiange1=$nbihua1+1;
    $ntiangee1=$nbihua1+1;
    $nrenge1=$nbihua1;
    $nrengee1=$nbihua1;
    //'判断第一个名字 姓
    if ($xing2 == "2") {
        $n2xing2=mb_substr($name2,1,1,'utf-8');
        $n2xing22=mb_substr($name2,1,1,'utf-8');
        $nbihua2=getnum($n2xing2,'utf-8');
        $ntiange1=$nbihua1+$nbihua2;
        $ntiangee1=$nbihua1+$nbihua2;
        $nrenge1=$nbihua2;
        $nrengee1=$nbihua2;
        $nbihua3 = 0;
        $nbihua4 = 0;
        $n2ming1=mb_substr($name2,2,1,'utf-8');
        $n2ming12=mb_substr($name2,2,1,'utf-8');
        $nbihua3=getnum($n2ming1);
        $ndige1=$nbihua3+1;
        $ndigee1=$nbihua3+1;
        $nrenge2=$nbihua3;
        $nrengee2=$nbihua3;
        if (mb_substr($name2,3,1,'utf-8') <> "") {
            $n2ming2=mb_substr($name2,3,1,'utf-8');
            $n2ming22=mb_substr($name2,3,1,'utf-8');
            $nbihua4=getnum($n2ming2);
            $ndige1=$nbihua3+$nbihua4;
            $ndigee1=$nbihua3+$nbihua4;
        }
    } else {
        $nbihua3 = 0;
        $nbihua4 = 0;
        $n2ming1=mb_substr($name2,1,1,'utf-8');
        $n2ming12=mb_substr($name2,1,1,'utf-8');
        $nbihua3=getnum($n2ming1);
        $ndige1=$nbihua3+1;
        $ndigee1=$nbihua3+1;
        $nrenge2=$nbihua3;
        $nrengee2=$nbihua3;
        $nwaige1=$nwaige1+1;
        $nwaigee1=$nwaigee1+1;
        if (mb_substr($name2,2,1,'utf-8') <> "") {
            $n2ming2=substr($name2,4,2,'utf-8');
            $n2ming22=substr($name2,4,2,'utf-8');
            $nbihua4=getnum($n2ming2);
            $ndige1=$nbihua3+$nbihua4;
            $ndigee1=$nbihua3+$nbihua4;
        }
    }
    $nzhongge1=$nbihua1+$nbihua2+$nbihua3+$nbihua4;
    $nzhonggee1=$nbihua1+$nbihua2+$nbihua3+$nbihua4;
    $nrenge1=$nrenge1+$nrenge2;
    $nrengee1=$nrengee1+$nrengee2;
    $nwaige1=$nzhongge1-$nrenge1;
    $nwaigee1=$nzhonggee1-$nrengee1;
    if (isset($n2xing2) && $n2xing2 == "") {
        $nwaige1=$nwaige1+1;
        $nwaigee1=$nwaigee1+1;
    }
    if (isset($n2ming2) && $n2ming2 == "") {
        $nwaige1=$nwaige1+1;
        $nwaigee1=$nwaigee1+1;
    }

    $this->assign('name2', $name2);
    $this->assign('sex2', $sex2);
    $this->assign('n2xing1', $n2xing1);
    $this->assign('n2xing11', $n2xing11);
    $this->assign('nbihua1', $nbihua1);

    if ($n2xing2<>"") {
        $this->assign('n2xing2', $n2xing2);

        $this->assign('n2xing22', $n2xing22);
       $this->assign('nbihua2', $nbihua2);

    }

   $this->assign('n2ming1', $n2ming1);

    $this->assign('n2ming12', $n2ming12);
   $this->assign('nbihua3', $nbihua3);
    if (isset($n2ming2) && $n2ming2<>"") {
        $this->assign('n2ming2', $n2ming2);
        $this->assign('n2ming22', $n2ming22);
        $this->assign('nbihua4', $nbihua4);

    }

   $this->assign('ntiange1', $ntiange1);


    /* $sql="select * from `81` where num=?";
    $db->query($sql, array($ntiangee1));
    $rs=$db->fetchArray(); */
     $rs=sancaism($ntiangee1);
    $rs=$rs[0];

    $tgjx2=$rs['jx'];

    $tgf2=getpf($tgjx2);
    $this->assign('tgjx2', $tgjx2);
    $this->assign('nrenge1', $nrenge1);

  /*   $sql="select * from `81` where num=?";
    $db->query($sql, array($nrengee1));
    $rs=$db->fetchArray(); */
    $rs=sancaism($nrengee1);
    $rs=$rs[0];

    $rgjx2=$rs['jx'];

    $rgf2=getpf($rgjx2);
   $this->assign('rgjx2', $rgjx2);
    $this->assign('ndige1', $ndige1);


 /*    $sql="select * from `81` where num=?";
    $db->query($sql, array($ndigee1)); */
    $rs=sancaism($ndigee1);
    $rs=$rs[0];
/*     $rs=$db->fetchArray(); */
    $dgjx2=$rs['jx'];

    $dgf2=getpf($dgjx2);
    $this->assign('dgjx2', $dgjx2);
    $this->assign('nwaige1', $nwaige1);

   /*  $sql="select * from `81` where num=?";
    $db->query($sql, array($nwaigee1));
    $rs=$db->fetchArray(); */
    $rs=sancaism($nwaigee1);
    $rs=$rs[0];
    $wgjx2=$rs['jx'];
    $wgf2=getpf($wgjx2);
    $this->assign('wgjx2', $wgjx2);
    $this->assign('nzhongge1', $nzhongge1);

  /*   $sql="select * from `81` where num=?";
    $db->query($sql, array($nzhonggee1));
    $rs=$db->fetchArray(); */
    $rs=sancaism($nzhonggee1);
    $rs=$rs[0];
    $zgjx2=$rs['jx'];

    $zgf2=getpf($zgjx2);
    $this->assign('zgjx2', $zgjx2);

    $sancai1=getsancai($ntiangee1) . getsancai($nrengee1) . getsancai($ndigee1);//得到三才 天人地
   /*  $sqlsancai="select * from sancai where title=?";
    $db->query($sqlsancai, array($sancai1)); */
    $rs=sancaijx($sancai1);
    $rs=$rs[0];
    $xg2=$rs['xg'];
    $this->assign('xg2', $xg2);//性格分析


    $n1=abs($rgf1-$rgf2);
    $n2=abs($dgf1-$dgf2);
    $n3=abs($zgf1-$zgf2);
    $n4=abs($tgf1-$tgf2);
    $n5=abs($wgf1-$wgf2);
    $zf=($n1+$n2+$n3)+(($n4+$n5)/5);
    $zf=round(100-$zf);
    $this->assign('zf', $zf);
    if($zf<60)
    {
        $resault="你们的姓名五格可能不是太合，不过八字配合所起的作用更大，另外彼此的努力也会让你们改善关系，

    记住：事在人为！";
    }
    elseif ($zf<70 and $zf>=60) {
        $resault=" 你们的姓名五格相合程度马马虎虎，不过八字配合所起的作用更大，继续努力改善关系，会对你们的关系有帮助的！";
    }
   elseif ( $zf<80 and $zf>=70) {
       $resault="你们的姓名五格相合一般！";
   }
   elseif ( $zf<80 and $zf>=70){
       $resault="你们的姓名五格相合程度还不错哟！";
   }
   elseif ($zf<90 and $zf>=80) {
       $resault=" 你们的姓名五格相合程度相当棒！";
   }
   elseif ( $zf>=90) {
       $resault="  你们的姓名五格相合程度太棒了！！恭喜！";
   }
   $this->assign('resault',$resault);


}

$this->display('pd_xmwg');
?>
