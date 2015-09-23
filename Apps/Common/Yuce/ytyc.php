<?php
if(isset($_REQUEST['fx'])) {
$fx=$_REQUEST['fx'];
$stime=$_REQUEST['stime'];
/* $sql="select * from msyuce where fx=? and stime=? and lb=?";
$db->query($sql, array($fx, $stime, '眼跳')); */
$user=M('msyuce');
$where['fx']=$fx;
$where['stime']=$stime;
$where['lb']='眼跳';
$rs=$user->where($where)->select();
$rs=$rs[0];
if($rs !='') {
$this->assign('rs', $rs);
}
}
$this->display('ytyc')
?>

