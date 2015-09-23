<?php
    $user=M('jmlb');
    $rs=$user->select();
	/* $sql="SELECT * FROM jmlb";
	$result = $db->query($sql, array()); */
	$i = 0;
	$list = array();
	while($i<count($rs)) {
		 $list[$i] = array($rs[$i]['jmlb']);
         $user=M('zgjm');
         $rs2=$user->where(array('jmlb'=>$rs[$i]['id']))->select();
		//$sql2="SELECT * FROM zgjm where jmlb=" . $rs[$i]['id'];
	//echo $sql2.'<br>';
	//	$result2 = mysql_query($sql2);
	$j = 0;
		$list[$i][1] = array();
		while($j<count($rs2)) {
			$list[$i][1][] = $rs2[$j]['title'];
			$j++;
		}		$i++;

	}
	$this->assign('list', $list);
	$this->display('zgjm');
?>

