<?php
class XhprofFilter implements DIFilter {
    
    function doFilter(){
        import('dw/dwXhprof');
        $xh = new dwXhprof();
        $xh->enable('larele', 1);
    }
    
}