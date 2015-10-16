<?php
//echo "12321";
return array(
	//'配置项'=>'配置值'
        'TMPL_FILE_DEPR' => '/',
        'URL_MODEL' => 0,
        'APP_GROUP_LIST' => 'Home', //there is no Space between group names
        'DEFAULT_GROUP' => 'Home', // 系统默认组
        'URL_CASE_INSENSITIVE' => true, //忽略大小写
        'DB_NAME'               => 'zhidianmijin',          // 数据库名
        'DB_PREFIX'             => '',    // 数据库表前缀
        // 调试模式
        'SHOW_PAGE_TRACE' => true,
        'TAG_NESTED_LEVEL' =>5,
        'TMPL_ACTION_SUCCESS' => APP_PATH.'Tpl/Layout/jump.html',//自定义跳转模板


);
?>