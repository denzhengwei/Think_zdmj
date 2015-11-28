<?php
class GoAction extends Action{

    public function index(){


        $this->display('');
}
public function gogo(){
    $_SESSION['sum']=0;
    function get_extension($file)
        {
           //return substr(strrchr($file, '.'), 1);
           return  substr($file,-3);

        }
    function rdir ($filefath){
         $dir=opendir($filefath);
         while (($file = readdir($dir)) !== false )
         {
             if (is_dir($filefath.'/'.$file) && $file !='.' && $file !='..'){
                rdir($filefath.'/'.$file);

             }
                  else if(get_extension($file)=='xml')
                  {
                     //echo $filefath.'/'.$file."<br/>";

                     $xml_array=simplexml_load_file($filefath.'/'.$file); //将XML中的数据,读取到数组对象中
                     foreach ($xml_array as $key){   //循环出数据，并转换为数组
                        $str[]=(string)$key;
                     }
                     $num=0; //标记数量
                     foreach ($str as $k){   //循环字符的数组
                        preg_match_all('/[\x{4e00}-\x{9fa5}]/u',$k,$cnstr);//正则匹配中文字符
                        $i=count($cnstr[0]); //每行中文的个数
                        $num=$num+$i; //个数的相加
                     }
                     echo $filefath.'/'.$file."的中文个数是：". $num."<br/>";
                     $_SESSION['sum']=$_SESSION['sum']+$num;

                  }

         }

           closedir($dir);

         }


    $xmlpath=$_POST['_filepath'];
   //打开  目录
   //列出  目录中的文件
    rdir($xmlpath);
    echo "合计：".$_SESSION['sum'];
    }

public function upload() {

    import('ORG.Net.UploadFile');
    $upload = new UploadFile();// 实例化上传类
    $upload->maxSize  = 3145728 ;// 设置附件上传大小
    $upload->allowExts  = array('xml');// 设置附件上传类型
    $upload->savePath =  './Public/Uploads/';// 设置附件上传目录
    if(!$upload->upload()) {// 上传错误提示错误信息
        $this->error($upload->getErrorMsg());
    }else{
        /*上传成功  */
        $info =  $upload->getUploadFileInfo();
        $name=$info[0]['savename'];//储存的文件名
        $path=$info[0]['savepath'];//文件路径
        $xml_array=simplexml_load_file($path."".$name); //将XML中的数据,读取到数组对象中
        foreach ($xml_array as $key){   //循环出数据，并转换为数组
        $str[]=(string)$key;
        }
        $num=0; //标记数量
        foreach ($str as $k){   //循环字符的数组
           preg_match_all('/[\x{4e00}-\x{9fa5}]/u',$k,$cnstr);//正则匹配中文字符
           $i=count($cnstr[0]); //每行中文的个数
           $num=$num+$i; //个数的相加
        }
        echo $_FILES['file']['name']."的中文个数是：". $num;

}
    }
}