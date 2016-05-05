<?php
/**
 * 镜像
 * @author Ltre<ltrele@gmail.com>
 * @since 2015-8-9
 */
class MirrorDo extends DIDo {

    private $http = null;
    
    protected function _init(){
        import('net/dwHttp');
        $this->http = new dwHttp();
    }
    
    private function _deal($ret, $domain = ''){
        if ('v.huya.com' == $domain) {
            $ret = str_replace('from=huya', 'from=huya&no_ad=1', $ret);
        }
        return $ret;
    }
    
    function start() {
        $addr = arg('addr', 'http://v.huya.com/play/145405.html');
        $cache = dw_cache()->get(sha1($addr));
        if ($cache && CACHE_GET_ABLE) die($cache);
        $ret = $this->http->get($addr);
        $ret = $this->_deal($ret, array_item(parse_url($addr), 'host'));
        if (CACHE_SET_ABLE) dw_cache()->set(sha1($addr), $ret);
        echo $ret;
    }

}