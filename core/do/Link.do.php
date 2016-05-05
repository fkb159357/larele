<?php 
/**
 * 链接相关
 * @author Ltre<ltrele@gmail.com>
 * @since 2015-8-11
 */
class LinkDo extends DIDo {

    //Link Map
    function start() {
        $this->stpl();
    }
    
    function to($to = null){
        switch ($to) {
        	case 'fm': $url = 'http://miku.us/fm'; break;
        	case 'kusha': $url = 'http://kusha.biz/'; break;
            case 'conoha': $url = 'https://www.conoha.jp/referral/?token=zXCktpe0hJUbef96oG0fvQE796o2DPlm.ZVmk8qDV1U526JTvNA-2KW'; break;
            case 'linode': $url = 'https://www.linode.com/?r=b5a47a9f6a695f6535c22f19a5154d0db93c29c1'; break;
            default: $url = 'http://larele.com/';
        }
        redirect($url);
    }

}