<?php
$server = "172.20.0.2";
$user = "root";
$password = "";
$nama_database = "pengarsipan";//nama database

    $db = mysqli_connect(
        $server,
        $user,
        $password,
        $nama_database
    );//mengkoneksikan dengan database
?>