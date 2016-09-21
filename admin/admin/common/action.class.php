<?php
class action extends mysql {
    /* 用户权限判断 $uid,$shell,$m_id */
    public function Get_user_shell($uid,$shell) {
        $query = $this->select('p_admin', '*', '`uid`=\'' . $uid . '\'');
        $us = is_array($row = $this->mysqli_fetch_array($query));
        $shell = $us ? $shell = md5($row['username'] . $row['password'] . ALL_PS) : false;
        return $shell ? $row : NULL;
    } //END SHELL
    public function Get_user_shell_check($uid,$shell,$m_id=9) {
        if($row = $this ->Get_user_shell($uid,$shell)) {
            if($row["m_id"]<=$m_id) {
                return $row;
            }else {
                echo $row['username'];
                echo "您的权限不足";
                exit();
            } //END m_id
        }else {
            $this ->Get_admin_msg('index.php', "请先登录");
            exit();
        }
    } //END SHELL

    /* 用户登录超时（秒）*/
    public function Get_user_ontime($long = '3600') {
        $new_time = time();
        $onlinetime = $_SESSION['ontime'];
        echo $new_time - $onlinetime;
        if($new_time-$onlinetime>$long) {
            echo "登录超时";
            session_destroy();
            exit();
        }else {
            $_SESSION['ontime']=time();
        }
    }

    /* 用户登录 */
    public function Get_user_login($username,$password) {
        $username = str_replace(" ","",$username);
        $query = $this -> select ('p_admin', '*', '`username`=\'' . $username . '\'');
        $us = is_array($row = $this -> mysqli_fetch_array($query));
        $ps=$us?md5('password') == $row['password']:false;
        if($ps) {
            $_SESSION['uid']=$row['uid'];
            $_SESSION['shell']=md5($row['username'].$row['password'].ALL_PS);
            $_SESSION['ontime']=time();//单位：s
            $this -> Get_admin_msg('main.php','登录成功');
        }else {
            $this -> Get_admin_msg('main.php','密码或用户名错误');
            session_destroy();
        }
    }

    /* 用户退出登录 */
    public function Get_admin_msg($url,$show = '操作已成功') {
        $msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <!-- <link rel="stylesheet" href="Public/common.css" type="text/css" />-->
        <meta http-equiv="refresh" content="2;url='.$url.'" />
        <title>消息提示</title>
        </head>
        <body>
        <div id="man_zone">
        <table width="30%" border="1" align="center" cellpadding="3" cellspacing="0" class="table" style="margin-top:100px">
            <tr>
                <th align="center" style="background:#cef">信息提示</th>
            </tr>
            <tr>
                <td><p>'.$show.'<br/>
                2秒后返回指定页面！<br/>
                如果浏览器无法跳转.<a href="'.$url.'">请点击此处</a></p></td>
            </tr>
        </table>
        </div>
        </body>
        </html>';
        echo $msg;
        exit();
    }
} //END CLASS
?>