<?php
$a = "grep -o '[0-9]\{1,3\}\.[0-9]\{1,3\}\.[0-9]\{1,3\}\.[0-9]\{1,3\}' /var/log/secure|sort|uniq -c";
$r = exec($a);
//将尝试多次错误的IP BAN掉
