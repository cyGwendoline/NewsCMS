<?php
include_once ('admin_global.php');
$r = $db -> Get_user_shell_check($uid,$shell);
if(isset($_POST['into_news'])) {
    $db->query("insert into `news_php100`.`p_newsbase`(`id`,`cid`,`title`,`author`,`date_time`) VALUE (null,'$_POST['cid']','$_POST['title']','$_POST['author']',now())")
    $last_id = $db ->insert_id();
    $db->query("insert into `p_newscontent`(`nid`,`keyword`,`content`,  remark) VALUE ($last_id,'$_POST['keyword']','$_POST['content']','')");
    $db->Get_admin_msg("admin_news_add.php","添加成功");
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
        <th>后台>>添加新闻</th>
    </tr>
    </tbody>
</table>
<br/>
<table class="navi" cellspacing="1" align="center" class="form">
    <tr>
        <th colspan="2">选择分类</th>
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
            </td>
        </tr>
    </form>
    <tr>
        <td>新闻标题</td>
        <td><input type="text" name="title" size="50"/></td>
    </tr>
    <tr>
        <td>新闻作者</td>
        <td><input type="text" name="author" size="30"/></td>
    </tr>
    <tr>
        <td>内容</td>
        <td><textarea name="body" rows="10" cols="50"></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="into_news" value="添加"/></td>
    </tr>
</table>



</body>
</html>
