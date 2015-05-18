<?php
return array(
	//'配置项'=>'配置值'
    APP_DEBUG=>true ,

    DB_FIELD_CACHE=>false ,

    HTML_CACHE_ON=>false,
    
    //PDO连接方式
    DB_TYPE   => 'mysql', // 数据库类型
    DB_USER   => 'root', // 用户名
    DB_PWD    => '', // 密码
    DB_PREFIX => 'ap_', // 数据库表前缀 
    DB_DSN    => 'mysql:host=localhost;dbname=ap_system;charset=UTF8',


);