<?php
include_once ('./configs/config.php');
include_once ('./common/smarty/Smarty.class.php');
include_once ('./common/mysql.class.php');
include_once ('./common/action.class.php');

//连接数据库
//$db=new action($mydbhost,$mydbuser,$mydbpw,$mydbname,ALL_PS,$mydbcharset);
$db=new action($mydbhost,$mydbuser,$mydbpw,$mydbname,$mydbcharset);
//----smarty------
$smarty = new smarty();
$smarty ->template_dir     = $smarty_template_dir;
$smarty ->compile_dir      = $smarty_compile_dir;
$smarty ->config_dir       = $smarty_config_dir;
$smarty ->cache_dir        = $smarty_cache;
$smarty ->caching          = $smarty_caching;
$smarty ->left_delimiter  = $smarty_delimiter[0];
$smarty ->right_delimiter = $smarty_delimiter[1];
?>