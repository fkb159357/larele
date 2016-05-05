<?php
class DIUrlShell {
    
    /**
     * 默认命令
     */
    static $_default_shell = 'posts/getlist';
    
    /**
     * 严格模式启用时：
     *  对于do命令————只能访问配置表里所允许的项目，且传入参数个数要不少于配置的个数。
     *  对于let命令————只能访问配置规则允许的项目
     * 严格模式禁用时：
     *  对于do命令————所有do命令都可访问，但系统依旧判断目标是否存在。
     *      已在配置表里指定参数个数的，依旧要传入足够的参数。
     *      对于没有在配置表里存在的命令，其传入参数必需个数  以 { 实际函数参数表必需个数 } 为准。
     *  对于let命令————所有let命令都可访问，但系统依旧判断目标是否存在。
     *  
     * 注意：
     *      不管是否处于严格模式，都会检测实际方法参数表配置的需传个数，
     *      配置的最少参数个数的的规则  要比  实际方法的参数表个数设置 更优先
     * @var boolean
     */
    static $_strict_mode = false;
    
    /**
     * regexp命令：可以指定一定的SHELL正则，将其重定向到DO或LET或ROUTE别名
     * 注：该特性支持CMS系统的自由路由设计，不必再将URL拘泥于DO或LET
     */
    static function regexpshell(){
        return array(
            '/diyroute(\/[^\/]+)*$/' => 'diyroute',
        );
    }
    
    /**
     * do命令：可以定位到Do组件，再精确到子方法，还可尾随参数
     * URI格式：?xxx/yyy[/param1/param2/.../paramx]
     * 格式说明：xxx对应XxxDo，yyy对应function yyy()
     * 匹配规则：数组一维层对应XxxDo，二维层对应function，二维层的数字指定必需参数个数
     * 注意事项：当严格模式关闭时，二维层的参数个数依然起约束作用，其它没有在规则中配置的XxxDo的function，其参数必须个数以实际参数表的必需个数为准。
     */
    static function doshell(){
        return array(
        );
    }
    
    /**
     * let小程序命令
     * 值枚举：[*、i、i.*、i.、i.i、i.i.、i.i.*、.、.*]
     * 数组里配置的规则，凡是出现冲突的，一律作合并处理
     * 前置声明：小程序都在DI_LET_PATH目录里，以下简称“该目录”。
     * 匹配规则如下：
     * {} - 空字串，没有任何LET可以执行。如果需要此效果，仅仅配置为return array()即可;
     * {.} - 该目录层次内所有LET可执行\
     * {*} - 该目录下所有层次的LET都可执行
     * {.*} - 该目录下所有层次的LET都可执行
     * {i} - 该目录下的i.php可执行
     * {i.} - 从该目录起，i目录层次内所有LET可执行
     * {i.*} - 从该目录起，i目录下所有层次的LET可执行
     * {i.i} - 从该目录起，i/i.php可执行
     * {i.i.} - 从该目录起，i/i目录层次内所有LET可执行
     * {i.i.*} - 从该目录起，i/i目录下所有层次的LET可执行
     * {i.i.i} - 从该目录起，i/i/i.php可执行
     * URI格式： 必须指定具体的LET文件路径，规则为{  ?之后紧跟i.i[.i.。。。..i]，其中，i为任意字母/数字/下划线/横杠/句点的组合   }
     *  例如：
     *      ?.i - 该目录下的i.php
     *      ?i - 该目录下的i.php
     *      ?i.i - 该目录下的i/i.php
     *      ?. - 无效命令
     *      ? - 无效命令
     *      ?i. - 无效命令
     * 注意事项：
     *      LET暂时不支持在文件名使用“.”和“_”，如文件“/core/let/a.b.php”是不能用?a.b定位的。但let()函数可以执行含有“.”和“_”的文件。
     */
    static function letshell(){
        return array(
        	'.', 'i.'
        );
    }
    
    //ROUTE别名 => 真实ROUTE值，支持任意通配符，不区分大小写，匹配优先级以最小数组索引值为最高。由于存在BUG，禁止在配置左侧时仅使用通配符，如“'<X>' => '<X>/start'”，若有需要，请配置具体的，如'fm'=>'fm/start'
    static function alias(){
        return array(
            '<X>/list' => '<X>/getlist',
            'alia' => 'test/alias',
            
            'posts' => 'posts/getlist',
            'posts/getlist' => 'posts/getlist',
            'posts/pub' => 'posts/pub',
            'posts/p<X>' => 'posts/getlist/<X>',
            'posts/edit' => 'posts/edit',
            'posts/<X>' => 'posts/content/<X>',
        );
    }
    
}