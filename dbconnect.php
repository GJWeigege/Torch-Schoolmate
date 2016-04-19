<?php
    //以下是我自己的数据库
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "882663";
    $db_database = "db_schoolmate";

    //连接数据库
    $contention=mysql_connect($db_host,$db_user,$db_password);
    if (!$contention) {
        die("无法连接数据库");
    }
    //选择数据库
    $db_select=mysql_select_db($db_database);
    if (!$db_database) {
        die("无法连接数据库");
    }
?>