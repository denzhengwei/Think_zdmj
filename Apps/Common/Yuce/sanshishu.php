<?php
  /* 年 */
        $year = getYear ();
        $years = array ();
        for($i = 1950; $i <= $year; $i ++) {
            $years [] = $i;
        }
        $years = array_reverse ( $years );
        $this->assign ( 'years', $years );
/* 月 */
$months = months ();
$this->assign ( 'months', $months );
/* 日 */
$days = days ();
$this->assign ( 'days', $days );
/* 小时 */
$hours = hours ();
$this->assign ( 'hours', $hours );
if(isset($_REQUEST['nn']) && isset($_REQUEST['yue'])) {
$nn=substr($_REQUEST['nn'], -1);
$yue=$_REQUEST['yue'];
$user=M('sanshishu');
$rs=$user->where(array('nn'=>$nn))->select();
/* $sql="select * from sanshishu where nn=? ";
$db->query($sql, array($nn)); */
$rs=$rs[0];
if ($rs!='') {
$cai=$rs[$yue];
switch($cai) {
           Case "正" :
		    $content="正禄－勤俭成富";
		    $content1="祖业福禄十分弱，所得一分一毫需靠劳力赚取，可是财运极佳，皆因个性克勤克俭，不放过发财良机，积少成多，发达都无人知。唯独姻缘欠顺，可能不止一次嫁娶。";
      break;
           Case "逐"  :
		    $content="逐禄－孤寒敛财";
		    $content1="金钱不缺，虽不是超级富豪，但也算一生财产充裕。缺点是喜欢追名逐利，永远贪不知足，但又非常吝啬，储藏多多钱却不舍得花费，‘孤寒财主’正是他们的写照";
      break;
           Case "背"  :
		     $content="背禄－离乡别井";
		     $content1="注定奔波劳碌到外地谋生，以前中国人重视乡土亲情，迫不得已才会离乡别井。但时势转变，周围走才得四方财，有边个商家不是搭飞机多过行路？总之赚到钱便属贵格。"  ;
       break;
		   Case "耗"  :
		     $content="耗禄－快来快去";
		     $content1="一生中有多次大笔金钱过手的机会，即使如此，也不能算是富贵命。因为钱财来得快去得快，如不能妥善理财，最后千金散尽，晚景孤苦凄凉。"  ;
       break;
           Case "困"  :
		     $content="困禄－知足常乐";
		     $content1="所谓‘知足者贫亦乐’，无论出生和财禄也平平无奇，但知足的个性令他们不以为苦。这种人福气不薄，多数拥有无忧的晚年，年纪愈大愈富贵。"  ;
       break;
		   Case "天"  :
		     $content="天禄－祖荫丰厚";
		     $content1="前世做得好事多，今世可在富裕环境长大，祖荫丰厚，名副其实含住金锁匙出生。他们只要守住祖业，一生衣食无忧，不宜太刻意钻营求财，否则招至失败。"  ;
       break;
           Case "向"  :
		     $content="向禄－超级巨富";
		     $content1="十二财禄中，以向禄最好。正财、横财两可兼得，一生与金钱结下不解缘，创业做老板固然有机会成巨富，即使帮人打工亦属令人称羡的‘打工皇帝’。离开出生地往外地发展，成就更大。"  ;
       break;
		   Case "煞"  :
		     $content="煞禄－奔波劳碌";
		     $content1="半生奔波，只因优柔寡断的性格所累，想做又不够勇气，到立下决心时又为时已晚，因此在年轻时错过不少发达契机。补救方法是学一门技能傍身，努力工作自然衣食无忧。" ;
       break;
		   Case "才" :
		     $content="才禄－亲力亲为";
		     $content1="财运不过不失，所得的金钱与付出的努力成正比，想赚钱必须亲力亲为。而才禄的人，一般比人聪明、有学识，适宜从事专业行头，例如医生、律师、艺术家等，下半生生活过得充裕。" ;
       break;
		   Case "旺"  :
		     $content="旺禄－大富大贵";
		     $content1="财格拍得住‘向禄’，同属大富大贵命。致富之道是稳守突击，不宜投资高风险项目，稳稳阵阵反而可望财源广进。财运主要由贵人带挈，适宜拓阔人际网络和社交圈子。"  ;
       break;
           Case "暗"  :
		     $content="暗禄－先苦后甜";
		     $content1="受前世影响，今生与家人难和睦相处，别奢望可以靠屋企发达。财运先苦后甜，需依赖朋友致富，不妨找个有信用的拍档做生意。晚景甚佳，积落不少金钱，长寿而健康。"  ;
       break;
		   Case "病"  :
		     $content="病禄－好食懒做";
		     $content1="你并非能力逊于人，只系自己好食懒做，机会送上门都白白流失，想发达的话切忌贪图安逸，所谓‘力不到不为财’。此外，他们天生体质较差，没有良好体魄，竞争力难免被削弱。" ;
       break;
}
$name=$_REQUEST['youname1'].$_REQUEST['youname2'];
$this->assign('name',$name);
$this->assign('content', $content);
$this->assign('content1', $content1);
}
}

$this->display('sanshishu')
?>
