<?php
/**
 * 缓存控制预处理
 */
class GlobalCacheFilter implements DIFilter {
    
    public function doFilter() {
        import('store/dwCache');
        $a = arg('cache');
        if ('no' == strtolower($a)) {
            define('CACHE_GET_ABLE', false);
            define('CACHE_SET_ABLE', false);
        } elseif ('update' == strtolower($a)) {
            define('CACHE_GET_ABLE', false);
            define('CACHE_SET_ABLE', true);
        } else {
            define('CACHE_GET_ABLE', true);
            define('CACHE_SET_ABLE', true);
        }
    }
    
}