<?php

$msgList = session('msgList') ?: array();
$answers = session('answers') ?: array();
$mode = session('mode') ?: 'wait';//默认为等待话题模式
$msg = arg('msg');
if ($msg !== NULL) {
    $msgList[] = $msg;
    session('msgList', $msgList);
}



if ($mode === 'wait') {
    
    echo "I'm bot";
    session('mode', 'chat');
    
} elseif ($mode === 'learn') {
    
    $lastMsg = @$msgList[count($msgList) - 2];
    if ($lastMsg != '') {
        $answers[$lastMsg] = $msg;//学习答案
        session('answers', $answers);
    }
    session('mode', 'chat');
    echo "已学习！";
    
} elseif ($mode === 'chat') {
    
    if (isset($answers[$msg])) {
        echo $answers[$msg];
    } else {
        session('mode', 'learn');//遇到不懂的，改为学习模式
        echo "纳尼索类意米挖干奶（快教我咋回答）";
    }
    
}


/**
 * 模式列举：
 * 等待话题、对话、学习
 */
