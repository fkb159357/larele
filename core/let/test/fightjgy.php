<!DOCTYPE html>
<html>
<head>
<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/underscore.js/1.8.3/underscore-min.js"></script>
<script src="//cdn.bootcss.com/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="//cdn.bootcss.com/socket.io/1.3.5/socket.io.min.js"></script>
</head>
<body>
<div id="qrcode"></div>
</body>

<script type="text/javascript" src="http://res.miku.us/res/js/jgy-2nd.js"></script>
<script type="text/javascript">
$(function(){

    var token = location.hash.replace('#','') || -(-new Date());//token也可手动用fragment生成
    $('#qrcode').qrcode({width:300,height:300,text:'http://iio.ooo/fm-ctrlview/'+token});
    var u = 'http://io.iio.ooo:3000/';
    var socket = io.connect(u);
    socket.emit('fm/regCmd', token);
    socket.on('fm/acceptCmd', function(rToken, type, value){
        if (token != rToken) return;
        switch (type) {
            case 0: break;
        }
    });
});

</script>
</html>