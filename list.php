<?php
include_once('global.php');

$query = $db -> findall("p_newsbase");
while ($row = $db -> mysqli_fetch_array($query)) {
    $news_class_arr[$row['id']] = $row['name'];
}

$query = $db -> findall("p_newsbase where f_id='$_GET['cid']'");
while ($row = $db -> mysqli_fetch_array($query)) {
    $news_class_in. = $row['id'].",";
    $news_class_list_arr[] = array("name"=>$row['name'],"id"=>$row['id']);
}
$news_class_in=$news_class_in."$_GET[cid]";

$result = mysqli_query("select id from p_newsbase whewe cid in ($news_class_in)");
$total = mysqli_num_rows($result);
pageft($total,20);
if($firstcount < 0)$firstcount = 0;
$query = $db -> findall("p_newsbase whewe cid in ($news_class_in) limit $firstcount,$displaypg");
while ($row = $db -> mysqli_fetch_array($query)) {
    $sm_list[] = array("cid"=>$row['cid'],"cidname"=>$news_class_arr[$row['cid']],"title"=>$row['title'],"id"=>$row['id'],"date_time"=>date("Y-m-d",$row['date_tiem']));
}
$smarty->assign("sm_list",$sm_list);//列表引入
$smarty->assign("pagenav",$pagenav);//分页数量
$smarty->assign("news_class_list_arr",$news_class_list_arr);//新闻子类

$smarty->display("list.htm");
?>