<?php
include_once ('admin_global.php');
$r = $db -> Get_user_shell_check($uid,$shell);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
</head>
<body>
<table>
    <tbody>
    <tr>
        <th onclick="javascript:menu_tree('left_2');" align="middle">栏目管理</th>
    </tr>
    <tr id="left_2">
        <td>
            <table width="100%">
                <tbody>
                <tr>
                    <td>
                        <img src="images/menu.gif" align="absMiddle" border="0">
                        &nbsp;<a href="admin_news_class.php" target="main">新闻分类</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
