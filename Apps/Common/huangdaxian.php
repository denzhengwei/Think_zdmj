<?php
$this->assign('includePage', 'chouqian/huangdaxian.php');

if(isset($_REQUEST['act']) && $_REQUEST['act'] == "jq") {
    $gyqid=$_REQUEST['gyqid'];
    $user=M('huangdaxian');
    $rs=$user->where(array('id'=>$gyqid))->select();
    $rs=$rs[0];
    $this->assign('qianshu', $rs['qianshu']);
    $this->assign('hdxname', $rs['name']);
    $this->assign('title', $rs['title']);
    $this->assign('shi', rep($rs['shi']));
    $this->assign('content', $rs['content']);

} elseif(isset($_REQUEST['act']) && $_REQUEST['act'] == "ok") {
    if (!isset($_COOKIE['laisuanming']['guanyin'])) {
    //'产生随机数
        $num=rand(1,100);
        setcookie('laisuanming[guanyin]',$num, time()+3600, '/');
    }else {
        $num=$_COOKIE['laisuanming']['guanyin'];
    }
    $this->assign('num', $num);

    $picnum=rand(1,3);
    $gyclicknum=isset($_REQUEST['gyclicknum']) ? (int)$_REQUEST['gyclicknum']:1;
    $this->assign('picnum', $picnum);
    $this->assign('gyclicknum', $gyclicknum);

    if (!$gyclicknum) {
    }else {
        $gysmile=rand(1,4);
        $this->assign('gysmile', $gysmile);
        $_COOKIE['laisuanming']['gysmile' . $gyclicknum]=$gysmile;
    }
}

$this->display('huangdaxian');
?>
