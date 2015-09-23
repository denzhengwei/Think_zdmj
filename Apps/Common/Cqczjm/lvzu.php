<?php
$this->assign('includePage', 'chouqian/lvzu.php');

if(isset($_REQUEST['act']) && $_REQUEST['act']=="jq") {
    $lvzulqid=$_REQUEST['lvzulqid'];
    $this->assign('lvzulqid', $lvzulqid);
} else {
	if(isset($_REQUEST['act']) && $_REQUEST['act'] == "ok") {
		if (!isset($_COOKIE['laisuanming']['guanyin'])) {
			//'产生随机数
			$num=rand(1,100);
			setcookie('laisuanming[guanyin]',$num, time()+3600, '/');
        }else {
			$num=$_COOKIE['laisuanming']['guanyin'];
        }
		$this->assign('num', $num);

        $picnum=rand(1,3);
		$this->assign('picnum', $picnum);

        $gyclicknum=isset($_REQUEST['gyclicknum']) ? (int)$_REQUEST['gyclicknum']:1;
		$this->assign('gyclicknum', $gyclicknum);

		if (!$gyclicknum) {
		} else {
			$gysmile=rand(1,4);
			$_COOKIE['laisuanming']['gysmile' . $gyclicknum]=$gysmile;
			$this->assign('gysmile', $gysmile);
        }
     } else {
        setcookie('laisuanming[guanyin]','', time()-3600, '/');
	 }
 }

 $this->display('lvzu');
 ?>
