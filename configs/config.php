<?php
//-------配置数据库-------
$mydbhost       = "localhost";
$mydbuser       = "root";
$mydbpw         = "";
$mydbname       = "news_php100";
$mydbcharset    = "utf8";

define("ALL_PS","php100");
//-------配置smarty---------
$smarty_template_dir    = './templetes/';
$smarty_compile_dir     = './templetes_c/';
$smarty_config_dir      = './configs/';
$smarty_cache           = './cache/';
$smarty_caching         = false;
$smarty_delimiter       = explode("|","{|}");
?>