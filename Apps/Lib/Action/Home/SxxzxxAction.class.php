<?php
class SxxzxxAction extends Action{
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
        var_dump($_POST);

    $this->display();
 }
 /* 星座保健 */
 public function other(){
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
   if ($_REQUEST['str']=='bj'){

   }

     $this->display();

 }
}