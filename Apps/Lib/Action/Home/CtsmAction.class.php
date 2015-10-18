<?php
header('Content-Type: text/html;charset=utf-8');
class CtsmAction extends Action
{
  /*资料检查判断  */
    public function check(){

            /* 检验资料 */
            if($_POST ['xing']==''){
                $error_message="【姓】不能为空！";
                $check_status=false;
            }
            elseif(!preg_match("/^[\x{4e00}-\x{9fa5}]+$/u",$_POST ['xing'])){
                $error_message="请输入中文【姓】！";
                $check_status=false;
            }
            elseif (mb_strlen($_POST ['xing'],'UTF8')>2 ){
                $error_message="【姓】最多为2个字！";
                $check_status=false;
            }
            elseif($_POST ['ming']==''){
                $error_message="【名】不能为空！";
                $check_status=false;
            }
            elseif(!preg_match("/^[\x{4e00}-\x{9fa5}]+$/u",$_POST ['xing'])){
                $error_message="请输入中文【名】！";
                $check_status=false;
            }
            elseif (mb_strlen($_POST ['ming'],'UTF8')>2 ){
                $error_message="【名】最多为2个字！";
                $check_status=false;
            }
            elseif ($_POST['xingbie']==''){
                $error_message="请选择【性别】！";
                $check_status=false;
            }
            elseif ($_POST['xuexing']==''){
                $error_message="请选择【血型】！";
                $check_status=false;
            }
            else {
                $error_message="操作成功";
                $check_status=true;
            }


            if ($check_status===true){
                /* 把资料的值写到session中  */
                $_SESSION ['xing'] = $_POST ['xing'] ;
                $_SESSION ['ming'] =  $_POST ['ming'] ;
                $_SESSION ['xingbie'] =  $_POST ['xingbie'] ;
                $_SESSION ['xuexing'] = $_POST ['xuexing'] ;
                $_SESSION ['nian'] =  $_POST ['nian'];
                $_SESSION ['yue'] = $_POST ['yue'];
                $_SESSION ['ri'] = $_POST ['ri'] ;
                $_SESSION ['hh'] =  $_POST ['hh'];
                $_SESSION ['mm'] =  $_POST ['mm'];
            }
            /* 数据格式变为json  */
           $error_message= json_encode($error_message);
            echo $error_message; return;
        }

   /* 传统算命首页 */
    public function index () {
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
        /* 小时 */
        $hours = hours ();
        $this->assign ( 'hours', $hours );
        /* 分钟 */
        $mins = mins ();
        $this->assign ( 'mins', $mins );
        $thisYear= Date('Y');//现在的年月日
        $thisMonth= Date('m');
        $thisDay= Date('d');
     $this->assign('_thisYear',$thisYear)->assign('_thisMonth',$thisMonth)->assign('_thisDay',$thisDay);

        /*判断是否填写资料  */
     if (

             $_SESSION ['xing'] != ""
             && $_SESSION ['ming'] != ""
             && $_SESSION ['xingbie'] != ""
             && $_SESSION ['nian'] != ""
             && $_SESSION ['yue'] != ""
             && $_SESSION ['ri'] != ""
             && $_SESSION ['hh'] != "" )
      {

         $_message = "-----算命人的资料--------";
         $this->assign ( 'message', $_message );
         /*重新算命，销毁session*/
         if ($_POST['restart']==1){
             _restart();
             echo "<script language=JavaScript> location.replace(location.href);</script>";
         }

         $this->display ( 'start' );
     }
else {
        $this->display ( '' );
    }
    }
    /* 生辰八字页面 */
    public function scbz(){
        if(checkSession()){
            $this->assign('nian1',get_nian());//公历年
            $this->assign('yue1',get_yue());//公历月
            $this->assign('ri1',get_ri());//公里日
            $this->assign('hh1',get_hh());//小时
            $this->assign('xing1',mb_substr(get_xing(),0,1,'utf-8'));//姓名第一个字
            $this->assign('ming1',mb_substr(get_ming(),0,1,'utf-8'));//姓名第二个字
            $this->assign('xing2',mb_substr(get_xing(),1,1,'utf-8'));//名第一个字
            $this->assign('ming2',mb_substr(get_ming(),1,1,'utf-8'));//名第二个字
            $caltime= caltime();//设置时间格式，获取时间戳；
            $nonglist= hhcal($caltime);//获取农历数据
            $nongarray = explode('|',$nonglist);//分割数据
            $nian2=$nongarray[0];//农历年，传入模板
            $this->assign('nian2',$nian2);
            $yue2=$nongarray[1];//农历月，传入模板
            $this->assign('yue2',$yue2);
            $ri2=$nongarray[2];//农历日，传入模板
            $this->assign('ri2',$ri2);
            $sx=$nongarray[3];//属性，传入模板
            $this->assign('sx',$sx);
            $hh2=DiZhi(get_hh());//农历时，传入模板
            $this->assign('hh2',$hh2);
            $layin=layin($nian2);//根据天干地支,算命(纳音)结果
            $this->assign('layin',$layin);
            $ygz=$nian2;//八字，年干支(和农历年一样)；
            $this->assign('ygz',$ygz);
        /*获取八字 */
            $nian1=get_nian();
            $yue1=get_yue();
            $ri1=get_ri();
            $hh1=get_hh();
            $bz=bz($nian1, $yue1, $ri1,$hh1);
            $this->assign('bz',$bz);
         /*五行 旺缺和个数 */
            $bzwh = tgdzwh($bz['yg'])//天干地支五行总数
            . tgdzwh($bz['yz'])
            . tgdzwh($bz['mg'])
            . tgdzwh($bz['mz'])
            . tgdzwh($bz['dg'])
            . tgdzwh($bz['dz'])
            . tgdzwh($bz['tg'])
            . tgdzwh($bz['tz']);
           // $this->assign('bzwh', $bzwh);
           /*开始计算各金木水火土个数  */
            $mainw = '';
            $mainq = '';
            $wnum1 =substr_count($bzwh, '金');
            if ($wnum1>=3)
                $mainw=$mainw . "<strong>金</strong>旺";
            elseif ($wnum1==0)
            $mainq=$mainq . "缺<strong>金</strong>";

            $wnum2 =substr_count($bzwh, '木');
            if ($wnum2>=3)
                $mainw=$mainw . "<strong>木</strong>旺";
            elseif ($wnum2==0)
            $mainq=$mainq . "缺<strong>木</strong>";

            $wnum3 =substr_count($bzwh, '水');
            if ($wnum3>=3)
                $mainw=$mainw . "<strong>水</strong>旺";
            elseif ($wnum3==0)
            $mainq=$mainq . "缺<strong>水</strong>";

            $wnum4 =substr_count($bzwh, '火');
            if ($wnum4>=3)
                $mainw=$mainw . "<strong>火</strong>旺";
            elseif ($wnum4==0)
            $mainq=$mainq . "缺<strong>火</strong>";

            $wnum5 =substr_count($bzwh, '土');
            if ($wnum5>=3)
                $mainw=$mainw . "<strong>土</strong>旺";
            elseif ($wnum5==0)
            $mainq=$mainq . "缺<strong>土</strong>";
            $this->assign('mainq',$mainq);//五行缺什么
            $this->assign('mainw',$mainw);//五行旺什么
            $this->assign('wnum1',$wnum1);//金个数
            $this->assign('wnum2',$wnum2);//木个数
            $this->assign('wnum3',$wnum3);//水个数
            $this->assign('wnum4',$wnum4);//火个数
            $this->assign('wnum5',$wnum5);//土个数
    /*五行算命  */
            $wxarray=wuxing(tgdzwh($bz['dg']));
            $this->assign('wh',$wxarray[0]['wh']);//五行
            $this->assign('tnwh',$wxarray[0]['tnwh']);//五行同性
            $this->assign('ynwh',$wxarray[0]['ynwh']);//五行异性
            $this->assign('skzhyj',$wxarray[0]['skzhyj']);//五行生克制化宜忌
            $this->assign('whzx',$wxarray[0]['whzx']);//五行之性
            $this->assign('szwh',$wxarray[0]['szwh']);//四柱五行生克中对应需补的脏腑和部位
            $this->assign('hyhw',$wxarray[0]['hyhw']);//宜从事行业与方位
     /*  四季用神参考 */
            $sjrs=sjrs($wxarray[0]['wh'],siji(get_yue()));
            $this->assign('sjrs',$sjrs[0]['sjrs']);
     /*  穷通宝鉴调候用神参考*/

           $qtbj= qtbj($bz['dg'], $bz['mz']);
            $this->assign('mz',$bz['mz']);
            $this->assign('qtbj',$qtbj[0]['content']);
     /*  生肖个性  */
             $sxgx=sxgx($sx);
           $this->assign('sxgx',$sxgx[0]['sxgx']);
     /*   日干心性 */
           $rgnm=rgnm($bz['dgz']);
           $this->assign('rgxx',$rgnm[0]['rgxx']);
           $this->assign('rgcz',$rgnm[0]['rgcz']);
           $this->assign('rgzfx',$rgnm[0]['rgzfx']);
           /* 三命通会 */
        $smtf=smtf($bz['dgz'],$bz['tgz']);
          $this->assign('tf1',$smtf[0][tf1]);
          $this->assign('tf2',$smtf[0][tf2]);
       /*  日月时命里*/
          $rysmn=rysmn($yue2, $ri2, $hh2);
           $this->assign( 'mingni1',$mingni1=$rysmn[0]);
           $this->assign( 'mingni2',$mingni2=$rysmn[1]);
           $this->assign( 'mingni3',$mingni3=$rysmn[2]);
           $this->display();
        }
        else {

           $this->success('算命人资料填写不完整，请填写完整后进入！将跳转到主页', 'index.php?g=home&m=ctsm&a=index',5);
        }


   }
    /* 八字测算页面 */
    public function bzcs(){
        if(checkSession()){
        $bz_sex=bz_sex(get_xingbie());//乾造or坤造
        $this->assign('bz_sex', $bz_sex);
        $nian1=get_nian();
        $yue1=get_yue();
        $ri1=get_ri();
        $hh1=get_hh();
        $bz=bz($nian1, $yue1, $ri1, $hh1);
        $ygz=$bz['ygz'];//八字
        $mgz=$bz['mgz'];
        $dgz=$bz['dgz'];
        $tgz=$bz['tgz'];
        $qyjs=$bz['qyjs'];
        $dayun=$bz['dayun'];
        $text=$ygz."&nbsp".$mgz."&nbsp".$dgz."&nbsp".$tgz."&nbsp".$qyjs."岁命";
        $this->assign('text',$text);
        $this->assign('dayun',$dayun);//大运
        $xgfx=xgfx(get_yue(), get_ri());//性格分析
        $this->assign('xgfx',$xgfx);
        $mzjp=$bz['mzjp'];//命造简批:
        $this->assign('mzjp',$mzjp);

      $this->display('');
    }
      else{
       $this->success('算命人资料填写不完整，请填写完整后进入！将跳转到主页', 'index.php?g=home&m=ctsm&a=index',5);
      }
}
    /* 日干论命页面 */
    public function rglm(){
        if(checkSession()){
        $this->assign('nian1',get_nian());//公历年
        $this->assign('yue1',get_yue());//公历月
        $this->assign('ri1',get_ri());//公里日
        $this->assign('hh1',get_hh());//小时
        $this->assign('xing1',mb_substr(get_xing(),0,1,'utf-8'));//姓第一个字
        $this->assign('ming1',mb_substr(get_ming(),0,1,'utf-8'));//名第一个字
        $this->assign('xing2',mb_substr(get_xing(),1,1,'utf-8'));//姓第二个字
        $this->assign('ming2',mb_substr(get_ming(),1,1,'utf-8'));//名第二个字
        $caltime= caltime();//设置时间格式，获取时间戳；
        $nonglist= hhcal($caltime);//获取农历数据
        $nongarray = explode('|',$nonglist);//分割数据
        $nian2=$nongarray[0];//农历年，传入模板
        $this->assign('nian2',$nian2);
        $yue2=$nongarray[1];//农历月，传入模板
        $this->assign('yue2',$yue2);
        $ri2=$nongarray[2];//农历日，传入模板
        $this->assign('ri2',$ri2);
        $sx=$nongarray[3];//属性，传入模板
        $this->assign('sx',$sx);
        $hh2=DiZhi(get_hh());//农历时，传入模板
        $this->assign('hh2',$hh2);
        $layin=layin($nian2);//根据天干地支,算命(纳音)结果
        $this->assign('layin',$layin);
        $ygz=$nian2;//八字，年干支(和农历年一样)；
        $this->assign('ygz',$ygz);
        /*获取八字 */
        $nian1=get_nian();
        $yue1=get_yue();
        $ri1=get_ri();
        $hh1=get_hh();
        $bz=bz($nian1, $yue1, $ri1,$hh1);
        $this->assign('bz',$bz);
        /*五行 旺缺和个数 */

        $bzwh = tgdzwh($bz['yg'])//天干地支五行总数
        . tgdzwh(newtrim($bz['yz']))
        . tgdzwh($bz['mg'])
        . tgdzwh($bz['mz'])
        . tgdzwh($bz['dg'])
        . tgdzwh($bz['dz'])
        . tgdzwh($bz['tg'])
        . tgdzwh($bz['tz']);
        // $this->assign('bzwh', $bzwh);
        /*开始计算各金木水火土个数  */
        $mainw = '';
        $mainq = '';
        $wnum1 =substr_count($bzwh, '金');
        if ($wnum1>=3)
            $mainw=$mainw . "<strong>金</strong>旺";
        elseif ($wnum1==0)
        $mainq=$mainq . "缺<strong>金</strong>";

        $wnum2 =substr_count($bzwh, '木');
        if ($wnum2>=3)
            $mainw=$mainw . "<strong>木</strong>旺";
        elseif ($wnum2==0)
        $mainq=$mainq . "缺<strong>木</strong>";

        $wnum3 =substr_count($bzwh, '水');
        if ($wnum3>=3)
            $mainw=$mainw . "<strong>水</strong>旺";
        elseif ($wnum3==0)
        $mainq=$mainq . "缺<strong>水</strong>";

        $wnum4 =substr_count($bzwh, '火');
        if ($wnum4>=3)
            $mainw=$mainw . "<strong>火</strong>旺";
        elseif ($wnum4==0)
        $mainq=$mainq . "缺<strong>火</strong>";

        $wnum5 =substr_count($bzwh, '土');
        if ($wnum5>=3)
            $mainw=$mainw . "<strong>土</strong>旺";
        elseif ($wnum5==0)
        $mainq=$mainq . "缺<strong>土</strong>";
        $this->assign('mainq',$mainq);//五行缺什么
        $this->assign('mainw',$mainw);//五行旺什么
        $this->assign('wnum1',$wnum1);//金个数
        $this->assign('wnum2',$wnum2);//木个数
        $this->assign('wnum3',$wnum3);//水个数
        $this->assign('wnum4',$wnum4);//火个数
        $this->assign('wnum5',$wnum5);//土个数
        $wxarray=wuxing(tgdzwh($bz['dg']));
        $this->assign('wh',$wxarray[0]['wh']);//五行
        $this->assign('tnwh',$wxarray[0]['tnwh']);//五行同性
        $this->assign('ynwh',$wxarray[0]['ynwh']);//五行异性
        /*  生肖个性  */
         $sxgx=sxgx($sx);
         $this->assign('sxgx',$sxgx[0]['sxgx']);
         $rgnm=rgnm($bz['dgz']);//日干论命
        $this->assign('xgfx',$rgnm[0]['xgfx']);
        $this->assign('aqfx',$rgnm[0]['aqfx']);
        $this->assign('syfx',$rgnm[0]['syfx']);
        $this->assign('cyfx',$rgnm[0]['cyfx']);
        $this->assign('jkfx',$rgnm[0]['jkfx']);

        $this->display('');
        }
        else{
            $this->success('算命人资料填写不完整，请填写完整后进入！将跳转到主页', 'index.php?g=home&m=ctsm&a=index',5);
        }
    }

    /* 称骨论命页面*/
    public function cglm(){
        if(checkSession()){
        $this->assign('xing',get_xing());//姓名
        $this->assign('ming',get_ming());
        $this->assign('cf',chenghu(get_nian()));//根据年龄的称呼
        $nonglist= hhcal($caltime);//获取农历数据
        $nongarray = explode('|',$nonglist);//分割数据
        $nian2=$nongarray[0];//农历年
        $yue2=$nongarray[1];//农历月
        $ri2=$nongarray[2];//农历日
        $hh2=DiZhi(get_hh());//农历时
        $cglm=cglm(get_nian(), $yue2, $ri2, get_hh());
        $this->assign('weight',$cglm[0]);//骨重
        $this->assign('chenggucontent',$cglm[1]);//结果1
        $this->assign('intro',$cglm[2]);//结果2
     $this->display('');
        }else{
         $this->success('算命人资料填写不完整，请填写完整后进入！将跳转到主页', 'index.php?g=home&m=ctsm&a=index',5);
        }
    }
    /* 姓名测试页面 */
    public function xmcs(){
       if(checkSession()){
      $xing1=mb_substr(get_xing(),0,1,'utf-8');//姓第一个字
      $this->assign('xing1',$xing1);
      $xing2=mb_substr(get_xing(),1,1,'utf-8');//姓第二个字
      $this->assign('xing2',$xing2);
      $ming1=mb_substr(get_ming(),0,1,'utf-8');//名第一个字
      $this->assign('ming1',$ming1);
      $ming2=mb_substr(get_ming(),1,1,'utf-8');//名第二个字
      $this->assign('ming2',$ming2);
      /*  三才计算(天 ，地，人 ，格) */
    $bihua1=0; $bihua2=0; $bihua3=0; $bihua4=0;
    $bihua1=getnum($xing1);
    $tiange=$bihua1+1;
    $renge1=$bihua1;
    if ($xing2 !=""){
        $bihua2=getnum($xing2);
        $tiange=$bihua1+$bihua2;
       // $tiangee=$bihua1+$bihua2;
        $renge1=$bihua2 ;
    }
    $bihua3=getnum($ming1);
    $dige=$bihua3+1;
    $renge2=$bihua3;
    if ($ming2 !=""){
        $bihua4=getnum($ming2);
        $dige=$bihua3+$bihua4;
    }

    $zhongge=$bihua1+$bihua2+$bihua3+$bihua4;
    $renge=$renge1+$renge2;
    $waige=$zhongge-$renge;
    if ($xing2 == "") {
        $waige=$waige+1;
        $waigee=$waigee+1;
    }
    if ($ming2 == ''){
        $waige=$waige+1;
        $waigee=$waigee+1;
    }
    $this->assign('tiange',$tiange);
    $this->assign('dige',$dige);
    $this->assign('zhongge',$zhongge);
    $this->assign('renge',$renge);
    $this->assign('waige',$waige);
    /*  天地人格算命 */
    /* 天格 */
    $tgsm=sancaism($tiange);
    $this->assign('tgyy',$tgsm[0]['yy']);
    $tgjx=$tgsm[0]['jx'];
    $this->assign('tgjx',$tgjx);
    $this->assign('tgas',$tgsm[0]['as']);
    $this->assign('tgxx',$tgsm[0]['content']);
    /*人格  */
    $rgsm=sancaism($renge);
    $this->assign('rgyy',$rgsm[0]['yy']);
    $rgjx=$rgsm[0]['jx'];
    $this->assign('rgjx',$rgjx);
    $this->assign('rgas',$rgsm[0]['as']);
    $this->assign('rgxx',$rgsm[0]['content']);
    /* 地格 */
    $dgsm=sancaism($dige);
    $this->assign('dgyy',$dgsm[0]['yy']);
    $dgjx=$dgsm[0]['jx'];
    $this->assign('dgjx',$dgjx);
    $this->assign('dgas',$dgsm[0]['as']);
    $this->assign('dgxx',$dgsm[0]['content']);
    /* 总格 */
    $zgsm=sancaism($zhongge);
    $this->assign('zgyy',$zgsm[0]['yy']);
    $zgjx=$zgsm[0]['jx'];
    $this->assign('zgjx',$zgjx);
    $this->assign('zgas',$zgsm[0]['as']);
    $this->assign('zgxx',$zgsm[0]['content']);
    /* 外格  */
    $wgsm=sancaism($waige);
    $this->assign('wgyy',$wgsm[0]['yy']);
    $wgjx=$wgsm[0]['jx'];
    $this->assign('wgjx',$wgjx);
    $this->assign('wgas',$wgsm[0]['as']);
    $this->assign('wgxx',$wgsm[0]['content']);
    $sancai=getsancai($tiange) . getsancai($renge) . getsancai($dige);
    $this->assign('sancai',$sancai);
    /* 三才算命 */
  $rs=sancaijx($sancai);
  $sancaicontent=$rs[0]['content'];
  $scyy=$rs[0]['yy'];
  $scjx=$rs[0]['jx'];
  $jcy=$rs[0]['jcy'];
  $jcyjx=$rs[0]['jx1'];
  $cgy=$rs[0]['cgy'];
  $cgyjx=$rs[0]['jx2'];
  $rjgx=$rs[0]['rjgx'];
  $rjgxjx=$rs[0]['jx3'];
  $xg=$rs[0]['xg'];
  $this->assign('sancaicontent',$sancaicontent);
  $this->assign('scyy',$scyy);
  $this->assign('scjx',$scjx);
  $this->assign('jcy',$jcy);
  $this->assign(' jcyjx', $jcyjx);
  $this->assign('cgy',$cgy);
  $this->assign('cgyjx',$cgyjx);
  $this->assign('rjgx', $rjgx);
  $this->assign('rjgxjx',$rjgxjx);
  $this->assign('xg',$xg);
  /*总评及建议吉凶  */
  $xmdf=intval(getpf($tgjx)/10) + intval(getpf($rgjx)) + intval(getpf($dgjx))
  + intval(getpf($zgjx)) + intval(getpf($wgjx)/10) +
  intval(getpf($scjx)/4) + intval(getpf(substr($jcyjx, 0, 2))/4) +
  intval(getpf($cgyjx)/4) + intval(getpf($rjgxjx)/4);
  if ($zhonggee>60) {
      $xmdf=$xmdf-5;
  }
  $xmdf=50+$xmdf;
  $this->assign('xmdf',$xmdf);


  $this->display("");
       }else{
            $this->success('算命人资料填写不完整，请填写完整后进入！将跳转到主页', 'index.php?g=home&m=ctsm&a=index',5);
       }

    }
    /* 姓名配对页面 */
    public function xmpd(){
        $xing1=mb_substr(get_xing(),0,1,'utf-8');//姓第一个字
        $this->assign('xing1',$xing1);
        $xing2=mb_substr(get_xing(),1,1,'utf-8');//姓第二个字
        $this->assign('xing11',$xing2);
        $ming1=mb_substr(get_ming(),0,1,'utf-8');//名第一个字
        $this->assign('ming1',$ming1);
        $ming2=mb_substr(get_ming(),1,1,'utf-8');//名第二个字
        $this->assign('ming11',$ming2);
        $this->assign('xingbie',get_xingbie());
        $year=getYear ();//选择年份
      for($i = 1950; $i <= $year; $i ++) {
            $years [] = $i;
        }
        $years = array_reverse ( $years );
        $this->assign('years',$years);
         $months = months ();
        $this->assign ( 'months', $months );
        /* 日 */
        $days = days ();
        $this->assign ( 'days', $days );
        /* 小时 */
        $hours = hours ();
        $this->assign ( 'hours', $hours );
        /* 分钟 */
        $mins = mins ();
        $this->assign ( 'mins', $mins );
        /* 设置初始变量 */
        $tiange=0;
        $dige=0;
        $renge1=0;
        $renge2=0;
        $renge=0;
        //'姓;
        $bihua1=0;
        $bihua2=0;
        $bihua3=0;
        $bihua4=0;
        /*判断提交的数据  */
        /* 计算方法
1、天格：单姓的天格是“单姓笔画+1”，复姓的天格是“复姓笔画数相加”
2、人格：单姓的人格是“姓的笔画数+名（第一字）的笔画数”，；复姓的人格数理是“复姓的第二个字笔画+名的第一个字笔画”
3、地格：双名的地格是“名字的笔画数相加”，单名的地格是“名的笔画数+1”。
4、总格：总格是“姓名笔画数的总和”。
5、外格：单姓“姓名总格减去人格之差再加1”；复姓“将姓名总格减去人格之差”即为外格。
注：单姓单名的外格为2，复姓单名的地格为“总格数理-人格数理+1”。 */
        if ($_POST==null){

        }
        else {
            $this->assign('message',2);
            $this->assign('name1',$_POST['name1']);
            if ($_POST['xing1']==1)//单姓
            {
            $nxing1=mb_substr($_POST['name1'],0,1,'utf-8');
            $this->assign('nxing1',$nxing1);
            $this->assign('nxing2',"");
            $this->assign('nming1',mb_substr($_POST['name1'],1,1,'utf-8'));
            $this->assign('nming2',mb_substr($_POST['name1'],2,1,'utf-8'));
            $bihua1=getnum($nxing1);
            $tiange1=$bihua1+1;
            $this->assign('tiange1',$tiange1);//天格
            $rs=sancaism($tiange1);
            $this->assign('tgjx',$rs[0]['jx']);//天格吉凶
            $tgf1=getpf($rs[0]['jx']);
            $bihua3=getnum(mb_substr($_POST['name1'],1,1,'utf-8'));
            $renge1=$bihua1+$bihua3;//人格
            $this->assign('renge1',$renge1);
            $rs=sancaism($renge1);
            $this->assign('rgjx',$rs[0]['jx']);//人格吉凶
            $rgf1=getpf($rs[0]['jx']);
             if(mb_substr($_POST['name1'],2,1,'utf-8')=='')//地格
                {
                    $dige1 = $bihua3+1;
                    $waige1=2;//外格
                }else{
                    $bihua4=getnum(mb_substr($_POST['name1'],2,1,'utf-8'));
                    $dige1 = $bihua3+$bihua4;
                    $waige1=$zhongge1-$renge1+1;//外格
                }
                $rs=sancaism($dige1);
                $this->assign('dgjx',$rs[0]['jx']);//地格吉凶
                $dgf1=getpf($rs[0]['jx']);
                $this->assign('dige1',$dige1);
                $zhongge1=$bihua1+$bihua2+$bihua3+$bihua4;//总格
                $rs=sancaism($zhongge1);
                $this->assign('zgjx',$rs[0]['jx'])->assign('zhongge1',$zhongge1);//总格吉凶
                $zgf1=getpf($rs[0]['jx']);

                $rs=sancaism($waige1);
                $this->assign('wgjx',$rs[0]['jx'])->assign('waige1',$waige1);//外格吉凶
                $wgf1=getpf($rs[0]['jx']);
                $sancai1=getsancai($tiange1) . getsancai($renge1) . getsancai($dige1);//三才性格
                $rs=sancaijx($sancai1);
                $this->assign('xg1',$rs[0]['xg']);

            }
            if ($_POST['xing1']==2)//复姓
            {
                $this->assign('nxing1',mb_substr($_POST['name1'],0,1,'utf-8'));
                $this->assign('nxing2',mb_substr($_POST['name1'],1,1,'utf-8'));
                $this->assign('nming1',mb_substr($_POST['name1'],2,1,'utf-8'));
                $this->assign('nming2',mb_substr($_POST['name1'],3,1,'utf-8'));
                $bihua1=getnum(mb_substr($_POST['name1'],0,1,'utf-8'));
                $bihua2=getnum(mb_substr($_POST['name1'],1,1,'utf-8'));
                $bihua3=getnum(mb_substr($_POST['name1'],2,1,'utf-8'));
                $tiange1=$bihua1+$bihua2;
                $this->assign('tiange1',$tiange1);//天格
                $rs=sancaism($tiange1);
                $this->assign('tgjx',$rs[0]['jx']);//天格吉凶
                $tgf1=getpf($rs[0]['jx']);
                $renge1 = $bihua2+$bihua3;//人格
                $this->assign('renge1',$renge1);
                $rs=sancaism($renge1);
                $this->assign('rgjx',$rs[0]['jx']);//人格吉凶
                $rgf1=getpf($rs[0]['jx']);
                if(mb_substr($_POST['name1'],3,1,'utf-8')=='')//地格
                {
                    $dige1 = $bihua3+1;
                }else{
                    $bihua4=getnum(mb_substr($_POST['name1'],3,1,'utf-8'));
                    $dige1 = $bihua3+$bihua4;
                }
                $rs=sancaism($dige1);
                $this->assign('dgjx',$rs[0]['jx']);//地格吉凶
                $this->assign('dige1',$dige1);
                $dgf1=getpf($rs[0]['jx']);
                $zhongge1=$bihua1+$bihua2+$bihua3+$bihua4;//总格
                $rs=sancaism($zhongge1);
                $this->assign('zgjx',$rs[0]['jx'])->assign('zhongge1',$zhongge1);//总格吉凶
                $zgf1=getpf($rs[0]['jx']);
                $waige1=$zhongge1-$renge1;//外格
                $rs=sancaism($waige1);
                $this->assign('wgjx',$rs[0]['jx'])->assign('waige1',$waige1);//外格吉凶
                $wgf1=getpf($rs[0]['jx']);
                $sancai1=getsancai($tiange1) . getsancai($renge1) . getsancai($dige1);//三才性格
                $rs=sancaijx($sancai1);
                $this->assign('xg1',$rs[0]['xg']);

            }
            $sex1=$_POST['sex1'];//性别
            $this->assign('sex1',$sex1);
            $this->assign('y1',$_POST['y1']);
            $this->assign('m1',$_POST['m1']);
            $this->assign('d1',$_POST['d1']);
            $this->assign('h1',$_POST['h1']);
            $this->assign('f1',$_POST['f1']);
            $this->assign('name2',$_POST['name2']);
            $sex2=$_POST['sex2'];
            $this->assign('sex2',$sex2);
            $this->assign('y2',$_POST['y2']);
            $this->assign('m2',$_POST['m2']);
            $this->assign('d2',$_POST['d2']);
            $this->assign('h2',$_POST['h2']);
            $this->assign('f2',$_POST['f2']);
            if ($_POST['xing2']==1)//爱人单姓
            {
                $this->assign('nxing11',mb_substr($_POST['name2'],0,1,'utf-8'));
                $this->assign('nxing12',"");
                $this->assign('nming11',mb_substr($_POST['name2'],1,1,'utf-8'));
                $this->assign('nming12',mb_substr($_POST['name2'],2,1,'utf-8'));
                $bihua1=getnum(mb_substr($_POST['name2'],0,1,'utf-8'));
                $ntiange1=$bihua1+1;
                $this->assign('ntiange1',$ntiange1);//天格
                $rs=sancaism($ntiange1);
                $this->assign('ntgjx',$rs[0]['jx']);//天格吉凶
                $tgf2=getpf($rs[0]['jx']);
                $bihua3=getnum(mb_substr($_POST['name2'],1,1,'utf-8'));
                $nrenge1=$bihua1+$bihua3;//人格
                $this->assign('nrenge1',$nrenge1);
                $rs=sancaism($nrenge1);
                $this->assign('nrgjx',$rs[0]['jx']);//人格吉凶
                $rgf2=getpf($rs[0]['jx']);
                if(mb_substr($_POST['name2'],2,1,'utf-8')=='')//地格
                {
                    $ndige1 = $bihua3+1;

                    $nwaige1=2;
                }else{
                    $bihua4=getnum(mb_substr($_POST['name2'],2,1,'utf-8'));
                    $ndige1 = $bihua3+$bihua4;
                    $nwaige1=$zhongge1-$renge1+1;//外格
                }
                $rs=sancaism($ndige1);
                $this->assign('ndgjx',$rs[0]['jx']);//地格吉凶
                $dgf2=getpf($rs[0]['jx']);
                $this->assign('ndige1',$ndige1);
                $nzhongge1=$bihua1+$bihua2+$bihua3+$bihua4;//总格
                $rs=sancaism($nzhongge1);
                $this->assign('nzgjx',$rs[0]['jx'])->assign('nzhongge1',$nzhongge1);//总格吉凶
                $zgf2=getpf($rs[0]['jx']);
                $rs=sancaism($nwaige1);
                $this->assign('nwgjx',$rs[0]['jx'])->assign('nwaige1',$waige1);//外格吉凶
                $wgf2=getpf($rs[0]['jx']);
                $sancai1=getsancai($ntiange1) . getsancai($nrenge1) . getsancai($ndige1);//三才性格
                $rs=sancaijx($sancai1);
                $this->assign('xg2',$rs[0]['xg']);

            }
            if ($_POST['xing2']==2)//爱人复姓
            {
                $this->assign('nxing11',mb_substr($_POST['name2'],0,1,'utf-8'));
                $this->assign('nxing12',mb_substr($_POST['name2'],1,1,'utf-8'));
                $this->assign('nming11',mb_substr($_POST['name2'],2,1,'utf-8'));
                $this->assign('nming12',mb_substr($_POST['name2'],3,1,'utf-8'));
                $bihua1=getnum(mb_substr($_POST['name2'],0,1,'utf-8'));
                $bihua2=getnum(mb_substr($_POST['name2'],1,1,'utf-8'));
                $bihua3=getnum(mb_substr($_POST['name2'],2,1,'utf-8'));
                $tiange1=$bihua1+$bihua2;
                $this->assign('ntiange1',$tiange1);//天格
                $rs=sancaism($tiange1);
                $this->assign('ntgjx',$rs[0]['jx']);//天格吉凶
                $tgf2=getpf($rs[0]['jx']);
                $renge1 = $bihua2+$bihua3;//人格
                $this->assign('nrenge1',$renge1);
                $rs=sancaism($renge1);
                $this->assign('nrgjx',$rs[0]['jx']);//人格吉凶
                $rgf2=getpf($rs[0]['jx']);
                if(mb_substr($_POST['name2'],3,1,'utf-8')=='')//地格
                {
                    $dige1 = $bihua3+1;
                }else{
                    $bihua4=getnum(mb_substr($_POST['name2'],3,1,'utf-8'));
                    $dige1 = $bihua3+$bihua4;
                }
                $rs=sancaism($dige1);
                $this->assign('ndgjx',$rs[0]['jx']);//地格吉凶
                $this->assign('ndige1',$dige1);
                $dgf2=getpf($rs[0]['jx']);
                $zhongge1=$bihua1+$bihua2+$bihua3+$bihua4;//总格
                $rs=sancaism($zhongge1);
                $this->assign('nzgjx',$rs[0]['jx'])->assign('nzhongge1',$zhongge1);//总格吉凶
                $zgf2=getpf($rs[0]['jx']);
                $waige1=$zhongge1-$renge1;//外格
                $rs=sancaism($waige1);
                $this->assign('nwgjx',$rs[0]['jx'])->assign('nwaige1',$waige1);//外格吉凶
                $wgf2=getpf($rs[0]['jx']);
                $sancai1=getsancai($tiange1) . getsancai($renge1) . getsancai($dige1);//三才性格
                $rs=sancaijx($sancai1);
                $this->assign('xg2',$rs[0]['xg']);
            }

            $n1=abs($rgf1-$rgf2);//缘分指数算法
            $n2=abs($dgf1-$dgf2);
            $n3=abs($zgf1-$zgf2);
            $n4=abs($tgf1-$tgf2);
            $n5=abs($wgf1-$wgf2);
            $zf=($n1+$n2+$n3)+($n4+$n5)/5;
            $zf=round(100-$zf);
            $this->assign('zf',$zf);
            if ($sex1 == $sex2){
                //检查是否是同性
                $checksex="本站是按中国民俗学的一些测算方法来计算的，暂时不支持同性缘份的测试";
            }
            else {
                //匹配结果
                if ($zf < 60){
                    $zfjg="你们的姓名五格可能不是太合，不过八字配合所起的作用更大，另外彼此的努力也会让你们改善关系，记住：事在人为！";
                }
                elseif ($zf<70 and $zf>=60)  {
                    $zfjg="你们的姓名五格相合程度马马虎虎，不过八字配合所起的作用更大，继续努力改善关系，会对你们的关系有帮助的！";
                }
                elseif ($zf<80 and $zf>=70){
                    $zdjg="你们的姓名五格相合程度还不错哟！";
                }
                elseif ($zf<90 and $zf>=80){
                    $zdjg="你们的姓名五格相合程度相当棒！";
                }
                elseif ($zf>=90){
                    $zdjg=" 你们的姓名五格相合程度太棒了！！恭喜！";
                }
                      }
                      $this->assign('checksex',$checksex)->assign('zdjg',$zdjg);

        }

     $this->display();
    }
    /* 上辈为人 页面*/
    public function sbwr(){
        if(checkSession()){
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
        /* 小时 */
        $hours = hours ();
        $this->assign ( 'hours', $hours );
        /* 分钟 */
        $mins = mins ();
        $this->assign ( 'mins', $mins );
       /*判断是否重新换名字 测算 */

        if(isset($_POST['act']) && $_POST['act']=="ok") {
            $name=$_POST['name'];
            $y=$_POST['y'];
            $m=$_POST['m'];
            $d=$_POST['d'];
            $yearsOld=getYear()-$y;
            $this->assign('name',$name)->assign('m',$m)->assign('d',$d)->assign('y',$y)->assign('yearsOld',$yearsOld);
            $sbnum=0;
            $csrq=$_POST["y"] . $_POST["m"] . $_POST["d"];
            for ($i = 0; $i<=strlen($csrq); $i++) {
                $sbnum=$sbnum + substr($csrq,$i,1);
            }

            $sbnum2=0;
            for ($i = 0; $i<=strlen($sbnum); $i++) {
                $sbnum2=$sbnum2 + substr($sbnum,$i,1) ;
            }
            $sbnum3=0;
            for ($i = 0; $i<=strlen($sbnum2) ; $i++) {
                $sbnum3=$sbnum3 + substr($sbnum2,$i,1) ;
            }

            $this->assign('sbnum3',$sbnum3);//结果
            $rs=sbwr($sbnum3);
            $this->assign('intro',$rs[0]['intro']);
            $this->display();

        }
else {
     $name=get_xing().get_ming();
     $y=get_nian();
     $m=get_yue();
     $d=get_ri();
     $yearsOld=getYear()-$y;
     $this->assign('name',$name)->assign('m',$m)->assign('d',$d)->assign('y',$y)->assign('yearsOld',$yearsOld);
     $sbnum=0;//开始计算
     $csrq=$y . $m . $d;
     for ($i = 0; $i<=strlen($csrq); $i++) {
         $sbnum=$sbnum + substr($csrq,$i,1);
     }
     $sbnum2=0;
     for ($i = 0; $i<=strlen($sbnum); $i++) {
         $sbnum2=$sbnum2 + substr($sbnum,$i,1) ;
     }
     $sbnum3=0;
     for ($i = 0; $i<=strlen($sbnum2) ; $i++) {
         $sbnum3=$sbnum3 + substr($sbnum2,$i,1) ;
     }
     $this->assign('sbnum3',$sbnum3);//结果
     $rs=sbwr($sbnum3);
     $this->assign('intro',$rs[0]['intro']);
     $this->display();

}
        }
        else{
            $this->success('算命人资料填写不完整，请填写完整后进入！将跳转到主页', 'index.php?g=home&m=ctsm&a=index',5);
        }
    }
    /* 姓氏起源页面 */
    public function xsqy(){
        $xing=get_xing();
        if (isset($_POST['act']) && $_POST["act"] =="ok") {
            $sxing=$_POST["xing"];

        } else {
            $sxing=$xing;

        }
        $intro=xsqy($sxing);
    $this->assign('sxing',$sxing)->assign("intro",$intro);


        $this->display();
    }
}