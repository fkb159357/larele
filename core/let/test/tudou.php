<?php
/* $s = 'abtest=0&referrer=http%3A%2F%2Fwww.tudou.com%2F&href=http%3A%2F%2Fwww.tudou.com%2Flistplay%2FyUqrZZiIWkk%2FSJmOIPT9k60.html%3FFR%3DLIAN&USER_AGENT=Mozilla%2F5.0%20(Windows%20NT%206.1%3B%20WOW64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F42.0.2311.152%20Safari%2F537.36&areaCode=440100&yjuid=&yseid=1431934547755zygeYr&ypvid=1431934709305GSTs3d&yrpvid=1431934649739qwQCCF&yrct=1&frame=0&noCookie=0&yseidtimeout=1431941909306&yseidcount=1&fac=1&aop=0&listType=1&listCode=yUqrZZiIWkk&listId=22165017&lid=22165017&paid=&paidTime=&paidType=&lshare=1&icode=SJmOIPT9k60&iid=231451830&sp=http://g1.tdimg.com/53e14f4ba1bdfb06166e543e692114fd/p_2.jpg&segs=%7B%223%22%3A%5B%7B%22baseUrl%22%3A%22%2Ff4v%2F30%2F231451830.h264_2.0400030100555942FF9F383D245DB54B2671A8-50F7-F678-2F73-000313073344.f4v%22%2C%22seconds%22%3A96000%2C%22no%22%3A0%2C%22pt%22%3A3%2C%22xid%22%3A%220400030100555942FF9F383D245DB54B2671A8-50F7-F678-2F73-000313073344%22%2C%22k%22%3A313073344%2C%22size%22%3A6695802%7D%5D%2C%222%22%3A%5B%7B%22baseUrl%22%3A%22%2Ff4v%2F30%2F231451830.h264_1.0400020100555941B98C0AB807C7205F726E50-E3E1-7C3E-8AAD-000313072394.f4v%22%2C%22seconds%22%3A96000%2C%22no%22%3A0%2C%22pt%22%3A2%2C%22xid%22%3A%220400020100555941B98C0AB807C7205F726E50-E3E1-7C3E-8AAD-000313072394%22%2C%22k%22%3A313072394%2C%22size%22%3A3485197%7D%5D%2C%225%22%3A%5B%7B%22baseUrl%22%3A%22%2Ff4v%2F30%2F231451830.h264_4.0400050100555943EE9FD1FC4B6D31BB6AF78A-DDB9-9EC7-FCD5-000313073933.f4v%22%2C%22seconds%22%3A96000%2C%22no%22%3A0%2C%22pt%22%3A5%2C%22xid%22%3A%220400050100555943EE9FD1FC4B6D31BB6AF78A-DDB9-9EC7-FCD5-000313073933%22%2C%22k%22%3A313073933%2C%22size%22%3A14547374%7D%5D%2C%2299%22%3A%5B%7B%22baseUrl%22%3A%22%2Ff4v%2F30%2F231451830.h264_98.04009901005559452739AA535A031C6A32CB7C-74A6-7DFD-15FA-000313074876.f4v%22%2C%22seconds%22%3A96000%2C%22no%22%3A0%2C%22pt%22%3A99%2C%22xid%22%3A%2204009901005559452739AA535A031C6A32CB7C-74A6-7DFD-15FA-000313074876%22%2C%22k%22%3A313074876%2C%22size%22%3A31825185%7D%5D%7D&tvcCode=-1&channel=1&tict=3&hd=3&ol=1&olw=1280&olh=720&olr=2646805&kw=%E7%BD%91%E6%9B%9D%E2%80%9C%E5%B3%B0%E5%A6%AE%E6%81%8B%E2%80%9D%E7%BB%88%E7%BB%93%E7%9C%9F%E5%AE%9E%E5%8E%9F%E5%9B%A0%EF%BC%9A%E5%85%B6%E4%B8%AD%E4%B8%80%E4%B8%AA%E6%98%AF%E5%8F%8C%E6%80%A7%E6%81%8B&mediaType=vi&np=0&sh=0&st=0&videoOwner=104513500&ocode=4bKEUDezfJQ&time=96&vcode=&ymulti=&lang=&isFeature=0&is1080p=0&hasWaterMark=1&actionID=0&resourceId=&tpa=&cs=&k=%E5%86%AF%E7%BB%8D%E5%B3%B0%7C%E5%80%AA%E5%A6%AE&prd=&uid=0&ucode=&vip=0&juid=019lievs811209&seid=019liv6dns7j5&showWS=0&ahcb=0&wtime=40&lb=0&scale=0&dvd=0&hideDm=0&pepper=http://css.tudouui.com/bin/binder/pepper_17.png&panelEnd=http://css.tudouui.com/bin/lingtong/PanelEnd_13.swz&panelRecm=http://css.tudouui.com/bin/lingtong/PanelRecm_9.swz&panelShare=http://css.tudouui.com/bin/lingtong/PanelShare_7.swz&panelCloud=http://css.tudouui.com/bin/lingtong/PanelCloud_12.swz&panelDanmu=http://css.tudouui.com/bin/lingtong/PanelDanmu_18.swz&aca=&listOwner=378550957';
$arr = explode('&', urldecode($s));
dump($arr);

$segs = json_decode(ltrim($arr[27], 'segs='), true);
dump($segs);

$newSegs = '{"3":[{"baseUrl":"\/f4v\/30\/231451830.h264_2.0400030100555942FF9F383D245DB54B2671A8-50F7-F678-2F73-000313073344.f4v","seconds":96000,"no":0,"pt":3,"xid":"0400030100555942FF9F383D245DB54B2671A8-50F7-F678-2F73-000313073344","k":313073344,"size":6695802}],"2":[{"baseUrl":"\/f4v\/30\/231451830.h264_1.0400020100555941B98C0AB807C7205F726E50-E3E1-7C3E-8AAD-000313072394.f4v","seconds":96000,"no":0,"pt":2,"xid":"0400020100555941B98C0AB807C7205F726E50-E3E1-7C3E-8AAD-000313072394","k":313072394,"size":3485197}],"5":[{"baseUrl":"\/f4v\/30\/231451830.h264_4.0400050100555943EE9FD1FC4B6D31BB6AF78A-DDB9-9EC7-FCD5-000313073933.f4v","seconds":96000,"no":0,"pt":5,"xid":"0400050100555943EE9FD1FC4B6D31BB6AF78A-DDB9-9EC7-FCD5-000313073933","k":313073933,"size":14547374}],"99":[{"baseUrl":"\/f4v\/30\/231451830.h264_98.04009901005559452739AA535A031C6A32CB7C-74A6-7DFD-15FA-000313074876.f4v","seconds":96000,"no":0,"pt":99,"xid":"04009901005559452739AA535A031C6A32CB7C-74A6-7DFD-15FA-000313074876","k":313074876,"size":31825185}]}';
dump(json_decode($newSegs, true)); */


//详见：项目123/main123.js


header('Content-type: text/html; charset=gbk');


import('net/dwHttp');
import('phpQuery/phpQuery');

$tdUrl = 'http://www.tudou.com/programs/view/wWOVFYqPhBM';
$parseUrl = 'http://www.flvcd.com/parse.php';
$url = $parseUrl.'?'.http_build_query(array(
	'format' => '',
	'kw' => $tdUrl,
	'no_ad' => 1,
	'go' => 1,
));
$dh = new dwHttp();
$ret = $dh->get($url);
$dp = array();//downparse.php data
preg_match('/var\s+a\s*\=\s*(?<tt>\d+)\s*\;/', $ret, $matches);
$dp['tt'] = $matches['tt'];
preg_match('/\<input\s+hidden=[\"\']hidden[\"\']\s*name=[\"\']name[\"\']\s*value=[\"\']value[\"\']\s*/', $ret, $matches);

$dp['url'] = $tdUrl;

phpQuery::newDocumentHTML($ret);
$t = 0;
$tt = null;
$sc = null;
$msKey = pq('#msKey_input')->val();//#msKey_input
$tsn = pq('#tsn_input')->val();//#tsn_input
$passport = '';
