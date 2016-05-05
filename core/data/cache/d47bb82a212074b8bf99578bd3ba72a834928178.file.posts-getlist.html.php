<?php /* Smarty version Smarty-3.1.18, created on 2016-04-18 00:18:56
         compiled from "core\tpl\posts-getlist.html" */ ?>
<?php /*%%SmartyHeaderCode:28165713b77007b109-58264746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd47bb82a212074b8bf99578bd3ba72a834928178' => 
    array (
      0 => 'core\\tpl\\posts-getlist.html',
      1 => 1442169325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28165713b77007b109-58264746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'v' => 0,
    'uid' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5713b770238676_53771313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5713b770238676_53771313')) {function content_5713b770238676_53771313($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['list']->value)) {?>
	<div class="well diy-posts-lines-blank">这里是空的</div>
<?php } else { ?>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<div class="well diy-posts-line" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
">
		    <div class="diy-posts-line-title"><?php if ($_smarty_tpl->tpl_vars['v']->value->hide) {?><font color="red">[隐]</font><?php }?><?php echo $_smarty_tpl->tpl_vars['v']->value->title;?>
<span class="pull-right"><?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['v']->value->uid) {?>*<?php }?></span></div>
		    <div class="diy-posts-line-content "><?php echo $_smarty_tpl->tpl_vars['v']->value->digest;?>
</div>
		</div>
	<?php } ?>
	<div class="pull-right"><?php echo bt3_shell_page_sm(array('s'=>"posts/p{p}",'p'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
</div>
<?php }?>
<?php }} ?>
