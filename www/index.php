<?php
	//开启调试模式
	define('APP_DEBUG', true);
	//定义THINK_PATH
	define('THINK_PATH','../sbkCore/ThinkPHP/');
	//定义项目名称
    define('APP_NAME', 'sbk');
    //定义项目路径
    define('APP_PATH', '../sbkCore/');
    //加载框架入文件
    require(THINK_PATH.'ThinkPHP.php');
    //App::run();