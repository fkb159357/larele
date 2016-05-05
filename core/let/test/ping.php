<script>
function ping(ip, i, callbacks) {
    var img = new Image();
    var start = new Date().getTime();
    var flag = false;
    var isCloseWifi = true;
    var hasFinish = false;
  
    img.onload = function() {
        if ( !hasFinish ) {
            flag = true;
            hasFinish = true;
            img.src = '';
            console.log('Ping ' + ip + ' success. ');
            callbacks.onload && callbacks.onload(ip, i);
        }
    };
  
    img.onerror = function() {
        if ( !hasFinish ) {
            if ( !isCloseWifi ) {
                flag = true;
                img.src = '';
                console.log('Ping ' + ip + ' success. ');
            } else {
                console.log('network is not working!');
                callbacks.onerror && callbacks.onerror(ip, i);
            }
            hasFinish = true;
        }
    };
  
    setTimeout(function(){
        isCloseWifi = false;
        console.log('network is working, start ping...');
        callbacks.ontimeout && callbacks.ontimeout(ip, i);
    },2);
  
    img.src = 'http://' + ip + '/' + start;
    setTimeout(function() {
        if ( !flag ) {
            hasFinish = true;
            img.src = '';
            flag = false ;
            console.log('Ping ' + ip + ' fail. ');
            callbacks.onfail && callbacks.onfail(ip, i);
        }
    }, 1500);
}

//ping('www.google.com:80');
var pre = '172.16.43.';

for (var i = 1; i < 255; i++) {
    var ip = pre + i;
    document.write('<span id="' + i + '">' + i + '</span><br>');
    ping(ip, i, {
        onload: function(ip,i){
            document.getElementById(i).style.color = 'green';
        },
        onerror: function(ip,i){
            document.getElementById(i).style.color = 'red';
        },
        ontimeout: function(ip,i){
            document.getElementById(i).style.color = 'yellow';
        },
        onfail: function(ip,i){
            document.getElementById(i).style.color = 'brown';
        }
    });
}

</script>