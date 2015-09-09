<?php
/* 通过日期得到星座 *y-m-d */
function Constellation($mDate)
{
    $time = strtotime($mDate);
    if(false===$time) {
        echo "非日期";
        return;
    }
    $a= date("j", $time) - (19 + intval(substr("102123444423", date("n", $time)-1, 1)));
    $a = $a>=0? 0:-1;

    //'星座
    $Constellation = mb_substr("摩羯水瓶双鱼白羊金牛双子巨蟹狮子处女天秤天蝎射手摩羯", (date("n", $time) + $a)*4 , 2,'utf-8') . "座" ;
    return $Constellation;
}
/* 星座，血型，属性 ，查询*/
function xxs ($str){
    $user=M('astro');
    $rs=$user->where(array('title'=>$str))->select();
    if(false!==$rs){
        return $rs[0]['content'];
    }
    else {

        return '';
    }

}
/* 星座保健 */
function xz_bj($xingzuo){
    $user=M('baojian');
    $rs=$user->where(array('title'=>$xingzuo))->select();
    if(false!==$rs && $xingzuo!=""){

        return array($rs[0]['content'],$xingzuo."之身体保健:");
    }
    else {

        return '';
    }
}
/* 星座EQ*/
function xz_eq($xingzuo){
    $user=M('ndeq');
    $rs=$user->where(array('title'=>$xingzuo))->select();
    if(false!==$rs && $xingzuo!=""){

        return array($rs[0]['content'],$xingzuo."之EQ:");
    }
    else {

        return '';
    }

}
/*星座IQ测试*/
function xz_iq($xingzuo ){
    $user=M('xlcz');
    $rs=$user->where(array('title'=>$xingzuo))->select();
    if(false!==$rs && $xingzuo!=""){

        return array($rs[0]['content'],$xingzuo."之IQ:");
    }
    else {

        return '';
    }

}
/*星座名人*/
function xz_mr($xingzuo){
    $user=M('mingren');
    $rs=$user->where(array('title'=>$xingzuo))->select();
    if(false!==$rs && $xingzuo!=""){

        return array($rs[0]['content'],$xingzuo."之名人:");
    }
    else {

        return '';
    }

}
/*星座失败剖析*/
function xz_sy($xingzuo){
    $user=M('shiye');
    $rs=$user->where(array('title'=>$xingzuo))->select();
    if(false!==$rs && $xingzuo!=""){

        return array($rs[0]['content'],$xingzuo."之事业:");
    }
    else {

        return '';
    }

}
/*星座实力*/
function xz_sl($xingzuo){
    $user=M('aiqing');
    $rs=$user->where(array('title'=>$xingzuo))->select();
    if(false!==$rs && $xingzuo!=""){

        return array($rs[0]['content'],$xingzuo."之个人实力:");
    }
    else {

        return '';
    }

}
/*星座建议*/
function xz_jy($xingzuo){
    $user=M('qingxv');
    $rs=$user->where(array('title'=>$xingzuo))->select();
    if(false!==$rs && $xingzuo!=""){

        return array($rs[0]['content'],$xingzuo."之五大建议:");
    }
    else {

        return '';
    }

}

