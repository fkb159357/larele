<?php
class DIRouteRewrite {
    
    /**
     * 自定义路由重写规则
     * 书写原则，特殊在前，通用在后
     * 详见：
     *      DIRoute::rewrite() @ __route.php
     */
    static $rulesMap = array(
        '://larele.com' => 'posts/getlist',//注意：这里的配置会将DIUrlShell::$_default_shell覆盖
        '://larele.me' => 'posts/getlist',//注意：这里的配置会将DIUrlShell::$_default_shell覆盖
        
        's' => 'shell.shell',
        's.html' => 'shell.shell',
        
        'posts' => 'posts',//对应别名规则：'posts' => 'posts/getlist'
        'posts-<any>.po' => 'posts/<any>',//对应别名规则：'posts/<key>' => 'posts/content/<key>'
        'posts/<any>' => 'posts/<any>',//对应别名规则：'posts/<key>' => 'posts/content/<key>'
        'posts-<any>' => 'posts/<any>',//对应别名规则：'posts/<key>' => 'posts/content/<key>'
        
        '<D>' => '<D>/start',
        '<D>.htm' => '<D>/start',
        '<D>.html' => '<D>/start',
        
        '<D>/<F>' => '<D>/<F>',
        '<D>/<F>/<A>' => '<D>/<F>/<A>',
        '<D>-<F>' => '<D>/<F>',
        '<D>-<F>-<A>' => '<D>/<F>/<A>',
        '<A>.<B>' => '<A>.<B>',
        '<A>.<B>.<C>' => '<A>.<B>.<C>',
    );
    
    /**
     * 不需要重写的
     * 左侧为相对于脚本目录的URI
     * 右侧表示重写失败时是否终止程序
     * 这些规则不受常量DI_KILL_ON_FAIL_REWRITE影响
     */
    static $withoutMap = array(
        'index.php' => false,
        'index.html' => false,
        'index.htm' => false,
        'favicon.ico' => true,
    	'robots.txt' => true,
    );
    
}