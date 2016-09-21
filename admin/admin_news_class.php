<?php
include_once ('admin_global.php');
$r = $db -> Get_user_shell_check($uid,$shell);

if(isset($_POST['upclass'])) {
    $db -> query("insert into `news_php100`.`p_newsclass`(`id`,`f_id`,`name`,`keyword`, remark`) values (NULL,'$_POST['f_id']','$_POST['name']','')");
    $db -> Get_admin_msg('admin_news_class.php',"成功添加分类");
}
if(!empty($_GET['del'])) {
    $db ->query("delete from `p_newsclass` where `id`='$_GET['del']'limit 1");
    $db ->Get_admin_msg("admin_news_class.php","删除成功");
}

if(isset($_POST['update_class'])) {
    $db ->query("update `p_newsclass` set `name`='$_POST['name']' where `id`='$_POST['id']'limit 1");
    $db ->Get_admin_msg("admin_news_class.php","更新成功");
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
<table class="navi" cellspacing="1" align="center" border="0">
    <tbody>
    <tr>
        <th>后台>>新闻分类</th>
    </tr>
    </tbody>
</table>
<br/>
<table class="navi" cellspacing="1" align="center" class="form">
    <tr>
        <th colspan="2">添加分类</th>
    </tr>
    <form action="" method="post">
        <tr>
            <td colspan="2" align="center" height="30">
                <select name="f_id">
                    <option value="0">添加大类</option>
                    <?php
                    $query = $fd -> findall("p_newsclass where f_id = 0 ");
                    while($row=$db ->mysqli_fetch_array($query)) {
                        echo "<option value=\"$row['id']\">$row['name']</option>";
                    }
                    ?>

                </select>

                <input type="text" name="name" value=""/>
                <input type="submit" name="upclass" value="添加"/>
            </td>
        </tr>
    </form>
</table>

//修改分类信息
<table>
    <tr><td>新闻分类</td></tr>
    <?php
    foreach ($news_class_arr as $id=>$val) {
    ?>
        <tr>
            <form action="" method="post">
                <td>
                    <input type="hidden" name="id" value="<?php echo $id ?>"/>
                    <input type="text" name="name" value="<?php echo $val ?>"/>
                    <input type="submit" name="update_class" value="更新"/>
                    <input type="button" value="删除" onclick="location.href='?del=<?php echo $id ?>'"/>
                </td>
            </form>
        </tr>
        <?php
        $query_fid=$db->findall("p_newsclass where f_id=$id");
        while($row_fid = $db ->mysqli_fetch_array($query_fid)) {
        ?>
            <form action="" method="post">
                &nbsp;&nbsp;&nbsp;┗<input type="hidden" name="id" value="<?php echo $id ?>"/>
                <input type="text" name="name" value="<?php echo $val ?>"/>
                <input type="submit" name="update_class" value="更新"/>
                <input type="button" value="删除" onclick="location.href='?del=<?php echo $id ?>'"/>
            </form>
        <?php
        }
        ?>

    <?php
    }
    ?>

</table>


</body>
</html>
