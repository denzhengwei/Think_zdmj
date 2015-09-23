<?php
if(isset($_REQUEST['act']) && $_REQUEST['act']=='ok') {
$stime=$_REQUEST['stime'];
/* $sql="select * from msyuce where stime=? and lb=?";
$db->query($sql, array($stime, '面热'));
echo $sql; */
$user=M('msyuce');
$rs=$user->where(array('stime'=>$stime,'lb'=>'面热'))->select();
$rs=$rs[0];
if($rs != '') {
$this->assign('rs', $rs);
}
}
$this->display('myyc');
?>