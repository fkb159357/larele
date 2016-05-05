<?php /* Smarty version Smarty-3.1.18, created on 2016-04-18 00:18:55
         compiled from "core\tpl\posts\posts_layout.html" */ ?>
<?php /*%%SmartyHeaderCode:126325713b76f8ac9e9-57352626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad36b465ecd3995cb71e6d91304b4c4f56563aa5' => 
    array (
      0 => 'core\\tpl\\posts\\posts_layout.html',
      1 => 1460191875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126325713b76f8ac9e9-57352626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'T' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5713b76fbdd124_89666686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5713b76fbdd124_89666686')) {function content_5713b76fbdd124_89666686($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Larele实验室 - <?php if ($_smarty_tpl->tpl_vars['pageTitle']->value) {?><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
<?php } else { ?>无标题<?php }?></title>
	
	<!-- 此处支持：跳转至siteapp.baidu.com提供的移动页面 -->	
	<script src="http://siteapp.baidu.com/static/webappservice/uaredirect.js" type="text/javascript"></script><script type="text/javascript">uaredirect("http://larele.com","http://larele.com");</script>
	
	<!-- http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html -->
	<link href="./res/lib/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
	<link href="./res/lib/bootstarp-material-design/css/ripples.min.css" rel="stylesheet">
	<link href="./res/lib/bootstarp-material-design/css/material-wfont.min.css" rel="stylesheet">
	<link href="./res/lib/lib.css" rel="stylesheet">
	<link href="./res/biz/posts/posts.css" rel="stylesheet">
	
	<script src="./res/lib/jquery-1.11.1.min.js"></script>
	<script src="./res/lib/underscore-1.7-min.js"></script>
	<script src="./res/lib/momentjs/moment.min.js"></script>
	<script src="./res/lib/momentjs/moment-with-locales.min.js"></script>
    <script src="//cdn.bootcss.com/markdown.js/0.5.0/markdown.min.js"></script>
	<script src="./res/lib/di.js"></script>
</head>
<body>
	<div id="dataStore" class="hide" data-tpl="<?php echo @constant('DI_DO_MODULE');?>
/<?php echo @constant('DI_DO_FUNC');?>
"></div>
	
	<!-- Header -->
	<?php echo $_smarty_tpl->getSubTemplate ('posts/posts_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="lib-blank-75"></div>
	
	<div class="container-fluid">
		<!-- 左侧、右侧 -->
		<div class="row-fluid">
			<div class="col-xs-9 container-fluid">
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['T']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
			<?php echo $_smarty_tpl->getSubTemplate ('posts/posts_right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		<div class="lib-blank-25"></div>
	</div>
	<!-- 底部横排推荐图(进入content视图时显示) -->
	<?php echo $_smarty_tpl->getSubTemplate ("posts/posts_bottom_recommend.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
	<!-- Footer -->
	<?php echo $_smarty_tpl->getSubTemplate ('posts/posts_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- Fixed Widgets -->
	<?php echo $_smarty_tpl->getSubTemplate ('posts/posts_widgets.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<script src="./res/lib/bootstrap3/js/bootstrap.min.js"></script>
	<script src="./res/lib/bootstarp-material-design/js/ripples.min.js"></script>
	<script src="./res/lib/bootstarp-material-design/js/material.min.js"></script>
	<script src="./res/biz/posts/posts.js?V=20150621-1"></script>
	<script>
	    $(document).ready(function() {
	        $.material.init();
	        $('body').css({
	            'font-family' : '微软雅黑',
	            'font-size' : '18px'
	        });
	    });
	</script>
	
	<!-- 资源均衡s1~s9 -->
	<script>
		$(function(){
		    var that = this;
		    that.getCookie = function(name) {
				var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
				if (arr != null) return decodeURI(arr[2]);
				return null;
			};
			$('img').each(function(i, e){
			    if (! e.src.match(/^http\:\/\/res\.miku\.us/)) return;
			    var n = i % 9 + 1;
		        e.src = e.src.replace(/(^http\:\/\/)(res\.miku\.us)/, '$1s' + n + '.$2');
		    });
		});
	</script>

</body>
</html><?php }} ?>
