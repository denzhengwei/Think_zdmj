<?php

if (isset($update_xz) &&($content = getUrlContent('http://astro.sina.com.cn/pc/west/frame0_'.$update_xz.'.html'))) {
preg_match("/<!-- SUDA_CODE_END -->.*<!-- Start  Wrating  -->/si", $content, $match);
preg_match("/<li class=\"datea\">有效日期:(.*)<\/li>/i", $content, $dates);
$yxqx = $dates[1];
$match[0] = str_replace("\n", '', $match[0]);
$match[0] = str_replace("</div>", "</div>\n", $match[0]);
preg_match("/<div class=\"lotconts\">(.*)<\/div>/i", $match[0], $zhpg);
preg_match_all("/<h4>(.*)<\/h4>(.*)/i", $match[0], $match1);

foreach($match1[1] as $k=>$m) {
    switch(substr($m, 0)) {
        case '综合运势':
            $zhys = substr_count($match1[2][$k], '<img');
            break;
        case '健康指数':
            $jkzs   = $match1[2][$k];
            break;
        case '工作状况':
            $gzzk   = substr_count($match1[2][$k], '<img');
            break;
        case '理财投资':
            $nctz   = substr_count($match1[2][$k], '<img');
            break;
        case '商谈指数':
            $stzs   = $match1[2][$k];
            break;
        case '幸运颜色':
            $xyys   = $match1[2][$k];
            break;
        case '爱情运势':
            $aqys  = substr_count($match1[2][$k], '<img');
            break;
        case '幸运数字':
            $xysz   = $match1[2][$k];
            break;
        case '速配星座':
            $spxz   = $match1[2][$k];
            break;

    }

}

/* $db->query("update xzysday set
        yxqx=?,
        zhys=?,
        aqys=?,
        gzzk=?,
        nctz=?,
        jkzs=?,
        stzs=?,
        xyys=?,
        xysz=?,
        spxz=?,
        zhpg=?,
		update_date=?
		where id = ?" ,
		array($yxqx, $zhys, $aqys, $gzzk
		     , $nctz, $jkzs, $stzs, $xyys
			 , $xysz, $spxz, $zhpg, $update_date
			 , $update_xz+1)); */
$user=M('xzysday');
$data=array(
        yxqx=>$yxqx,
        zhys=>$zhys,
        aqys=>$aqys,
        gzzk=>$gzzk,
        nctz=>$nctz,
        jkzs=>$jkzs,
        stzs=>$stzs,
        xyys=>$xyys,
        xysz=>$xysz,
        spxz=>$spxz,
        zhpg=>$zhpg,
        update_date=>$update_xz+1
);
$user->where(array('id'=>$update_xz+1))->save();
}
?>