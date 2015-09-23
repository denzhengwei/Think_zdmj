<?php
//'手机吉凶
if(isset($_REQUEST['word']) && strlen($word=trim($_REQUEST['word']))) {
$word=floatval($word)/80;
$temp=intval($word);
$word=$word-(float)$temp;
$word=intval($word*80);
$word=strval($word);
if ($word=="0") {
$word="81";
}
/* $sql="select * from shouji where num=?";
$db->query($sql, array($word)); */
$user=M('shouji');
$rs=$user->where(array('num'=>$word))->select();
$rs=$rs[0];
if ($rs !='') {
$num=$rs['num'];
$title=$rs['title'];
$jx=$rs['jx'];
$jx="(" . $jx . ")";
$content=$rs['content'];
}
$this->assign('title', $title);
$this->assign('word', $_REQUEST['word']);
$this->assign('k', $_REQUEST['k']);
$this->assign('content', $content);
$this->assign('jx', $jx);
}
$this->display('hmjx');
?>
