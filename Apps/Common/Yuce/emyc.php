<?php
if(isset($_REQUEST['fx'])) {
$fx=$_REQUEST['fx'];
$stime=$_REQUEST['stime'];
/* $sql="select * from msyuce where fx=? and stime=? and lb=?";
$db->query($sql, array($fx, $stime, '耳鸣')); */
$user=M('msyuce');
$rs=$user->where(array('stime'=>$stime,'fx'=>$fx ,'lb'=>'耳鸣'))->select();
$rs=$rs[0];
if($rs != '') {
$this->assign('rs', $rs);
}
}
$this->display('emyc');
?>

