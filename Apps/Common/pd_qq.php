<?php
if (isset($_REQUEST['act']) && $_REQUEST['act']=="ok") {
    $strname1=$_REQUEST['qq1'];
    $qqsz1=0;
    for ($i=0; $i<strlen($strname1); $i++) {
        $qqsz1= $qqsz1 + substr($strname1,$i,1);
    }
    $strname2=$_REQUEST['qq2'];
    $qqsz2=0;
    for ($i=0; $i<strlen($strname2); $i++) {
        $qqsz2=$qqsz2 + substr($strname2,$i,1);
    }

    $qqsz = $qqsz1 + $qqsz2;

    $qqsz= $qqsz % 101;

    //'计算
    $user=M('qlpdbh');
    $where['bihua']=array('like','%' . $qqsz . '%');
    $rs=$user->where($where)->select();//结果rs
   /*  $sql="select * from qlpdbh where bihua like ?";
    $db->query($sql, array('%' . $qqsz . '%')); */
	//echo $sql.$qqsz;
    if ($rs!='') {
        $intro = $rs[0]['intro'];
		$this->assign('intro', $intro);
    }

    $this->assign('strname1', $strname1);
    $this->assign('strname2', $strname2);

}
$this->display('pd_qq');
?>
