<?php
class SxxzxxAction extends Action{

    /*生肖/星座/血型主页  */
    public function index(){
        /* 如果已经写过资料 */
       $xing=$_SESSION['xing'];//姓名，年月日
       $ming=$_SESSION['ming'];
       $nian1=$_SESSION['nian'];
       $yue1=$_SESSION['yue'];
       $ri1=$_SESSION['ri'];
       $xuexing=$_SESSION['xuexing'];//血型
       $sx=sx(nian1, $yue1, $ri1);//获取属性
       $this->assign('sx',$sx)->assign("xuexing",$xuexing);
       $myxz=Constellation($nian1."-".$yue1."-".$ri1);//日期计算星座
       $this->assign('xing',$xing)->assign('ming',$ming)->assign('nian1',$nian1) ->assign('yue1',$yue1)->assign('ri1',$ri1)->assign('myxz',$myxz);
        /* 年 */
        $year = getYear ();
        $years = array ();
        for($i = 1950; $i <= $year; $i ++) {
            $years [] = $i;
        }
        $years = array_reverse ( $years );
        $this->assign ( 'years', $years );
        /* 月 */
        $months = months ();
        $this->assign ( 'months', $months );
        /* 日 */
        $days = days ();
        $this->assign ( 'days', $days );
        $thisYear= Date('Y');//现在的年月日
        $thisMonth= Date('m');
        $thisDay= Date('d');
        $this->assign('_thisYear',$thisYear)->assign('_thisMonth',$thisMonth)->assign('_thisDay',$thisDay);
        /*查询  */
        if (isset($_POST['y'])){
            $myxz1=Constellation($_POST['y']."-".$_POST['m']."-".$_POST['d']);
            $this->assign("myxz1",$myxz1);
        }
        /* 判断链接查询 */
        if ( isset($_REQUEST['flag'])) {
            $flag=$_REQUEST['flag'];
            if ($flag==1) {
                $astro_m=$_REQUEST['astro_m'];
                $astro_f=$_REQUEST['astro_f'];
                $title = "速配结果 " . $astro_m . " .vs." . $astro_f;
            } elseif ($flag==2) {
                $astro_m=$_REQUEST['astro_m'];
                $astro_f=$_REQUEST['astro_f'];
                $title = $astro_m . "--" . $astro_f;
            } elseif ($flag==3) {
                $xiao_m=$_REQUEST['xiao_m'];
                $xiao_f=$_REQUEST['xiao_f'];
                $title = $xiao_m . "+" . $xiao_f;
            } elseif ($flag==4) {
                $title=$_REQUEST['astro'];
            } elseif ($flag==5) {
                $title = "属" . $_REQUEST['xiao'] . "人的性格";
            } elseif ($flag==6) {
                $title = $_REQUEST['xuexing'] . "型血人的性格特征";
            } elseif ($flag==7) {
                $title = $_REQUEST['blood'] . "型" . $_REQUEST['astro'];
            } elseif ($flag==8) {
                $title = $_REQUEST['m'] . "月" . $_REQUEST['d'] . "日" . $_REQUEST['flag1'];
            } elseif ($flag==9) {
                $title = $_REQUEST['11-1'] . "落在" . $_REQUEST['11-2'];
            } elseif ($flag==10) {
                $title = $_REQUEST['12-1'] . "落在" . $_REQUEST['12-2'];
            } elseif ($flag==11) {
                $title = $_REQUEST['star1'] . "与" . $_REQUEST['star2'] . "呈" . $_REQUEST['13-3'];
            } elseif ($flag==12) {
                if ((int)date('Y', time()+30*24*60*60) > $thisYear) {
                    $thisYear = date('Y', time()+30*24*60*60);
                    $this->assign('_thisYear', $thisYear);
                }
                $title = $thisYear . "年十二生肖运势--" . $_REQUEST['sx'];
            }
            $content=xxs($title);
            $this->assign('content',$content)->assign('title',$title);
            $this->display('content');
            return ;
    }

    $this->display();
 }
 /* 星座保健页面到星座5大建议页面 */
 public function other(){
     $nian1=$_SESSION['nian'];
     $yue1=$_SESSION['yue'];
     $ri1=$_SESSION['ri'];
     /* 年 */
     $year = getYear ();
     $years = array ();
     for($i = 1950; $i <= $year; $i ++) {
         $years [] = $i;
     }
     $years = array_reverse ( $years );
     $this->assign ( 'years', $years );
     /* 月 */
     $months = months ();
     $this->assign ( 'months', $months );
     /* 日 */
     $days = days ();
     $this->assign ( 'days', $days );
     $myxz=Constellation($nian1."-".$yue1."-".$ri1);//星座查询
     if (isset($_POST['y'])){
         $myxz=Constellation($_POST['y']."-".$_POST['m']."-".$_POST['d']);
         $_SESSION['myxz']=$myxz;
     }
     if(isset($_SESSION['myxz'])){
         $myxz=$_SESSION['myxz'];
     }

     $this->assign("myxz",$myxz);
     /* 星座保健页面 */
   if ($_REQUEST['str']=='bj'){
       $rs=xz_bj($myxz);
       $this->assign("title",$rs['1'])->assign('content',$rs['0']);
   }
   elseif($_REQUEST['str']=='eq'){
       $rs=xz_eq($myxz);
       $this->assign("title",$rs['1'])->assign('content',$rs['0']);

   }
   elseif($_REQUEST['str']=='iq'){
       $rs=xz_iq($myxz);
       $this->assign("title",$rs['1'])->assign('content',$rs['0']);

   }
   elseif($_REQUEST['str']=='mr'){
       $rs=xz_mr($myxz);
       $this->assign("title",$rs['1'])->assign('content',$rs['0']);

   }
   elseif($_REQUEST['str']=='sy'){
       $rs=xz_sy($myxz);
       $this->assign("title",$rs['1'])->assign('content',$rs['0']);

   }
   elseif($_REQUEST['str']=='sl'){
       $rs=xz_sl($myxz);
       $this->assign("title",$rs['1'])->assign('content',$rs['0']);

   }
   elseif($_REQUEST['str']=='jy'){
       $rs=xz_jy($myxz);
       $this->assign("title",$rs['1'])->assign('content',$rs['0']);

   }
     $this->display();

 }
 public function xzyc(){
     global $astroInfo;
     $xing=$_SESSION['xing'];//姓名，年月日
     $ming=$_SESSION['ming'];
     $nian1=$_SESSION['nian'];
     $yue1=$_SESSION['yue'];
     $ri1=$_SESSION['ri'];
     $this->assign('xing',$xing)->assign('ming',$ming)->assign('nian1',$nian1)->assign('yue1',$yue1)->assign('ri1',$ri1);
     $yctype=strtolower(isset($_REQUEST['type'])?$_REQUEST['type']:'today');
     $xz= isset($_REQUEST['xz'])?$_REQUEST['xz']:'';
     if ($xing<>"") {
         $myxz=Constellation($nian1 . '-' . $yue1 . '-' . $ri1);

              } else{
         $myxz="牡羊座";
     }
     switch (strtolower($yctype)) {
         case "nextday":
             $table = 'xzysnextday';
             $update_date = date('Y-m-d 00:00:00', $nowTime);
             $inc_file = 'sinaUpdateTomorrow.php';
             break;
         case "week":
             $table = 'xzysweek';
             $update_date = date('Y-m-d 00:00:W', $nowTime);
             $inc_file = 'sinaUpdateWeek.php';
             break;
         case "month":
             $table = 'xzysmonth';
             $update_date = date('Y-m-01 00:00:00', $nowTime);
             $inc_file = 'sinaUpdateMonth.php';
             break;
         case "year":
             $table = 'xzysyear';
             $update_date = date('Y-01-01 00:00:00', $nowTime);
             $inc_file = 'sinaUpdateYear.php';
             break;
         case "yearlove":
             $table = 'xzysaqyear';
             $update_date = date('Y-01-01 00:00:00', $nowTime);
             $inc_file = 'sinaUpdateYearLove.php';
             break;
         default:
             $table = 'xzysday';
             $update_date = date('Y-m-d 00:00:00', $nowTime);
             $inc_file = 'sinaUpdateToday.php';
             break;
     }

     $loop=2;
     while($loop-->0)

     {
     if($xz<>"") {
         $user=M("$table");
         $rs=$user->where(array('id'=>$xz))->select();
         $rs=$rs[0];

     } else {
         $user=M("$table");
         $rs=$user->where(array('xzmc'=>$myxz))->select();
         $rs=$rs[0];


     }
     $goToUpdate = true;
     if(!$rs || $rs[0]['update_date']!=$update_date && $goToUpdate)

      {
         $goToUpdate = false;
         if ($xz<>"" && isset($astroInfo[$xz-1])){
             $update_xz = $xz-1;
         } elseif (false===($update_xz =array_search($myxz, $astroInfo))) {
             unset($update_xz);
         }

         include_once(APP_PATH.'Common/' . $inc_file);

     } else {
         break;
     }
     }
     var_dump($xing);
     $this->assign('myxz',$myxz);
     $this->assign('yctype', $yctype);
     $this->assign('xz', $xz);
     $this->assign('rs', $rs);
     $this->display();

 }
}