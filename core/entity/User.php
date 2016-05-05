<?php
class User extends DIEntity {

    /**
     * 用户是否存在
     * @param array $conds
     */
    static function exists($conds, DIModel &$M = null){
    	$M || $M = supertable('User');
        $f = $M->find($conds);
        return !!$f;
    }

    /**
     * 当前用户是否登录
     * @return object|bool 成功返回当前会话存储的user表对象
     */
    static function isLogin(){
        if (session_exists(LR_SESSION_MY) && is_object($my=session(LR_SESSION_MY))) {
            return $my;
        } else {
            return false;
        }
    }
    
}