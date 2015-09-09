<?php
header('Content-Type: text/html;charset=utf-8');
include_once dirname(__FILE__).'/bz.php';
/*字符去空格  */
function newtrim($str)
{
    $j=strlen($str);
    $result="";

    for($i=0; $i<$j; $i++) {
        switch($str[$i]) {
            case chr(8):
                # 去掉退格
            case chr(9):
                # 去掉tab
            case chr(10):
                # 去掉换行
            case chr(13):
                # 去掉回车
            case chr(255):
                #去掉特殊空格
                break;
            default:
                $result .= $str[$i];
        }
    }
    return $result;
}
function bz($nian1,$yue1,$ri1,$hh1){
    global $a;
    global $jz;
    global $sczy;
    global $scsy;


    $bzyear=$nian1;
    $bzmonth=$yue1;
    $bzday=$ri1;
    $bztime=$hh1;
    //确定节气 yz 月支  起运基数 qyjs
    $md=$bzmonth * 100 + $bzday;
    if($md>=204 and $md<= 305){
        $mz = 3;
        $qyjs = (($bzmonth - 2) * 30 + $bzday - 4) /3;
    }

    if($md>=306 and $md<=404){
        $mz = 4;

        $qyjs = (($bzmonth - 3) * 30 + $bzday - 6) /3;
    }

    if($md>=405 and $md<= 504){
        $mz = 5;
        $qyjs = (($bzmonth - 4) * 30 + $bzday - 5) /3;
    }

    if($md>=505 and $md<=  605){
        $mz = 6;
        $qyjs = (($bzmonth - 5) * 30 + $bzday - 5) /3;
    }

    if($md>=606 and $md<= 706){
        $mz = 7;
        $qyjs = (($bzmonth - 6) * 30 + $bzday - 6) /3;
    }

    if($md>=707 and $md<= 807){
        $mz = 8;
        $qyjs = (($bzmonth - 7) * 30 + $bzday - 7) /3;
    }

    if($md>=808 and $md<=907){
        $mz = 9;
        $qyjs = (($bzmonth - 8) * 30 + $bzday - 8) /3;
    }

    if($md>=908 and $md<=1007){
        $mz = 10;
        $qyjs = (($bzmonth - 9) * 30 + $bzday - 8) /3;
    }

    if($md>=1008 and $md<= 1106){
        $mz = 11;
        $qyjs = (($bzmonth - 10) * 30 + $bzday - 8) /3;
    }

    if($md>=1107 and $md<=  1207){
        $mz = 0;
        $qyjs = (($bzmonth - 11) * 30 + $bzday - 7) /3;
    }

    if($md>=1208 and $md<=  1231){
        $mz = 1;
        $qyjs = ($bzday - 8) /3;
    }

    if($md>=101 and $md<= 105){
        $mz = 1;
        $qyjs = (30 + $bzday - 4) /3;
    }

    if($md>=106 and $md<=  203){
        $mz = 2;
        $qyjs = (($bzmonth - 1) * 30 + $bzday - 6) /3;
    }
    //确定年干和年支 yg 年干 yz 年支
    if($md>=204 and $md<=1231){
        $yg = ($bzyear - 3) % 10;
        $yz = ($bzyear - 3) % 12;
    }
    if($md>=101 and $md<=203 ){
        $yg = ($bzyear - 4) % 10;
        $yz = ($bzyear - 4) % 12;
    }

    //确定月干 $mg 月干

    If ($mz > 2 And $mz <= 11){

        $mg = ($yg * 2 + $mz + 8) % 10;
    } else {
        $mg = ($yg * 2 + $mz) % 10;
    }
    //从公元0年到目前年份的天数 yearlast

    $yearlast = ($bzyear - 1) * 5 + ($bzyear - 1) / 4 - ($bzyear - 1) / 100 + ($bzyear - 1) / 400;
    //计算某月某日与当年1月0日的时间差（以日为单位）yearday
    $yearday = 0;
    for ($i = 1; $i<$bzmonth; $i++) {
        if(in_array($i, array( 1, 3, 5, 7, 8, 10, 12))) {
            $yearday = $yearday + 31;
        } elseif (in_array($i, array(4, 6, 9, 11))) {
            $yearday = $yearday + 30;
        } else {
            if ($bzyear % 4 == 0 And (($bzyear % 100) <> 0) Or $bzyear % 400 == 0) {
                $yearday = $yearday + 29;
            } else {
                $yearday = $yearday + 28;
            }
        }
    }
    $yearday = $yearday + $bzday;

    //计算日的六十甲子数 day60
    $day60 = ($yearlast + $yearday + 6015) % 60;

    //确定 日干 dg  日支  dz
    $dg = $day60 % 10;
    $dz = $day60 % 12;
    //确定 时干 tg 时支 tz
    $tz = ($bztime + 3) / 2 % 12;
    //'tg = (dg * 2 + tz + 8) % 10
    if ($tz == 0){
        $tg = ($dg * 2 + $tz) % 10;
    } else {
        $tg = ($dg * 2 + $tz + 8) % 10;
    }
    //'把 年月日时 转换成为 生辰八字
    switch($yz) {
        Case 1:
            $yzg = 0;
            break;
        Case 2:
        case 8:
            $yzg = 6;
            break;
        Case 3:
            $yzg = 1;
            break;
        Case 4:
            $yzg = 2;
            break;
        Case 5:
        case 11:
            $yzg = 5;
            break;
        Case 6:
            $yzg = 3;
            break;
        Case 7:
            $yzg = 4;
            break;
        Case 9:
            $yzg = 7;
            break;
        Case 10:
            $yzg = 8;
            break;
        Case 0:
            $yzg = 9;
            break;
    }

    //'月支纳干 $mzg
    switch($mz){
        Case 1:
            $mzg = 0;
            break;
        Case 2:
        case 8:
            $mzg = 6;
            break;
        Case 3:
            $mzg = 1;
            break;
        Case 4:
            $mzg = 2;
            break;
        Case 5:
        case 11:
            $mzg = 5;
            break;
        Case 6:
            $mzg = 3;
            break;
        Case 7:
            $mzg = 4;
            break;
        Case 9:
            $mzg = 7;
            break;
        Case 10:
            $mzg = 8;
            break;
        Case 0:
            $mzg = 9;
            break;
    }

    //'日支纳干 dzg

    switch($dz) {
        case 1:
            $dzg = 0;
            break;
        case 2:
        case 8:
            $dzg = 6;
            break;
        case 3:
            $dzg = 1;
            break;
        case 4:
            $dzg = 2;
            break;
        case 5:
        case 11:
            $dzg = 5;
            break;
        case 6:
            $dzg = 3;
            break;
        case 7:
            $dzg = 4;
            break;
        case 9:
            $dzg = 7;
            break;
        case 10:
            $dzg = 8;
            break;
        case 0:
            $dzg = 9;
    }

    //'时支纳干 tzg
    switch($tz) {
        case 1:
            $tzg = 0;
            break;
        case 2:
        case 8:
            $tzg = 6;
            break;
        case 3:
            $tzg = 1;
            break;
        case 4:
            $tzg = 2;
            break;
        case 5:
        case 11:
            $tzg = 5;
            break;
        case 6:
            $tzg = 3;
            break;
        case 7:
            $tzg = 4;
            break;
        case 9:
            $tzg = 7;
            break;
        case 10:
            $tzg = 8;
            break;
        case 0:
            $tzg = 9;
    }
    //'确定各支对应的十神

    //'年干十神 ygs
    $ygs = (($yg + 11 - $dg) + (($dg + 1) % 2) * (($yg + 10 - $dg) % 2) * 2) % 10;

    //'月干十神 mgs
    $mgs = (($mg + 11 - $dg) + (($dg + 1) % 2) * (($mg + 10 - $dg) % 2) * 2) % 10;

    //'时干十神 $dgs
    $tgs = (($tg + 11 - $dg) + (($dg + 1) % 2) * (($tg + 10 - $dg) % 2) * 2) % 10;

    //'年支十神 yzs
    $yzs = (($yzg + 11 - $dg) + (($dg + 1) % 2) * (($yzg + 10 - $dg) % 2) * 2) % 10;

    //'月支十神 mzs
    $mzs = (($mzg + 11 - $dg) + (($dg + 1) % 2) * (($mzg + 10 - $dg) % 2) * 2) % 10;

    //'日支十神 dzs
    $dzs = (($dzg + 11 - $dg) + (($dg + 1) % 2) * (($dzg + 10 - $dg) % 2) * 2) % 10;

    //'时支十神 tzs
    $tzs = (($tzg + 11 - $dg) + (($dg + 1) % 2) * (($tzg + 10 - $dg) % 2) * 2) % 10;

    //'到此，完成各地支所纳天干的确定任务
    $yg1=$a[20 + $yg];
    $yz1=$a[30 + $yz];
    $mg1=$a[20 + $mg];
    $mz1=$a[30 + $mz];
    $dg1=$a[20 + $dg];
    $dz1=$a[30 + $dz];
    $tg1=$a[20 + $tg];
    $tz1=$a[30 + $tz];
    $ygz=$a[20 + $yg] . $a[30 + $yz];
    $mgz=$a[20 + $mg] . $a[30 + $mz];
    $dgz=$a[20 + $dg] . $a[30 + $dz];
    $tgz=$a[20 + $tg] . $a[30 + $tz];

    /*大运  */
    for ($i=1; $i<=6; $i++) {
        $dayun[]=$a[20+((($mg+10)-$i) % 10)].$a[30+((($mz+12)-$i) % 12)] ;
    }
    /* 命造简批 */
    $sex=get_xingbie();
if ($sex=="男"){
    $sex=1;
}
    else {
        $sex=0;
    }

If ($sex And $dzs == 3) {
    $mzjp[]="<br>". "自己瘦，妻子肥胖" ;
}
    If ($sex == 0 And $dzs == 3){
        $mzjp[]="<br>". "自己肥胖，丈夫瘦" ;
    }

    //'与下海有关的因素: 正偏财克正偏印；官见伤官
    If (($ygs == 5 Or $ygs == 6 Or $mgs == 5 Or $mgs == 6 Or $tgs == 5 Or $tgs == 6) And ($ygs == 9 Or $ygs == 0 Or $mgs == 9 Or $mgs == 0 Or $tgs == 9 Or $tgs == 0)) {
        $mzjp[]="<br>"."经商下海做生意" ;
    }
    If (($ygs == 8 Or $mgs == 8 Or $tgs == 8) And ($ygs == 4 Or $mgs == 4 Or $ygs == 4) ) {
       $mzjp[]="<br>"."经商下海做生意" ;
    }

    //'近视：天干金被火克
    If (($yg == 7 Or $yg == 8 Or $mg == 7 Or $mg == 8 Or $tg == 7 Or $tg == 8) And ($yg == 3 Or $yg == 4 Or $mg == 3 Or $mg == 4 Or $tg == 3 Or $tg == 4)) {
       $mzjp[]="<br>" . "要注意预防眼睛方面的疾病，容易近视";
    }
    //'和算命、神秘有关的因素:日支或年支为戌，他支有亥；日支或年支为亥，他支有戌
    If (($yz == 11 Or $dz == 11) And ($yz == 0 Or $mz == 0 Or $dz == 0 Or $tz == 0)) {
         $mzjp[]="<br>"."近神学之人";
    }elseIf (($yz == 0 Or $dz == 0) And ($yz == 11 Or $mz == 11 Or $dz == 11 Or $tz == 11)) {
         $mzjp[]="<br>" . "近神学之人";
    }

    //'/*事业解说*/
    switch($tgs) {
        case 1:
            $mzjp[]="<br>" . "在事业方面，可以受到兄弟的帮助。" ;
            break;
        case 2:
            $mzjp[]="<br>" . "在事业方面，可以受到姊妹的帮助" ;
            break;
        case 3:
        case 4:
            $mzjp[]="<br>" . "在事业方面，可以从事思考方面的职业" ;
            break;
        case 5:
           $mzjp[]="<br>" . "在事业方面，可以受到父亲的帮助。" ;
            break;
        case 6:
            $mzjp[]="<br>" . "在事业方面，可以受到配偶或与配偶同辈的帮助。" ;
            break;
        case 7:
        case 8:
            $mzjp[]="<br>" . "在事业方面，可以受到师长、上司的帮助" ;
            break;
        case 9:
             $mzjp[]="<br>" . "在事业方面，可以受到母亲辈的帮助。" ;
            break;
        case 0:
             $mzjp[]="<br>" . "在事业方面，可以受到长辈贵人的帮助。" ;
            break;
    }

    //'/*婚姻解说--男*/
    If ($sex) {
        switch($dzs) {

            case 1:
                 $mzjp[]="<br>" . "婚姻易变，多波折。";
                break;
            case 2:
                $mzjp[]="<br>" . "會较为晚婚，婚姻多波折。";
                break;
            case 3:
                $mzjp[]="<br>" . "妻贤慧能持家，得衣食财帛，妻肥胖。";
                break;
            case 4:
                $mzjp[]="<br>" . "妻子美貌，但志高无才能。";
                break;
            case 5:
               $mzjp[]="<br>" . "妾夺妻权，但有善待丈夫。不爱妻反爱妾。";
                break;
            case 6:
                $mzjp[]="<br>" . "得妻扶助成功，白手成家自然富贵。";
                break;
            case 7:
                If (($ygs <> 3) Or ($mgs <> 3) Or ($tgs <> 3)) {
                   $mzjp[]="<br>" . "须多注意身体。";
                }
                break;
            case 8:
                $mzjp[]="<br>" . "独立持家，地位安定，又得妻力，或与名门之女结婚";
                $mzjp[]="<br>" . "妻妾相貌敦厚，贤淑温顺。";
                break;
            case 9:
                $mzjp[]="<br>" . "妻做事敏捷迅速.";
                break;
            case 0:
               $mzjp[]="<br>" . "妻子贤淑，能得内助之力而成功。";
        }
    }
    switch($dz % 4) {

        case 1:
            If (($yz == 10) Or ($mz == 10)) {
                $mzjp[]="<br>" . $a[11] ;
            }
            If ($tz == 10) {
             $mzjp[]="<br>" . $a[12];
            }
            break;
        case 2:
            If (($yz == 7) Or ($mz == 7)) {
               $mzjp[]="<br>" . $a[11];
            }
            If ($tz == 7) {
               $mzjp[]="<br>" . $a[12];
            }
            break;
        case 3:
            If (($yz == 4) Or ($mz == 4)) {
               $mzjp[]="<br>" . $a[11];
            }
            If ($tz == 4) {
               $mzjp[]="<br>" . $a[12] ;
            }
            break;
        case 0:
            If (($yz == 1) Or ($mz == 1)) {
              $mzjp[]="<br>" . $a[11];
            }
            If ($tz == 1) {
               $mzjp[]="<br>" . $a[12];
            }
            break;
    }
    //'/*桃花*/

    switch($dz % 3) {
        case 1:
            $mzjp[]="<br>" . $a[182];
            //'/*将星*/;
            break;
        case 2:
             $mzjp[]="<br>" . $a[183];
            //'/*华盖*/;
            break;
        case 0:
             $mzjp[]="<br>" . $a[184];
            break;
            //'/*驿马*/
    }

    switch($dg) {
        case 1:
        case 5:
        case 7:

            If (($yz == 2) Or ($yz == 8) Or ($mz == 2) Or ($mz == 8) Or ($tz == 2) Or ($tz == 8)) {
                 $mzjp[]="<br>" . $a[13];
            }

            break;
        case 2:
        case 6:
            If (($yz == 1) Or ($yz == 9) Or ($mz == 1) Or ($mz == 9) Or ($tz == 1) Or ($tz == 9)) {
                  $mzjp[]="<br>" . $a[13];
            }

            break;
        case 3:
        case 4:
            If (($yz == 10) Or ($yz == 12) Or ($mz == 12) Or ($mz == 10) Or ($tz == 12) Or ($tz == 10) Or ($dz == 12) Or ($dz == 10)) {
                  $mzjp[]="<br>" .$a[13];
            }
            break;
        case 9:
        case 0:
            If (($yz == 4) Or ($yz == 6) Or ($mz == 4) Or ($mz == 6) Or ($tz == 4) Or ($tz == 6) Or ($dz == 4) Or ($dz == 6)) {
                 $mzjp[]="<br>" . $a[13];
            }
            break;
        case 8:
            If (($yz == 3) Or ($yz == 7) Or ($mz == 3) Or ($mz == 7) Or ($tz == 3) Or ($tz == 7) Or ($dz == 3) Or ($dz == 7)) {
                  $mzjp[]="<br>" . $a[13];
            }
            break;
    }


    //'/*天乙*/

    switch($mz){
        case 4:
            If ($day60 == 21) {
                 $mzjp[]="<br>" . $a[14];
            }
            break;
        case 9:
            If ($day60 == 59) {
              $mzjp[]="<br>" . $a[14];
            }
            break;
        case 10:
            If ($day60 == 27) {
                $mzjp[]="<br>" . $a[14];
            }
            break;
        case 1:
            If ($day60 == 9) {
                $mzjp[]="<br>" . $a[14];
            }
            break;
        case 7:
            If ($day60 == 3) {
               $mzjp[]="<br>" . $a[14];
            }
            break;
    }
    //'/*天月二德*/

    if(in_array($day60,array(1, 2, 12, 3, 13, 24, 34, 45, 56, 7, 18, 29, 50))) {
       $mzjp[]="<br>" . "不愁吃穿,衣食丰足." ;
    }
    //'/*天福贵人*/


    switch($dg) {
        case 1:
            If ((($mz == 12) Or ($mz == 0)) And (($tz == 12) Or ($tz == 0))) {
               $mzjp[]="<br>" . $a[18];
            }
            break;
        case 2:
            If (($mz == 7) And ($tz == 7)) {
                $mzjp[]="<br>" . $a[18];
            }
            break;
        case 3:
        case 5:
            If (($mz == 3) And ($tz == 3)) {
               $mzjp[]="<br>" . $a[18];
            }
            break;
        case 4:
        case 6:
            If (($mz == 10) And ($tz == 10)) {
               $mzjp[]="<br>" . $a[18];
            }
            break;
        case 7:
            If (($mz == 6) And ($tz == 6)) {
                $mzjp[]="<br>" . $a[18];
            }
            break;
        case 8:
            If (($mz == 1) And ($tz == 1)) {
               $mzjp[]="<br>" . $a[18];
            }
            break;
        case 9:
            If (($mz == 9) And ($tz == 9)) {
               $mzjp[]="<br>" . $a[18];
            }
            break;
        case 0:
            If (($mz == 4) And ($tz == 4)) {
              $mzjp[]="<br>" . $a[18];
            }

    }
    //'/*学堂*/


    switch($mz){
        case 3:
        case 4:
        case 5:

            If ($day60 == 15) {
               $mzjp[]="<br>" . $a[19];
            }
            break;
        case 6:
        case 7:
        case 8:
            If ($day60 == 31) {
                $mzjp[]="<br>" . $a[19];
            }
            break;
        case 9:
        case 10:
        case 11:
            If ($day60 == 45) {
               $mzjp[]="<br>"  . $a[19];
            }
            break;
        case 0:
        case 1:
        case 2:

            If ($day60 == 1) {
              $mzjp[]="<br>" . $a[19];
            }
            break;
    }


    //'/*天赫吉星*/

    If (($ygs == 8) Or ($yzs == 8)) {
        $mzjp[]="<br>" . $a[51];
    }

    //'/*年正官*/


    If (($mgs == 8) Or ($mzs == 8)) {
        $mzjp[]="<br>" . $a[52];
    }

    //'/*月正官*/

    If (($tgs == 8) Or ($tzs == 8)) {
         $mzjp[]="<br>" . $a[55];
    }

    //'/*时正官*/

    If (($ygs == 1) Or ($yzs == 1)) {
        $mzjp[]="<br>" . $a[53];
    }

    //' /*年比肩*/

    If (($mgs == 1) Or ($mzs == 1)) {
       $mzjp[]="<br>" . $a[54];
    }

    //'/*月比肩*/

    If (($tgs == 1) Or ($tzs == 1)) {
       $mzjp[]="<br>" . $a[56];
    }

    //'/*时比肩*/

    If (($ygs == 2) Or ($yzs == 2)) {
         $mzjp[]="<br>" . $a[57];
    }

    //'/*年劫财*/

    If (($mgs == 2) Or ($mzs == 2)) {
         $mzjp[]="<br>" . $a[58];
    }
    //'/*月劫财*/

    If (($tgs == 2) Or ($tzs == 2)) {
         $mzjp[]="<br>" . $a[59];
    }
    //'/*时劫财*/

    If (($ygs == 3) Or ($yzs == 3)) {
         $mzjp[]="<br>" . $a[60];
    }
    //'/*年食神*/

    If (($mgs == 3) Or ($mzs == 3)) {
         $mzjp[]="<br>" . $a[61];
    }
    //' /*月食神*/

    If ($sex == 1 And (($tgs == 3) Or ($tzs == 3))) {
        $mzjp[]="<br>" . $a[62];
    }
    //'/*时食神*/

    If (($ygs == 4) Or ($yzs == 4)) {
        $mzjp[]="<br>" . $a[63];
    }
    //'/*年伤官*/

    If (($mgs == 4) Or ($mzs == 4)) {
         $mzjp[]="<br>" . $a[64];
    }
    //'/*月伤官*/

    If (($tgs == 4) Or ($tzs == 4)) {
         $mzjp[]="<br>" . $a[65];
    }
    //' /*时伤官*/

    If (($ygs == 5) Or ($yzs == 5)) {
        $mzjp[]="<br>" . $a[66];
    }
    //'/*年偏财*/

    If (($mgs == 5) Or ($mzs == 5)) {
        $mzjp[]="<br>" . $a[67];
    }
    //'/*月偏财*/

    If (($ygs == 6) Or ($yzs == 6)) {
       $mzjp[]="<br>" . $a[68];
    }

    //'/*年正财*/

    If (($mgs == 6) Or ($mzs == 6)) {
         $mzjp[]="<br>" . $a[69];
    }
    //'/*月正财*/

    If (($tgs == 6) Or ($tzs == 6)) {
        $mzjp[]= "<br>" . $a[70];
    }
    //'/*时正财*/

    If (($tgs == 7) Or ($tzs == 7)) {
        $mzjp[]="<br>" . $a[71];
    }

    //'/*时七杀*/

    If (($ygs == 9) Or ($yzs == 9)) {
         $mzjp[]="<br>" . $a[72];
    }

    //'/*年偏印*/

    If (($mgs == 9) Or ($mzs == 9)) {
        $mzjp[]="<br>" . $a[73];
    }

    //'/*月偏印*/

    If (($tgs == 9) Or ($tzs == 9)) {
        $mzjp[]="<br>" . $a[74];
    }

    //'/*时偏印*/

    If (($ygs == 0) Or ($yzs == 0)) {
        $mzjp[]="<br>" . $a[75];
    }
    //' /*年正印*/

    If (($mgs == 0) Or ($mzs == 0)) {
        $mzjp[]="<br>" . $a[76];
    }
    //' /*月正印*/

    If (($tgs == 0) Or ($tzs == 0)) {
        $mzjp[]="<br>" . $a[77];
    }
    //'/*时正印*/


    If ($sex == 1) {

        If (($tgs == 4) And (($mgs == 5) Or ($mgs == 6) Or ($tgs == 5) Or ($tgs == 6))) {


            $mzjp[]="<br>" . $a[245];
        }

        //'/*4+5(6)*/
        If (($tgs == 4) And (($mgs == 7) Or ($ygs == 7))) {

            $mzjp[]="<br>" . $a[247];
        }

        //'/*4+7*/
        If (($tgs == 4) And (($mgs == 9) Or ($ygs == 9))) {


            $mzjp[]="<br>" . $a[249];
        }

        //'/*4+9*/
        If (($tgs == 4) And (($mgs == 0) Or ($ygs == 0))) {

            $mzjp[]="<br>" . $a[240];
        }
        //'/*4+0*/
        If ((($tgs == 5) Or ($tgs == 6)) And (($mgs == 9) Or ($ygs == 9))) {

            $mzjp[]="<br>" . $a[259];
        }
        //'/*5(6)+9*/
        If ((($tgs == 5) Or ($tgs == 6)) And (($mgs == 7) Or ($ygs == 7))) {

            $mzjp[]="<br>" . $a[257];
        }

        //'/*5(6)+7*/
        If ((($tgs == 5) Or ($tgs == 6)) And (($mgs == 8) Or ($ygs == 8))) {

            $mzjp[]="<br>" . $a[258];
        }
        //'/*5(6)+8*/
        If ((($tgs == 5) Or ($tgs == 6)) And (($mgs == 4) Or ($ygs == 4))) {

            $mzjp[]="<br>" . $a[245];
        }

        //'/*5(6)+4*/
        If (($tgs == 3) And (($mgs == 7) Or ($ygs == 7))) {

            $mzjp[]="<br>" . $a[237];
        }
        //'/*3+7*/
        If (($tgs == 3) And (($mgs == 0) Or ($ygs == 0))) {

            $mzjp[]="<br>" . $a[230];
        }
        //'/*3+0*/
        If (($tgs == 3) And (($mgs == 5) Or ($ygs == 5) Or ($mgs == 6) Or ($ygs == 6))) {

            $mzjp[]="<br>" . $a[235];
        }
        //'/*3+5(6)*/
        If (($tgs == 3) And (($mgs == 8) Or ($ygs == 8))) {

            $mzjp[]="<br>" . $a[238];
        }
        //'/*3+8*/
        If (($tgs == 7) And (($mgs == 3) Or ($ygs == 3))) {

            $mzjp[]="<br>" . $a[237];
        }
        //'/*7+3*/
        If (($tgs == 7) And (($mgs == 4) Or ($ygs == 4))) {

            $mzjp[]="<br>" . $a[247];
        }
        //'/*7+4*/
        If (($tgs == 7) And (($mgs == 5) Or ($ygs == 5) Or ($mgs == 6) Or ($ygs == 6))) {

            $mzjp[]="<br>" . $a[257];
        }
        //'/*7+5(6)*/
        If (($tgs == 7) And (($mgs == 0) Or ($ygs == 0))) {

            $mzjp[]="<br>" . $a[270];
        }
        //'/*7+0*/
        If (($tgs == 8) And (($mgs == 0) Or ($ygs == 0))) {

            $mzjp[]="<br>" . $a[280];
        }
        //'/*8+0*/
        If (($tgs == 8) And (($mgs == 3) Or ($ygs == 3))) {

            $mzjp[]="<br>" . $a[238];
        }
        //'/*8+3*/
        If (($tgs == 8) And (($mgs == 5) Or ($ygs == 5) Or ($mgs == 6) Or ($ygs == 6))) {

            $mzjp[]="<br>" . $a[258];
        }
        //'/*8+5(6)*/
        If (($tgs == 9) And (($mgs == 5) Or ($ygs == 5) Or ($mgs == 6) Or ($ygs == 6))) {

            $mzjp[]="<br>" . $a[259];
        }
        //'/*9+5(6)*/
        If (($tgs == 9) And (($mgs == 4) Or ($ygs == 4))) {

            $mzjp[]="<br>" . $a[249];
        }
        //'/*9+4*/
        If (($tgs == 0) And (($mgs == 4) Or ($ygs == 4))) {

            $mzjp[]="<br>" . $a[240];
        }
        //'/*0+4*/
        If (($tgs == 0) And (($mgs == 3) Or ($ygs == 3))) {

            $mzjp[]="<br>" . $a[230];
        }

        //' /*0+3*/
        If (($tgs == 0) And (($mgs == 7) Or ($ygs == 7))) {

            $mzjp[]="<br>" . $a[270];
        }
        //'/*0+7*/
        If (($tgs == 0) And (($mgs == 8) Or ($ygs == 8))) {

            $mzjp[]="<br>" . $a[280];
        }
        //'单独从年月日时的一些论断方法
        //'单独从生日论命
        //'原来是用来论年，现在用来论日（60甲子）
      $mzjp[]="<br>" .$jz[(60 + 6 * $dg - 5 * $dz) % 60];
        //'单独从时辰论命

        If ($tz == 0 Or $tz == 12) {
            $scdz = 12;
        }
        Else{
            $scdz = $tz;
        }

       $mzjp[]="<br>". $scsy[$scdz] . $sczy[$scdz];

    $bz = array (
            yg => $yg1,//年干
            yz => $yz1,//年支
            mg => $mg1,//月干
            mz => $mz1,//月支
            dg => $dg1,//日干
            dz => $dz1,//日支
            tg => $tg1,//时干
            tz => $tz1,//时支
            ygz=> $ygz,//年干支
            mgz=> $mgz,//月干支
            dgz=> $dgz,//日干支
            tgz=> $tgz,//时干支
            ygs=>$ygs,//年干十神
            yzs=>$yzs,//年支十神
            mgs=>$mgs,//月干十神
            mzs=>$mzs,//月支十神
            dzs=>$dzs,//日支十神
            tgs=>$tgs,//时干十神
            tzd=>$tzs,//时支十神
            qyjs=>$qyjs,//起运基数
            dayun=>$dayun,//大运
            mzjp=>$mzjp,//命运简批
    );
    return $bz;

}
}
/* 通过天干地支计算五行 */
 function tgdzwh($tgdz)
{
    $arr = array("子" => "水"
            ,"亥" => "水"
            ,"寅" => "木"
            ,"卯" => "木"
            ,"巳" => "火"
            ,"午" => "火"
            ,"申" => "金"
            ,"酉" => "金"
            ,"辰" => "土"
            ,"戌" => "土"
            ,"丑" => "土"
            ,"未" => "土"
            ,"甲" => "木"
            ,"乙" => "木"
            ,"丙" => "火"
            ,"丁" => "火"
            ,"戊" => "土"
            ,"己" => "土"
            ,"庚" => "金"
            ,"辛" => "金"
            ,"壬" => "水"
            ,"癸" => "水"
    );
    return $arr[$tgdz];
}
/*通过月份计算冬天  */
function siji($yue)
{
    $arr = array ("1" => "冬"
            ,"2" => "冬"
            ,"3" => "春"
            ,"4" => "春"
            ,"5" => "春"
            ,"6" => "夏"
            ,"7" => "夏"
            ,"8" => "夏"
            ,"9" => "秋"
            ,"10" => "秋"
            ,"11" => "秋"
            ,"12" => "冬");
    return $arr[$yue];
}
/* 性格分析 */
function xgfx($yue1,$ri1){
    global $west;
    $xgfx=$west[$ri1] . "<br>" . $west[100 * $yue1 + $ri1] . "<br>";
    return $xgfx;

}

/* 三才 */
function getsancai($sc)
{
    $sc=$sc%10;
    switch($sc){
        case 1:
        case 2:
            $sctxt="木";
            break;
        case 3:
        case 4:
            $sctxt="火";
            break;
        case 5:
        case 6:
            $sctxt="土";
            break;
        case 7:
        case 8:
            $sctxt="金";
            break;
        case 9:
        case 10:
        case 0:
            $sctxt="水";
            break;
    }

    return $sctxt;

}
/* 通过日期得到星座 */
function Constellation($mDate)
{
    $time = strtotime($mDate);
    if(false===$time) {
        echo "非日期";
        return;
    }
    $a= date("j", $time) - (19 + intval(substr("102123444423", date("n", $time)-1, 1)));
    $a = $a>=0? 0:-1;

    //'星座
    $Constellation = mb_substr("魔羯水瓶双鱼白羊金牛双子巨蟹狮子处女天秤天蝎射手魔羯", (date("n", $time) + $a)*4 , 2,'utf-8') . "座" ;
    return $Constellation;
}

