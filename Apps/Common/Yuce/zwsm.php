<?php
if(isset($_REQUEST['zwdm'])) {
//'计算诸葛神数
$zwdm=$_REQUEST['zwdm'];
$user=M('zhiwen');
$rs=$user->where(array('zhiwen'=>$zwdm))->select();
$rs=$rs[0];
/* $sql="select * from zhiwen where zhiwen=?";
$db->query($sql, array($zwdm)); */
if($rs !='' ) {
    $this->assign('rs', $rs);
}
}
$this->display('zwsm');
?>
