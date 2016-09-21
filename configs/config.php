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

$sql = "select * from `p_newsclass` WHERE id=0 order by id desc";
$query = $db -> query($sql);
while($row_new=$db->mysqli_fetch_array($query)) {
    $sm_class[] = array('name'=>$row_new['name'],'id'=>$row_new['id']);
}
$smarty->assign("sm_class",$sm_class);//导航引入

$sql = "select * from `p_config`";
$query = $db -> query($sql);
while($row_config=$db->mysqli_fetch_array($query)) {
    $sm_config[] = $row_config['values'];
}
$smarty->assign("sm_config",$sm_config);//配置引入

$smarty->assign("t_dir",$smarty_template_dir);
?>