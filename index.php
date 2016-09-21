<?php
include_once('global.php');

$query = $db->query("select * from `p_config` ");
/*while($row = mysqli_fetch_array($query)){
    echo "<pre>";
    print_r($row);
}*/
$row = mysqli_fetch_array($query);
$smarty->assign("row",$row['name']);
$smarty->display("index.html");
?>