<?php
import('debug/showTrace');

//重复调用含有static变量的递归函数
function test1(){
    static $focus = 0;
    $focus ++;
    if ($focus < 10) {
        test1();
    }
    return $focus;
}

var_dump(test1());//10
var_dump(test1());//11
var_dump(test1());//12
var_dump(test1());//13



//外部重复调用时，重置内部static变量
function test2(){
    static $focus = 0;
    $trace = debug_backtrace();
    if (0 != strcasecmp(__FUNCTION__, @$trace[1]['function'])) {
        $focus = 0;
    }
    $focus ++;
    if ($focus < 10) {
        test2();
    }
    return $focus;
}

var_dump(test2());//10
var_dump(test2());//10
var_dump(test2());//10
var_dump(test2());//10


//说明：在static声明之后，加上按需重置代码即可