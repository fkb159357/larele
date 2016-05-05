<?php
//消耗流量，默认间隔1h，其实就是不循环
$interval = arg('interval', 3600);

if (! strcasecmp($_SERVER['REQUEST_METHOD'], 'get')) {
    $interval *= 1000;
    die("<html><body><script src='//cdn.bootcss.com/jquery/2.1.4/jquery.min.js'></script><script>var post = function(){\$.post('./?test.useit&rand='+Math.random());}; post(); setInterval(post, {$interval} );</script></body></html>");
}
$d = array();
for ($i = 0; $i < 500; $i ++) {
    $d[] = range(1, 1000);
}
var_dump($d);