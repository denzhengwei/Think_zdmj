<?php
header('Content-Type: text/html;charset=utf-8');
include_once dirname(__FILE__) . '/bz.php';//八字定义
include_once dirname(__FILE__) . '/function.php';//未修改的方法
include_once dirname(__FILE__) . '/astro.php';//星座的方法

global $a;
/*活取现在年份  */
function getYear ()
{
    return date('Y');
}
/*12个月份  */
function months(){
    $months=array();
    for($j=1;$j<=12;$j++){
        $months[]=$j;
    }
    return $months;
}
/*31天  */
function days(){
    $days=array();
    for ($i=1;$i<=31;$i++){
        $days[]=$i;
    }
    return $days;
}
/*24小时  */
function hours(){
    $hours=array();
    for($j=0;$j<24;$j++){
        $hours[]=$j;
    }
    return $hours;
}
/* 60分钟 */
function mins(){
    $mins=array();
    for($j=1;$j<=60;$j++){
        $mins[]=$j;
    }
    return $mins;
}
/* 判断session 传统算命除血型以外都要填写*/
  function checkSession () {
    $checkSession = $_SESSION ['xing'] != "" &&
    $_SESSION ['ming'] != "" &&
    $_SESSION ['xingbie'] != "" &&
    $_SESSION ['nian'] != "" &&
    $_SESSION ['yue'] != "" &&
    $_SESSION ['ri'] != "" &&
    $_SESSION ['hh'] != "";
    return $checkSession;
}
/*调用资料  */
function get_xing(){

    return $_SESSION['xing'];
}
function get_ming(){
    return $_SESSION['ming'];
}
function get_xingbie(){
    return $_SESSION['xingbie'];
}
function get_xuexing(){
    return $_SESSION['xuexing'];
}
function get_nian(){
    return $_SESSION['nian'];
}
function get_yue(){
    return $_SESSION['yue'];
}
function get_ri(){
    return $_SESSION['ri'];
}
function get_hh(){
    return $_SESSION['hh'];
}
function get_mm(){
    return $_SESSION['mm'];
}
/*重新算命（销毁session）*/
function _restart(){
    session_destroy();
}
/* 时间格式 */
function caltime(){
    $caltime=$_SESSION['nian'].
    "-".$_SESSION['yue']."-".$_SESSION['ri'].' '.$_SESSION['hh'].":".$_SESSION['mm'].":"."0";
    return $caltime;
}
function hhcal($caltime)
{

    //获取当前系统时间
    $curTime = strtotime($caltime) ;
    //星期名
    $WeekName = array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五" , "星期六" );
    //天干名称
    $TianGan = array("甲", "乙", "丙" , "丁" , "戊", "己", "庚", "辛", "壬", "癸");
    //地支名称
    $DiZhi = array("子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥");
    //属相名称
    $ShuXiang = array("鼠", "牛", "虎", "兔", "龙", "蛇", "马", "羊", "猴", "鸡", "狗", "猪" );
    //农历日期名
    $DayName = array("*", "初一", "初二" ,"初三", "初四" , "初五" , "初六" , "初七" , "初八" , "初九" , "初十" , "十一" , "十二" , "十三" , "十四" , "十五" , "十六" , "十七" , "十八" , "十九" , "二十" , "廿一" , "廿二", "廿三", "廿四" , "廿五" , "廿六" , "廿七" , "廿八" , "廿九" , "三十" );
    //农历月份名
    $MonName = array("*", "正", "二", "三", "四", "五", "六", "七", "八", "九", "十", "十一", "腊");
    //公历每月前面的天数
    $MonthAdd = array(0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334);
    //农历数据
    $NongliData = array(2635 , 333387 , 1701 , 1748 , 267701 , 694 , 2391 , 133423 , 1175 , 396438 , 3402 , 3749 , 331177 , 1453 , 694 , 201326 , 2350 , 465197 , 3221 , 3402 , 400202 , 2901 , 1386 , 267611 , 605 , 2349 , 137515 , 2709 , 464533 , 1738 , 2901 , 330421 , 1242 , 2651 , 199255 , 1323 , 529706 , 3733 , 1706 , 398762 , 2741 , 1206 , 267438 , 2647 , 1318 , 204070 , 3477 , 461653 , 1386 , 2413 , 330077 , 1197 , 2637 , 268877 , 3365 , 531109 , 2900 , 2922 , 398042 , 2395 , 1179 , 267415 , 2635 , 661067 , 1701 , 1748 , 398772 , 2742 , 2391 , 330031 , 1175 , 1611 , 200010 , 3749 , 527717 , 1452 , 2742 , 332397 , 2350 , 3222 , 268949 , 3402 , 3493 , 133973 , 1386 , 464219 , 605 , 2349 , 334123 , 2709 , 2890 , 267946 , 2773 , 592565 , 1210 , 2651 , 395863 , 1323 , 2707 , 265877 );
    //生成当前公历年、月、日 ==> GongliStr
    $curYear = date("Y", $curTime);
    $curMonth = date("n", $curTime) ;
    $curDay = date("j", $curTime) ;
    $GongliStr = $curYear . "年" . $curMonth . "月" . $curDay . "日";

    //生成当前公历星期 ==> WeekdayStr
    $curWeekday = date('w', $curTime) ;
    $WeekdayStr = $WeekName[$curWeekday];

    //计算到初始时间1921年2月8日的天数：1921-2-8(正月初一)
    $TheDate = ($curYear - 1921) * 365 + intval(($curYear - 1921) / 4) + $curDay + $MonthAdd[intval($curMonth) - 1] - 38 ;
    if (($curYear%4) == 0 && $curMonth > 2){
        $TheDate = $TheDate + 1;
    }

    //计算农历天干、地支、月、日
    $isEnd = 0 ;
    $m = 0 ;
    do{
        if ($NongliData[$m] < 4095) {
            $k = 11 ;
        } else {
            $k = 12 ;
        }
        $n = $k ;
        do{
            if ($n < 0) {
                break;
            }
            //获取NongliData(m)的第n个二进制位的值
            $bit = $NongliData[$m];
            for($i=0; $i<$n; $i++) {
                $bit = intval($bit / 2);
            }
            $bit = $bit%2;
            if ($TheDate <= 29 + $bit){
                $isEnd = 1 ;
                break;
            }
            $TheDate = $TheDate - 29 - $bit;
            $n--;
        } while (true);

        if ($isEnd == 1) {
            break;
        }
        $m++;
    } while (true);
    $curYear = 1921 + $m ;
    $curMonth = $k - $n + 1 ;
    $curDay = $TheDate ;
    if ($k == 12) {
        if ($curMonth == intval($NongliData[$m] / 65536) + 1) {
            $curMonth = 1 - $curMonth ;
        }
        elseif ($curMonth > intval($NongliData[$m] / 65536) + 1) {
            $curMonth = $curMonth - 1 ;
        }
    }

    //生成农历天干、地支、属相 ==> NongliStr
    $nlnian = $TianGan[((($curYear - 4)%60)%10)] . $DiZhi[((($curYear - 4)%60)%12)];
    $sx = $ShuXiang[((($curYear - 4)%60)%12)];
    //生成农历月、日 ==> NongliDayStr
    if ($curMonth < 1) {
        $nlyue = $MonName[-1 * $curMonth] ;
    }
    else  {
        $nlyue = $MonName[$curMonth];
    }
    $nlri = $DayName[$curDay];
    $nonglistr= $nlnian . "|" . $nlyue . "|" . $nlri . "|" . $sx;
    return $nonglistr;
}

/*纳音*/
function layin($tgdz)
{

    $user=M('jiazi');
    $rs=$user->where(array('jiazi'=>$tgdz))->select();
    if(false!==$rs){
        return $rs[0]['layin'];
    }
    else {

    return '';
    }
}
/* 五行 */
function wuxing($dg)
{

    $user=M('wh');
    $rs=$user->where(array('wh'=>$dg))->select();
    if(false!==$rs){
        return $rs;
    }
    else {

        return '';
    }
}
/* 四季用神参考  */
function sjrs($wh,$sj)
{

    $user=M('sjrs');
    $rs=$user->where(array('wh'=>$wh,'sj'=>$sj))->select();
    if(false!==$rs){
        return $rs;
    }
    else {

        return '';
    }
}
/*  穷通宝鉴调候用神参考*/
function qtbj($dg,$mz){
   /*   $sql="select * from qtbj where tg=? and dz=?";
    $db->query($sql, array($dg1, $mz1));
    if($rs = $db->fetchArray()) {
        $smarty->assign('qtbj' , $rs['content']);
    } */
    $user=M('qtbj');
    $rs=$user->where(array('tg'=>$dg,'dz'=>$mz))->select();
    if(false!==$rs){
        return $rs;
    }
    else {

        return '';
    }

}
/* 生肖个性 */

function sxgx($sx){
    $user=M('sxgx');
    $rs=$user->where(array('sx'=>$sx))->select();
    if(false!==$rs){
        return $rs;
    }
    else {

        return '';
    }

}
/* 日干算命 */
function rgnm($dgz){
        $user=M('rgnm');
        $rs=$user->where(array('rgz'=>$dgz))->select();
        if(false!==$rs){
            return $rs;
        }
        else {

            return '';
        }

}
/* 称骨算命 */
function cglm($nian1,$yue2,$ri2,$hh2){
    //'年
    $user=M('chenggu1');
    $rs1=$user->where(array('year'=>$nian1))->select();
    $weight1=$rs1[0][weight];
   //月
    $user=M('chenggu2');
    $rs2=$user->where(array('month'=>$yue2))->select();
    $weight2=$rs2[0][weight];
    //日
    $user=M('chenggu3');
    $rs3=$user->where(array('day'=>$ri2))->select();
    $weight3=$rs3[0][weight];
    //时
    $user=M('chenggu4');
    $rs4=$user->where(array('time'=>$hh2))->select();
    $weight4=$rs4[0][weight];
    $weight=$weight1+$weight2+$weight3+$weight4;//总量
    $tempweight=intval($weight*10);
  /*最终结果  */
    $user=M('chenggu');
    $tempweight=intval($weight*10);
    $rs=$user->where(array('weight'=>$tempweight))->select();
    $cglm=array($weight,$rs[0][content],$rs[0][intro]);
    return $cglm;

}
/*得到一个汉字字意五行*/
function getzywh($txt)
{
    if ($txt!=""){
$user=M('hzwh');
    $map['hz']=array('like','%'.$txt.'%');
    $rs = $user->where($map)->select();
if(null !== $rs){
    return $rs[0]['wh'];
}
else {
    return 0;
}
    }

  else return "";
    }
/*-天地人格算命*/
    function sancaism($str){
        $user=M('81');
        $rs=$user->where(array('num'=>$str))->select();
        if(false!==$rs){
            return $rs;

        }
        else {

            return '';
        }
    }
//'三才吉凶
function getpf($sc)
    {
        $arr = array("大吉" =>12, "吉"=>8, "半吉"=>5, "大凶"=> 0, "凶"=> 1, "半凶"=> 2, "平"=>4);
        return $arr[$sc];
    }
function sancaijx($sancai){
    $user=M('sancai');
$rs=$user->where(array('title'=>$sancai))->select();
        if(false!==$rs){
            return $rs;
        }
        else {

            return '';
        }
    }


/* 汉字（繁体）康熙笔画 */
function getnum($txt)
{   if ($txt!=""){
$user=M('bihua');
    $map['hanzi']=array('like','%'.$txt.'%');
    $rs = $user->where($map)->select();
if(null !== $rs){
    return $rs[0]['num'];
}
else {
    return 0;
}
}else {
    return "";
}
}
/*根据年龄的称呼  */
function chenghu($nian1){
$userll=date("Y", $nowTime) - $nian1;;
if ($userll<=12) {
    $cf="可爱的";
}elseif ($userll>12 and $userll<=50) {
    $cf="亲爱的";
}elseif ($userll>50) {
    $cf="尊敬的";
}
return $cf;
}
/* 三命通会 */
function smtf($dgz,$tgz){

    $user=M('smtf');
    $rs=$user->where(array('ri'=>$dgz,'shi'=>$tgz))->select();
    if(false!==$rs){
        return $rs;
    }
    else {

        return '';
    }

}

/* 上辈为人 */
function sbwr($num){
    $user=M('sbwr');
    $rs=$user->where(array('num'=>$num))->select();
    if (false!== $rs){
    return $rs;
}
else {
    return '';
}
   }
/* 姓氏起源 */

   function xsqy($xing){
       $user=M('xing');
       $rs=$user->where(array('xing'=>$xing))->select();
       if (false!== $rs){
           return $rs[0]['intro'];
       }
       else {
           return '';
       }

   }

/*  日月时命里*/
function rysmn($yue2,$ri2,$hh2){
    $user=M('rysmn');
    $rs1=$user->where(array('siceng'=>$yue2.'月',))->select();
    $rs2=$user->where(array('siceng'=>$ri2.'日',))->select();
    $rs3=$user->where(array('siceng'=>$hh2.'时',))->select();
    $rs=array($rs1[0]['mingmi'],$rs2[0]['mingmi'],$rs3[0]['mingmi']);
    if(false!==$rs){
        return $rs;
    }
    else {

        return '';
    }

    }

/* 农历时 */
function DiZhi($hh)
{
    $arr = array("子", "丑","丑","寅","寅","卯","卯","辰","辰","巳","巳","午","午","未","未","申","申","酉","酉","戌","戌","亥","亥","子");
    return $arr[$hh];
}
/* 乾造，坤造 */
function bz_sex($xingbie){
    if($xingbie=="男"){
        $bz_sex="乾造";
    }
    else {
        $bz_sex="坤造";
    }
return $bz_sex;
}
/* 通过生日获取属性 */
function sx($y,$m,$d){
    $caltime=$y."-".$m."-".$d.'0'.":".'0'.":"."0";
    $sx=hhcal($caltime);
    $sx = explode('|',$sx);
    return $sx[3];
}
