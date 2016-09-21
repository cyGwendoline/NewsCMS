<?php
/* Smarty version 3.1.28, created on 2016-09-21 09:18:32
  from "D:\wamp\www\my.news.com\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57e234483b6ef6_28408603',
  'file_dependency' => 
  array (
    'f5c1ad9544ce8be5d708b1939a5d31bd968ad39c' => 
    array (
      0 => 'D:\\wamp\\www\\my.news.com\\index.php',
      1 => 1474442310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e234483b6ef6_28408603 ($_smarty_tpl) {
echo '<?php
';?>include_once('global.php');

$query = $db->query("select * from `p_config` ");
while($row = mysqli_fetch_array($query)){
    echo "<pre>";
    print_r($row);
}
$smarty->assign("row",$row);
$smarty->display("index.php");
<?php echo '?>';
}
}
