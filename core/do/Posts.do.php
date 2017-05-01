<?php
class PostsDo extends DIDo {
    
    protected $_layout = 'posts/posts_layout';
    
    private $colMap = array(
    	0 => array('id', '序号'),
        1 => array('title', '标题'),
        2 => array('content', '内容'),
        3 => array('raw_content', '原内容'),
        4 => array('create_time', '发表时间'),
        5 => array('update_time', '更新时间'),
        6 => array('uid', '作者UID'),
        7 => array('nickname', '作者'), //附加
        8 => array('hide', '河蟹'),
    );
    
    protected function _init(){
        $this->me = LoginRuntime::getItem(LR_RUNTIME_LOGIN_INFO);//获取登录态
        @$this->uid = $this->me->id;
        $this->T = strtolower(DI_DO_MODULE . '-' . DI_DO_FUNC) . '.html';
        $this->pageTitle = ucfirst(DI_DO_MODULE.'-'.DI_DO_FUNC);
    }
    
    /**
     * @alias posts/list => posts/getlist
     */
    function getList($p = 1){
        $P = supertable('Posts');
        $conds = array();
        if (! $this->me || $this->me->passport == 'root') $conds['hide'] = 0;//游客禁看隐藏的
        $list = $P->select($conds, '', 'sort ASC,update_time DESC', array($p, 8, 8));
        $this->list = $list ?: array();
        $this->page = $P->page;
        $this->stpl();
    }
    
    function content($id = null){
        is_numeric($id) || putalert('param err');
        $conds = compact('id');
        if (! $this->me) $conds['hide'] = 0;
        $find = supertable('Posts')->find($conds);
        false === $find && putalert('not found');
        $this->p = $find;
        $this->pid = $find->id;
        $this->pageTitle .= ' - '.$find->title;
        $this->stpl();
    }
    
    //需要登录：见LoginFilter
    function pub(){
        $uid = $this->me->id;
        if (strcasecmp($_SERVER['REQUEST_METHOD'], 'post')) {
            $this->stpl();
        } else {
            $data = array(
            	'title' => arg('title'),
                'digest' => arg('digest'),
                'content' => arg('content'),
                'raw_content' => arg('raw_content'),//PostsWriteFilter过滤器生成的参数
                'create_time' => time(),
                'update_time' => time(),
                'uid' => $uid,
                'urlalia' => arg('urlalia'),
                'sort' => (int) arg('sort'),
                'hide' => arg('hide')=='on' ? 1 : 0,
            );
            $op = supertable('Posts')->insert($data);
            $op ? putalert(null, url("posts/edit/{$op}")) : putalert('failed');
        }
    }
    
    //需要登录：见LoginFilter
    function edit($id = null){
        $uid = $this->me->id;
        is_numeric($id) || putalert('param err');
        $find = supertable('Posts')->find(compact('id'));
        false === $find && putalert('not found');
        $find->uid != $uid && putalert("Its\'t yours!");
        if (strcasecmp($_SERVER['REQUEST_METHOD'], 'post')) {
            $this->p = $find;
            $this->pageTitle .= mb_substr(' - '.$find->title, 0, 15, 'utf-8');
            $this->stpl();
        } else {
            $data = array(
                'title' => arg('title'),
                'digest' => arg('digest'),
                'content' => arg('content'),
                'raw_content' => arg('raw_content'),//PostsWriteFilter过滤器生成的参数
                'update_time' => time(),
                'uid' => $uid,
                'urlalia' => arg('urlalia'),
                'sort' => (int) arg('sort'),
                'hide' => arg('hide')=='on' ? 1 : 0,
            );
            $op = supertable('Posts')->update(compact('id'), $data);
            $op ? putalert(null, url("posts/edit/{$id}")) : putalert('failed');//failed on 0 or false
        }
    }
    
}
