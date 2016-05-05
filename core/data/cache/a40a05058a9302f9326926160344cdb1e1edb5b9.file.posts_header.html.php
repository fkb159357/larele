<?php /* Smarty version Smarty-3.1.18, created on 2016-04-18 00:18:55
         compiled from "core\tpl\posts\posts_header.html" */ ?>
<?php /*%%SmartyHeaderCode:35585713b76fc274b0-03277627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a40a05058a9302f9326926160344cdb1e1edb5b9' => 
    array (
      0 => 'core\\tpl\\posts\\posts_header.html',
      1 => 1459619866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35585713b76fc274b0-03277627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'me' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5713b76ff05b67_20796147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5713b76ff05b67_20796147')) {function content_5713b76ff05b67_20796147($_smarty_tpl) {?><div class="navbar navbar-default navbar-fixed-top diy-header">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">Larele 实验室</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
            <li class="active diy-header-title"><a href="javascript:void(0)"><?php if ($_smarty_tpl->tpl_vars['pageTitle']->value) {?><?php echo mb_substr($_smarty_tpl->tpl_vars['pageTitle']->value,0,30,'utf-8');?>
<?php } else { ?>无标题<?php }?></a></li>
            <li><a href="/posts">装逼录</a></li>
            <li class="dropdown">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">反应堆 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)">未知动作</a></li>
                    <li><a href="javascript:void(0)">未知动作</a></li>
                    <li><a href="javascript:void(0)">未知成分</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header"></li>
		            <li><a href="/link/to/kusha.html" target="_blank">某社区</a></li>
		            <li><a href="/link/to/conoha.html" target="_blank">前往体验Conoha!</a></li>
		            <li><a href="/link/to/linode.html" target="_blank">前往体验Linode!</a></li>
                </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-left">
            <input type="text" class="form-control col-lg-8" placeholder="查水表">
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:window.open('//miku.us/', '_blank')">生放送</a></li>
            <li><a href="/link/to/fm.html" target="_blank">肉串电台</a></li>
            <li><a href="/link.html" target="_self">MAP</a></li>
            <li class="dropdown">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php if ($_smarty_tpl->tpl_vars['me']->value) {?><?php echo $_smarty_tpl->tpl_vars['me']->value->nickname;?>
<?php } else { ?>封印<?php }?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)">未知命令1</a></li>
                    <li><a href="javascript:void(0)">未知命令2</a></li>
                    <li><a href="javascript:void(0)">未知命令3</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)">装逼命令4</a></li>
                </ul>
            </li>
            <li>&nbsp;</li>
        </ul>
    </div>
</div><?php }} ?>
