<?php
    include("dbconnect.php");


    error_reporting(E_ALL);
    session_start();
    // query the username and password in the database
    if (!empty($_REQUEST['username']) && !empty($_REQUEST['password'])) {
        $sql = "select * from users where name='" . $_REQUEST['username'] . "' AND password='" . $_REQUEST['password'] . "'";
        $result = $dbh->query($sql);
        //echo $sql;
        $rows = $result->fetch(PDO::FETCH_ASSOC);

        if (!empty($rows)) {
            $_SESSION['username'] = $_REQUEST['username'];
        } else {
            $_SESSION['username'] = '-invalid';
        }
    }


    //echo $_GET['page'];
    header("Location: ".$_GET['page'].".php");
    exit();