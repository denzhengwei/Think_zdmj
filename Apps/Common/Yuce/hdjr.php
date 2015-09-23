<?php
$voyear=array();//显示的可选年份 现在年份加5年（!数据库没更新）
$now=getYear();
for($i=2009;$i<=$now+5;$i++){
$voyear[]=$i;
}
$this->assign('voyear',$voyear);//12个月
/* 月 */
$months = months ();
$this->assign ( 'months', $months );
/* 日 */
$days = days ();
$this->assign ( 'days', $days );
/*星期  */
$WeekName = array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五" , "星期六" );
$this->assign('WeekName',$WeekName);
if (isset($_REQUEST['act']) && $_REQUEST['act']=="crz") {
    /*如果提交年月日赋值否则为空  */

$yy=isset($_REQUEST['yy'])?$_REQUEST['yy']:'';
$mm=isset($_REQUEST['mm'])?$_REQUEST['mm']:'';
$dd=isset($_REQUEST['dd'])?$_REQUEST['dd']:'';
$word=isset($_REQUEST['word'])?$_REQUEST['word']:'';//黄历名词
$cxdate = '';//时间格式
if ($yy<>"" and $mm<>"" and $dd<>"") {
$cxdate= $yy . "-" . $mm . "-" . $dd;
}
if ($cxdate=="") {//时间为空
$cxdate=date('Y-m-d 00:00:00', time());
}
$this->assign('cxdate', $cxdate);

/* $sql="select * from hdrl where gn = ?";
$db->query($sql, array($cxdate));
$rs = $db->fetchArray(); */
$user=M('hdrl');
$rs=$user->where(array('gn'=>$cxdate))->select();
$rs=$rs[0];
$this->assign('rs', $rs);
$nlrz=substr($rs['suici'], -6, 4);
/* $sql="select * from zsfw1 where nlrz= ?";
$db->query($sql, array($nlrz));
$rs = $db->fetchArray(); */
//数据库没有这个表
$user=M('zsfw1');
$rs=$user->where(array('nlrz'=>$nlrz))->select();
$rs=$rs[0];
$this->assign('zsfw', $rs);
}
elseif (isset($_REQUEST['act']) && $_REQUEST['act']=="xrz") {
$upto=(int)$_REQUEST['upto'];
$tp=$_REQUEST['tp'];
$word=$_REQUEST['word'];
if ($tp==0) {
$cxbiao="yi";
} else {
$cxbiao="ji";
}

if (in_array($_REQUEST['weekday'], array('1','2','3','4','5','6','0'))) {
    $weekday = (int)$_REQUEST['weekday'];
} else {
    $weekday = '0,1,2,3,4,5,6';
}
$tdate=date('Y-n',time());

/* $sql="select * from hdrl where " . $cxbiao . " like ? and xq in ($weekday) and gn>? and
datediff(gn,?)<".($upto+1);
$db->query($sql, array('%' .$word .'%', date('Y-m-d',  time()), date('Y-m-d',  time())));
$allshu=$db->numRows();
if ($allshu) { */
$user=M('hdrl');
$where[$cxbiao]=array('like','%' .$word .'%');
$where['xg']= array('in',$weekday);
$where['gn']= array('gt',date('Y-m-d',  time()));
$where['_string'] = "datediff(gn,'".date('Y-m-d',  time())."')<".($upto+1)."";
$rs=$user->where($where)->select();
$allshu=count($rs);
if($allshu !='') {
$list = array();
/* while($rs != '') {

for($i=0;$i<=20;$i++){
    $list[] = $rs[$i]
	  }
  $list[] = $rs[$i];
  var_dump($i);
} */
for($i=0;$i<$allshu;$i++){
    $list[] = $rs[$i];
}
$this->assign('list', $list);
}
$this->assign('allshu', $allshu);
$this->assign('upto', $upto);
$this->assign('word', $word);

 }

$this->assign('astroInfo', $astroInfo);
$this->assign('weeklyInfo', $weeklyInfo);
$this->display('hdjr');

 ?>
