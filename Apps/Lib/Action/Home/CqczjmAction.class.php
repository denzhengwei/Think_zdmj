<?php
header('Content-Type: text/html;charset=utf-8');
class CqczjmAction extends Action{
public function Index(){
$_REQUEST['sm'] = isset($_REQUEST['sm']) ? (int)$_REQUEST['sm'] : 0;
switch ((int)$_REQUEST['sm']) {
    case 1:
        require_once(APP_PATH.'Common/'. '/guandi.php');
        break;
    case 2:
       require_once(APP_PATH.'Common/'. '/guanyin.php');
       $this->display('guanyin');
       break;
    case 3:
       require_once(APP_PATH.'Common/'. '/huangdaxian.php');
       break;
    case 8:
       require_once(APP_PATH.'Common/'. '/jm.php');
       break;
    case 4:
       require_once(APP_PATH.'Common/'. '/lvzu.php');
       break;
    case 5:
       require_once(APP_PATH.'Common/'. '/mazu.php');
       break;
    case 7:
       require_once(APP_PATH.'Common/'. '/zgjm.php');
       break;
    case 6:
       require_once(APP_PATH.'Common/'. '/zgss.php');
       break;
    default:

       $this->assign('includePage', 'chouqian/index.php');
       $this->display('');
       break;

}


}
}