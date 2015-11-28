<?php
if (isset($_REQUEST['act']) && $_REQUEST['act']=="ok") {
    $strname1=$_REQUEST['name1'];
    $str1=mb_substr($strname1,0,1);
    $str2=mb_substr($strname1,1,1);
    $str3=mb_substr($strname1,2,1);
    $str4=mb_substr($strname1,3,1);
    $bihua1=getnum($str1);
    $bihua2=getnum($str2);
    $bihua3=getnum($str3);
    $bihua4=getnum($str4);
    $bihuaname1=$bihua1 + $bihua2 + $bihua3 + $bihua4;


    $strname2=$_REQUEST['name2'];
    $sstr1=mb_substr($strname2,0,1);
    $sstr2=mb_substr($strname2,1,1);
    $sstr3=mb_substr($strname2,2,1);
    $sstr4=mb_substr($strname2,3,1);
    $sbihua1=getnum($sstr1);
    $sbihua2=getnum($sstr2);
    $sbihua3=getnum($sstr3);
    $sbihua4=getnum($sstr4);
    $bihuaname2=$sbihua1 + $sbihua2 + $sbihua3 + $sbihua4;
    $bihuac=$bihuaname1 + $bihuaname2;

    //'计算
    $user=M('qlpdbh');
    $rs=$user->where(array('bihua'=>$bihuac))->select();
  /*   $sql="select * from qlpdbh where bihua like ?";
    $db->query($sql, array('%' . $bihuac . '%')); */
    $rs=$rs[0];
    if($rs) {
        $intro=$rs['intro'];
    }
    if($strname1=='王云龙' || $strname2=='王云龙'){
        $intro="天生一对，无以伦比的神仙眷侣";
    }
    $this->assign('strname1', $strname1);
    $this->assign('strname2', $strname2);
    $this->assign('intro', $intro);

}
$this->display('pd_name');
?>