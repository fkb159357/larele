<?php
/**
 * 参照__env.php建议，按己所需，重新定制特性
 */
$hostname = substr( ($h = $_SERVER['HTTP_HOST']), 0, (false !== ($pos = strpos($h, ':')) ? $pos : strlen($h)) );
switch ($hostname) {
    //以下使用本地
	case '127.0.0.1':
        case '192.168.1.99':
	case 'localhost':
	case 'larele.me':
    case 'larele.webdev.duowan.com':
	    {
	        define('DI_ROUTE_REWRITE', true);
	        break;
	    }

	//以下使用SAE不可写空间
	case 'larele.sinaapp.com':
	    {
	        define('DI_DEBUG_MODE', false);
	        define('DI_IO_RWFUNC_ENABLE', false);
	        break;
	    }

	//以下使用可写空间(正式环境)
	case 'larele.com'://Hostker主机(Larele)。
	case 'www.larele.com'://Hostker主机(Larele)。
	case 'ltre.me': //老薛主机ltreme，于2015-05-26到期
	case 'www.ltre.me': //老薛主机ltre.me，于2015-05-26到期
    	{
    	    define('DI_DEBUG_MODE', false);
    	    define('DI_IO_RWFUNC_ENABLE', true);
    	    define('DI_ROUTE_REWRITE', true);
    	    break;
    	}
    //以下使用可写空间(测试环境)
	case 'innertest.larele.com'://恒创主机 - 香港九仓
	    {
	        define('DI_DEBUG_MODE', true);
	        define('DI_IO_RWFUNC_ENABLE', true);
	        break;
	    }
	default:die;//环境不明确，终止执行
}


define('DI_SMARTY_DEFAULT', false);//暂时所有环境不默认采用smarty
define('DI_PDO_FETCH_TYPE', PDO::FETCH_OBJ);//使用PDO获取查询结果时，本项目选择返回的数据格式
define('DI_SMARTY_LEFT_DELIMITER', '{~');
define('DI_SMARTY_RIGHT_DELIMITER', '~}');
define('DI_SESSION_PREFIX', 'lr_');