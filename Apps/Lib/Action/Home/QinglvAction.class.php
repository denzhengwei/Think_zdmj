<?php
class QinglvAction extends Action{
    public function index(){

$_REQUEST['sm'] = isset($_REQUEST['sm']) ? (int)$_REQUEST['sm'] : 0;
        switch ($_REQUEST['sm']) {
            case 1:
                include(APP_PATH.'Common/Qinglv/'. '/pd_astro.php');
                break;
            case 2:
                include(APP_PATH.'Common/Qinglv/'. '/pd_name.php');
                break;
            case 3:
                include(APP_PATH.'Common/Qinglv/'. '/pd_qq.php');
                break;
            case 4:
                include(APP_PATH.'Common/Qinglv/'. '/pd_sxxx.php');
                break;
            case 5:
                include(APP_PATH.'Common/Qinglv/'. '/pd_xmwg.php');
                break;
            default:
               // $this->assign('includePage', APP_PATH.'Common/'. '/index.php');
                $this->display('');
                break;
        }


    }
    /*  */
}