<?php
class mysql {
    private $host;
    private $name;
    private $pass;
    private $table;
    private $ut;

    function __construct($host,$name,$pass,$table,$ut) {
        $this->host=$host;
        $this->name=$name;
        $this->pass=$pass;
        $this->table=$table;
        $this->ut=$ut;
        $this->connect();
    }

    function connect() {
        $link=mysqli_connect($this->host,$this->name,$this->pass,$this->table) or die("连接错误".mysqli_connect_error());
        mysqli_query($link,"SET NAMES '$this->ut'");
        return $link;
    }

    function query($sql) {
        if(!($query = mysqli_query($this->connect(),$sql))) $this->show('Say:', $sql);
//        $query = mysqli_query($this->connect(),$sql);
        return $query;
    }

    function show($message = '', $sql = '') {
        if(!$sql) echo $message;
        else echo $message.'<br>'.$sql;
    }

    function affected_rows($query) {
        return mysqli_affected_rows($query);
    }

//   function result($query, $row) {
//        return mysql_result($query, $row);
//    }

    function num_rows($query) {
        return @mysql_num_rows($query);
    }

    function num_fields($query) {
        return mysqli_num_fields($query);
    }

//    function free_result($query) {
//        return mysql_free_result($query);
//    }

    function insert_id($query) {
        return mysqli_insert_id($query);
    }

    function fetch_row($query) {
        return mysqli_fetch_row($query);
    }

    function version($link) {
        return mysqli_get_server_info($link);
    }

    function close($link) {
        return mysqli_close($link);
    }
}

?>
