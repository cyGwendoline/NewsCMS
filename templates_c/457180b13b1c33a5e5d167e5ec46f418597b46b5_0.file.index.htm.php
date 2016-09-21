<?php
/* Smarty version 3.1.28, created on 2016-09-21 17:26:05
  from "D:\wamp\www\my.news.com\templates\index.htm" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57e2a68d51f954_38146537',
  'file_dependency' => 
  array (
    '457180b13b1c33a5e5d167e5ec46f418597b46b5' => 
    array (
      0 => 'D:\\wamp\\www\\my.news.com\\templates\\index.htm',
      1 => 1474471563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e2a68d51f954_38146537 ($_smarty_tpl) {
?>
<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>首页</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/common.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/layout.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
css/red.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="content border_bottom">
    <ul id="sub_nav">
        <li><a href="#">设为首页</a> </li>
        <li><a href="#">加入收藏</a> </li>
        <li class="nobg"><a href="#">联系我们</a> </li>
    </ul>
    <img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
img/logo.jpg" alt="首页" name="logo" width="50" height="50" id="logo" /><br class="clear" />
</div>
<div class="content dgreen-bg">
    <div class="content">
        <ul id="main_nav">
            <li class="nobg"><a href="#">网站首页</a> </li>
            <li><a href="#">公司介绍</a> </li>
            <li><a href="#">产品展示</a> </li>
            <li><a href="#">企业资讯</a> </li>
            <li><a href="#">联系我们</a> </li>
        </ul>
        <br class="clear"/>
    </div>
</div>
</body>
</html><?php }
}
