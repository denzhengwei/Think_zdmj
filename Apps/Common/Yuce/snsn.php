<?php
/* 月 */
$months = months ();
$this->assign ( 'months', $months );
/* 怀孕岁数 18到45*/
$hyyear=array();
for($i=18;$i<=45;$i++){
    $hyyear[]=$i;
}
$this->assign('hyyear',$hyyear);
if (isset($_REQUEST['act']) && $_REQUEST['act']=="ok") {
$mqname=$_REQUEST['mqname'];
if ($mqname=="") {
$mqname="亲爱的网友";
}
$this->assign('mqname', $mqname);
$cs=$_REQUEST['cs'];
if ($_REQUEST['cs']==1) {
    $yue=$_REQUEST['yue'];
$nn=$_REQUEST['nn'];
/* $sql="select * from snsn where nn=? ";
$db->query($sql, array($nn));
if ($rs = $db->fetchArray()) { */
$user=M('snsn');
$rs=$user->where(array('nn'=>$nn))->select();
$rs=$rs[0];
if($rs!=''){
$baby=$rs["$yue"];
}
if ($baby=="男") {
$baby="小王子";
}elseif ($baby=="女") {
$baby="小公主";
}
$this->assign('baby', $baby);
} else {
    $nn=$_REQUEST['nn'];
$snsn=$_REQUEST['snsn'];
$user=M('snsn');
$rs=$user->where(array('nn'=>$nn))->select();
$rs=$rs[0];
/* $sql="select * from snsn where nn=? ";
$db->query($sql, array($nn));
$rs = $db->fetchArray(); */
$yuef='';
if ($rs['1'] == $snsn) {
$yuef=$yuef . "一月&nbsp;";
}
if ($rs['2'] == $snsn) {
$yuef=$yuef . "二月&nbsp;";
}
if ($rs['3'] == $snsn) {
$yuef=$yuef . "三月&nbsp;";
}
if ($rs['4'] == $snsn) {
$yuef=$yuef . "四月&nbsp;";
}
if ($rs['5'] == $snsn) {
$yuef=$yuef . "五月&nbsp;";
}
if ($rs['6'] == $snsn) {
$yuef=$yuef . "六月&nbsp;";
}
if ($rs['7'] == $snsn) {
$yuef=$yuef . "七月&nbsp;";
}
if ($rs['8'] == $snsn) {
$yuef=$yuef . "八月&nbsp;";
}
if ($rs['9'] == $snsn) {
$yuef=$yuef . "九月&nbsp;";
}
if ($rs['10'] == $snsn) {
$yuef=$yuef . "十月&nbsp;";
}
if ($rs['11'] == $snsn) {
$yuef=$yuef . "十一月&nbsp;";
}
if ($rs['12'] == $snsn) {
$yuef=$yuef . "十二月&nbsp;";
}
$user=M('snsn');
$rs=$user->where(array('nn'=>$nn+1))->select();
$rs=$rs[0];
/* $sql="select * from snsn where nn='" .($nn+1) ."' ";
$result = mysql_query($sql);
$rs = mysql_fetch_array($result); */
$nyuef='';
if ($rs['1'] == $snsn) {
$nyuef=$nyuef."一月&nbsp;";
}
if ($rs['2'] == $snsn) {
$nyuef=$nyuef."二月&nbsp;";
}
if ($rs['3'] == $snsn) {
$nyuef=$nyuef."三月&nbsp;";
}
if ($rs['4'] == $snsn) {
$nyuef=$nyuef."四月&nbsp;";
}
if ($rs['5'] == $snsn) {
$nyuef=$nyuef."五月&nbsp;";
}
if ($rs['6'] == $snsn) {
$nyuef=$nyuef."六月&nbsp;";
}
if ($rs['7'] == $snsn) {
$nyuef=$nyuef."七月&nbsp;";
}
if ($rs['8'] == $snsn) {
$nyuef=$nyuef."八月&nbsp;";
}
if ($rs['9'] == $snsn) {
$nyuef=$nyuef."九月&nbsp;";
}
if ($rs['10'] == $snsn) {
$nyuef=$nyuef."十月&nbsp;";
}
if ($rs['11'] == $snsn) {
$nyuef=$nyuef."十一月&nbsp;";
}
if ($rs['12'] == $snsn) {
$nyuef=$nyuef."十二月&nbsp;";
}
if ($snsn=="男") {
$baby="小王子";
}elseif ($snsn=="女") {
$baby="小公主";
}

$this->assign('baby', $baby);
$this->assign('yuef', $yuef);
$this->assign('nyuef', $nyuef);
}
}
$this->display('snsn');
?>
