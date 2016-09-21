<?php
include_once ('admin_global.php');
$r = $db -> Get_user_shell_check($uid,$shell);
if(isset($_GET['del'])) {
    mysqli_query("delete from `news_php100`.`p_newsbase`WHERE `id`='$_GET[\'del\']' limit 1");
    mysqli_query("delete from `p_newscontent`WHERE `nid`='$_GET[\'del\']' limit 1");
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
        <th>后台>>新闻管理</th>
    </tr>
    </tbody>
</table>
<br/>
<table class="navi" cellspacing="1" align="center" class="form">
    <tr>
        <th wdith="100">新闻分类</th>
        <th width="100">新闻标题</th>
        <th width="100">作者</th>
        <th width="100">日期</th>
        <th width="100">操作</th>
    </tr>
    <tr>
        <?php
        $result = mysqli_query("select id from p_newsbase");
        $total = mysqli_num_rows($result);
        pageft($total,30);
        if($firstcount < 0)$firstcount = 0;
        $query = $db -> findall("p_newsbase limit $firstcount,$displaypg");
        while ($row = $db -> mysqli_fetch_array($query)) {
        ?>
        <td>新闻分类</td>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['author'] ?></td>
        <td><?php echo $row['title'] ?></td>
        <td><a href="?del=<?php echo date("Y-m-d", $row['date_time']) ?>">删除</a>/<a href="admin_news_edit.php?id=<?php echo $row['id'] ?>">修改</a> </td>
    </tr>
        <?php
        }
        ?>

    <tr>
        <td colspan="5"><?php echo $pagenav;?></td>
    </tr>
</table>
<br/>
</body>
</html>
