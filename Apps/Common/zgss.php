<?php
$this->assign('includePage', 'chouqian/zgss.php');

if (isset($_REQUEST['name1'])) {
    $strname = $_REQUEST['name1'];
    $str1=mb_substr($strname,0,1, 'utf-8' );
    $str2=mb_substr($strname,1,1, 'utf-8');
    $str3=mb_substr($strname,2,1, 'utf-8');
	$this->assign('str1', $str1);
	$this->assign('str2', $str2);
	$this->assign('str3', $str3);
    if ($str1<>"" and $str2<>"" and $str3<>"") {
        $bihua1=getnum($str1) % 10;
        if ($bihua1==0) {
            $bihua1=1;
        }
        $bihua2=getnum($str2) % 10;
        if ($bihua2==0) {
            $bihua2=1;
        }
        $bihua3=getnum($str3) % 10;
        if ($bihua3==0) {
            $bihua3=1;
        }

        $bihua=$bihua1 . $bihua2 . $bihua3;

        while ($bihua>=384) {
            $bihua=$bihua-384;
        }

        if ($bihua<=9) {
            $bihua="00" .$bihua;
        } elseif ($bihua<=99) {
            $bihua="0" . $bihua;
        }
        //'计算诸葛神数
        $user=M('zhuge');
        $rs=$user->where(array('id'=>$bihua))->select();
        $rs=$rs[0];
     /*    $sql="select * from zhuge where id=?";
        $db->query($sql, array($bihua));
        $rs = $db->fetchArray(); */
        $this->assign('zhugetitle', $rs['title']);
        $this->assign('zhugecontent', $rs['content']);
    }
}
$this->display('zgss');
?>
