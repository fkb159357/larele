<?php
/**
 * 配置数据库基本信息
 * 【！！强烈建议！！】
 * 不要将本文件中的外网数据库信息提交
 */
$hostname = substr( ($h = $_SERVER['HTTP_HOST']), 0, (false !== ($pos = strpos($h, ':')) ? $pos : strlen($h)) );
if (in_array($hostname, array(
    '127.0.0.1',
    'localhost',
    'larele.me',//绑定本地HOSTS
))){
	
    class DIDBConfig {
        static $driver = 'DIMySQL';//驱动类
        static $host = '127.0.0.1';
        static $port = 3306;
        static $db = 'larele';
        static $user = 'root';
        static $pwd = 'ltre';
        static $table_prefix = 'lr_';//表前缀
    }
    class DIMMCConfig {
        static $domain = 'larele';
        static $host = '127.0.0.1';
        static $port = 11211;
    }
    
} elseif (in_array($hostname, array(
	'larele.webdev.duowan.com'
))) {
    
    class DIDBConfig {
        static $driver = 'DIMySQL';//驱动类
        static $host = '172.26.42.222';
        static $port = 3306;
        static $db = 'larele';
        static $user = 'larele';
        static $pwd = 'larele';
        static $table_prefix = 'lr_';//表前缀
    }
    class DIMMCConfig {
        static $domain = 'larele';
        static $host = 'blue.hostker.net';//10.7.12.35
        static $port = 31020;
    }
    
} elseif (in_array($hostname, array(
    'larele.sinaapp.com',
))) {
    
    class DIDBConfig {
        static $driver = 'DIMySQL';//驱动类
        static $host;
        static $port;
        static $db;
        static $user;
        static $pwd;
        static $table_prefix = 'lr_';//表前缀
    }
    
} else if (in_array($hostname, array(
	'larele.com', //现于2015-08-10运行于linode tokyo, 曾于2015-05-11运行到Hostker(Larele)，于2015-1-4试运行到Hostker(fkb159357)
    'www.larele.com',
))) {
    
    class DIDBConfig {
        static $driver = 'DIMySQL';//驱动类
        static $host = '127.0.0.1';
        static $port = 3306;
        static $db = 'larele';
        static $user = 'larele';
        static $pwd = 'a1ad82a06fb30a71f9470fedfe811243dd5c8c8c';
        static $table_prefix = 'lr_';//表前缀
    }
    class DIMMCConfig {
        static $domain = 'larele';
        static $host = '127.0.0.1';
        static $port = 11211;
    }

} else {
    
    die;//环境不明确，终止
    
}