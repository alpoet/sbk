<?php
return array(
	//'配置项'=>'配置值'
	//开启调试模式
	'APP_DEBUG' => true,
        //URL模式
        'URL_MODEL'          => '3', 
        //是否开启session
        'SESSION_AUTO_START' => true, 
	//大小写检查
	'APP_FILE_CASE' => true,
        //URL不敏感大小写
        'URL_CASE_INSENSITIVE' => true,
        //伪静态URL设置
        'URL_HTML_SUFFIX'=>'html',
        // 显示页面Trace信息
        //'SHOW_PAGE_TRACE' =>true, 
        //项目分组设定
        //'APP_GROUP_LIST' => 'Home,Admin',
        //默认分组
        //'DEFAULT_GROUP'  => 'Home',
	//数据库配置信息
        'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => 'localhost', // 服务器地址
        'DB_NAME'   => 'sbk', // 数据库名
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => '', // 密码
        'DB_PORT'   => 3306, // 端口
        'DB_PREFIX' => 'sbk_', // 数据库表前缀
);
?>