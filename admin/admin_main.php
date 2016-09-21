<?php
include_once ('admin_global.php');
$r = $db -> Get_user_shell_check($uid,$shell);
if($_GET['action']=='logout') {
    $db -> Get_user_out();
}

?>
<html>
<head></head>
<body></body>
</html>
