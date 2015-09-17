<?php
$word=$_REQUEST['word'];//提交的查询关键字
$MaxPerPage=3;//最大页数3
if (!empty($_REQUEST["page"]))//如提交页数
    $currentPage=intval($_REQUEST["page"]);//currentPage等于提交页数
else
    $currentPage=1; //否则等于1
/* 如  act(详细或者简明) 和 关键字 同事未设置返回模块首页 */
if (!in_array((int)$_REQUEST["act"], array(1,2)) || !isset($_REQUEST["word"])) {
    header('Location: index.php');
}
if ($_REQUEST["act"]==1) {//如果提交的 act==1(简明搜索) 搜索数据库表的‘title’ act==2(详细搜索)搜索数据库表的‘content’.
    $cxgjz="title";
} elseif ($_REQUEST["act"]==2) {
    $cxgjz="content";
}
$user=M('zgjm');//连接数据库搜索关键字
$where[$cxgjz]=array('like','%'. $_REQUEST['word'] .'%');
$rs=$user->where($where)->select();//结果rs
$rowsnum=count($rs);//一共搜索多少行
/* $sql="select * from zgjm where $cxgjz like ?";
$db->query($sql, array('%'. $_REQUEST["word"] .'%'));
*/
 if (!($allshu=$rowsnum )) {

} else{

    $pagesize = $MaxPerPage ;
    $mpage=ceil($allshu/$pagesize);//一共多少页。
    if($currentPage>$mpage) {//若果提交的页数大于总数 页数等于1
	    $currentPage = 1;
    }
 //  $rs[($currentPage-1)*$pagesize];//?
    $rs=$user->where($where)->limit(($currentPage-1)*$pagesize,3)->select();//按照分页获取数据
    $this->assign('allshu', $allshu);
	$this->assign('mpage', $mpage);
	$this->assign('currentPage', $currentPage);

	$i=0;
	$list = array();
	while($i<$MaxPerPage) { //按照分页输出数据

		$jmlb=$rs[$i]['jmlb'];
		$user=M('jmlb');
		$rs2=$user->where(array(id=>$jmlb))->select();
		$rs2=$rs2[0];
    /*     $sql2="select * from jmlb where id=" . $jmlb;
		$result2 = mysql_query($sql2);
		$rs2 = mysql_fetch_array($result2); */
		$content=str_replace($word,"<font color=red>".$word."</font>",$rs[$i]['content']);
		$list[] = array('title'=>$rs[$i]['title'], 'jmlb'=>$rs2['jmlb'], 'content'=>$content);
		$i++;

    }
	$this->assign('list', $list);
}
$this->assign('word',$word);


$this->display('jm');
?>
