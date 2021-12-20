<?php
    $mysql_server = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_db = "domacibaza1";
    $conn = mysqli_connect($mysql_server, $mysql_user, $mysql_password, $mysql_db);
// $mysqli -> new mysqli(host, username, password, dbname, socket)

    if (mysqli_connect_errno()) {
        printf("Konekcija neuspešna: %s\n",mysqli_connect_errno());
        exit();
    }
?>