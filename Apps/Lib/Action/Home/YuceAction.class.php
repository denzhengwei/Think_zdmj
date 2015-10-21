<?php
class YuceAction extends Action{
    public function index(){

        $_REQUEST['sm'] = isset($_REQUEST['sm']) ? (int)$_REQUEST['sm'] : 0;
        switch ($_REQUEST['sm']) {
            case 1:
                include(APP_PATH.'Common/Yuce/'. '/emyc.php');
                break;
            case 2:
                include(APP_PATH.'Common/yuce/'. '/myyc.php');
                break;
            case 3:
                include(APP_PATH.'Common/yuce/'. '/ptyc.php');
                break;
            case 4:
                include(APP_PATH.'Common/yuce/'. '/ytyc.php');
                break;
            case 5:
                include(APP_PATH.'Common/yuce/'. '/xjyc.php');
                break;
            case 6:
                include(APP_PATH.'Common/yuce/'. '/hdjr.php');
                break;
            case 7:
                include(APP_PATH.'Common/yuce/'. '/hmjx.php');
                break;
            case 8:
                include(APP_PATH.'Common/yuce/'. '/sanshishu.php');
                break;
            case 9:
                include(APP_PATH.'Common/yuce/'. '/snsn.php');
                break;
            case 10:
                include(APP_PATH.'Common/yuce/'. '/zwsm.php');
                break;
            default:
               $this->display('');
        }

    }
}