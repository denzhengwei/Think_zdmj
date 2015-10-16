<?php
if (isset($update_xz) &&
        ($content = getUrlContent('http://vip.astro.sina.com.cn/astro/view/'.$update_xz.'/monthly/')))
{
preg_match("/<!-- SUDA_CODE_END -->.*<!-- Start  Wrating  -->/si", $content, $match);
preg_match("/<li class=\"date\">有效日期:(.*)<\/li>/i", $content, $dates);
$yxqx = $dates[1];
$match[0] = str_replace("\n", '', $match[0]);
$match[0] = str_replace("</div>", "\n", $match[0]);
preg_match_all("/<h4>(.*)<\/h4>(.*)/i", $match[0], $match1);
foreach($match1[1] as $k=>$m) {
    switch(mb_substr($m, 0, 4,'utf-8')) {
        case '整体运势':
            $ztzs = substr_count($match1[1][$k], '<img');
		    $ztys = $match1[2][$k];
            break;
        case '解压方式':
		    $jyfs = $match1[2][$k];
            break;
        case '开运小秘':
		    $xyw = $match1[2][$k];
            break;
        case '投资理财':
            $tzzs   = substr_count($match1[1][$k], '<img');
		    $tzys = $match1[2][$k];
            break;
        case '爱情运势':
            $aqzs  = substr_count($match1[1][$k], '<img');
		    $aqys = $match1[2][$k];
            break;

    }
}
echo $ztys;
$user=M('xzysmonth');
$data=array(
       ztzs=>$ztzs,
                 yxqx=>$yxqx,
				 ztys=>$ztys,
				 aqzs=>$aqzs,
				 aqys=>$aqys,
				 tzzs=>$tzzs,
				 tzys=>$tzys,
				 jyfs=>$jyfs,
				 xyw=>$xyw,
        update_date=>$update_date
);
$_id=array_search($update_xz, $astroInfoEN)+1;
$user->where(array('id'=>$_id))->setField($data);

/* $db->query("update xzysmonth set yxqx =?
                 , ztzs=?
				 , ztys =?
				 , aqzs=?
				 , aqys=?
				 , tzzs =?
				 , tzys =?
				 , jyfs =?
				 , xyw =?
				 , update_date=? 	where id = ?"
		     , array($yxqx, $ztzs, $ztys, $aqzs
				  , $aqys, $tzzs, $tzys, $jyfs
				  , $xyw, $update_date, $update_xz+1)); */
}
?>