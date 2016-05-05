<?php
/**
 * 文章写入时的过滤器
 * 目前用于posts/pub、posts/edit
 * 执行优先级低于LoginFilter
 */
class PostsWriteFilter implements DIFilter {

    public function doFilter() {
        $check = $this->checkAuth();
        if (! $check) putalert('auth failed');//此处不会执行，除非去掉LoginFilter
    }
    
    //仅在POST时拦截，只有鹳狸猿发的脚本不会被过滤。
    private function checkAuth(){
        if (strcasecmp($_SERVER['REQUEST_METHOD'], 'post')) { return true; }
        $me = DIRuntime::getItem(LR_RUNTIME_LOGIN_INFO);
        if (! $me) { return false; }
        $isRooter = Rooter::isRooter($me->passport);
        $GLOBALS['request_args']['raw_content'] = $GLOBALS['request_args']['content'];//备份原内容
        if (! $isRooter) {
            import('libutil/xsshtml');
            xssFilter($GLOBALS['request_args'], false, array('digest', 'content'));
        }
        return true;
    }
    
}