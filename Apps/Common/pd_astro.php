<?php
if(isset($_REQUEST['act']) && $_REQUEST['act']=="ok") {
 $user=M('xingzuolove');
 $rs=$user->where(array('xingzuo1'=>$_REQUEST['p1'] , 'xingzuo2'=>$_REQUEST['p2']))->select();
/*
    $sql="select * from xingzuolove where xingzuo1= ? and xingzuo2= ? ";
    $db->query($sql, array(trim($_REQUEST['p1']), trim($_REQUEST['p2'])));
    $rs = $db->fetchArray();
 */
 $rs=$rs[0];
    $this->assign('title', $rs['title']);
    $this->assign('content1', rep($rs['content1']));
    $this->assign('content2', rep($rs['content2']));
}
$this->display('pd_astro');
?>
