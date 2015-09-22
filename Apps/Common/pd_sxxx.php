<?php
if (isset($_REQUEST['act']) && $_REQUEST['act']=="sxok") {

   /*  $sqlstr="select * from shuxianglove where shengxiao1=? and shengxiao2=?";
    $db->query($sqlstr, array(trim($_REQUEST['p5']), trim($_REQUEST['p6'])));
    $rs = $db->fetchArray(); */
    $user=M('shuxianglove');
    $condition['shengxiao1']=$_REQUEST['p5'];
    $condition['shengxiao2']=$_REQUEST['p6'];
    $rs=$user->where($condition)->select();
  $rs=$rs[0];
     $this->assign('title', $rs['title']);
     $this->assign('content1', rep($rs['content1']));
     $this->assign('content2', rep($rs['content2']));
}

if (isset($_REQUEST['act']) && $_REQUEST['act']=="xxok") {
    /* $sqlstr="select * from xuexinglove where xuexing1=? and xuexing2=?";
    $db->query($sqlstr, array(trim($_REQUEST['p3']), trim($_REQUEST['p4'])));
    $rs = $db->fetchArray(); */
    $user=M('xuexinglove');
    $condition['xuexing1']=$_REQUEST['p3'];
    $condition['xuexing2']=$_REQUEST['p4'];
    $rs=$user->where($condition)->select();
    $rs=$rs[0];
     $this->assign('title1', $rs['title1']);
    $this->assign('title2', $rs['title2']);
     $this->assign('content', rep($rs['content']));

}
$this->display('pd_sxxx');
?>
