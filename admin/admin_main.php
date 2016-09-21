<?php
include_once ('admin_global.php');
$r = $db -> Get_user_shell_check($uid,$shell);
if($_GET['action']=='logout') {
    $db -> Get_user_out();
}

$query = $db ->findall('p_config');
while($row = $db ->mysqli_fetch_array($query)) {
    $row_arr[$row['name']]=$row['values'];
}

if(isset($_POST['uodate'])) {
    unset($_POST['update']);
    foreach ($_POST as $name->$values) {
        $db->mysqli_query("update p_config set `value`='$values' where `name`='$name'");
    }
    $db -> Get_admin_msg("admin_main.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta content="Alan" name="Author">
    <link rev="MADE" href="creator@mail.com" />
    <link rel="stylesheet" href="images/private.css" type="text/css" />
    <meta content="MSHTML 6.00.6000.16890" name="GENERATOR" />
    <title>后台管理</title>
</head>
<body>
<form action="" method="post">
    <table class="navi" cellspacing="1" align="center" class="form">
        <tr>
            <th colspan="2">系统管理</th>
        </tr>
        <tr>
            <td align="right">网站名称：</td>
            <td><input type="text" name="websitename" value="<?php echo $row_arr['websitename']?>"  /></td>
        </tr>
        <tr>
            <td align="right">网站地址：</td>
            <td><input type="text" name="website_url" value="<?php echo $row_arr['website_url']?>"/></td>
        </tr>
        <tr>
            <td align="right">关键字：</td>
            <td><input type="text" name="website_keyword" value="<?php echo $row_arr['website_keyword']?>"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center" height="30">
                <input type="submit" name="update" value="更新"/>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
