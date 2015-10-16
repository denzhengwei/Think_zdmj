<?php
if (isset($update_xz) &&
        ($content = getUrlContent('http://vip.astro.sina.com.cn/astro/view/'.$update_xz.'/year_love/'))) {
preg_match("/<li class=\"date\">有效日期:(.*)<\/li>/i", $content, $dates);
$yxqx = $dates[1];
$content = str_replace("\n", '', $content);
$content = str_replace("</div>", "</div>\n", $content);
preg_match("/<div class=\"lotconts\">(.*)<\/div>/i", $content, $zhpg);
$ztzk = $zhpg[1];
preg_match("/<div class=\"m_left\">(.*)<\/div>/i", $content, $zhpg);
$nv = $zhpg[1];
preg_match("/<div class=\"m_right\">(.*)<\/div>/i", $content, $zhpg);
$nan = $zhpg[1];

/* $db->query("update xzysaqyear set
  yxqx  = ?,
  ztzk = ?,
  nv  = ?,
  nan  = ?
		, update_date=? 	where id = ?"
  , array($yxqx, $ztzk,$nv,$nan,$update_date, $update_xz+1)); */
$user=M('xzysaqyear');
$data=array(
  yxqx  => $yxqx,
  ztzk => $ztzk,
  nv  => $nv,
  nan  => $nan,
        update_date=>$update_date
);
$_id=array_search($update_xz, $astroInfoEN)+1;
$user->where(array('id'=>$_id))->setField($data);
}
?>