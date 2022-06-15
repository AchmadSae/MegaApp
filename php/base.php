<?php

$post = $_POST;
$get = $_GET;

function conn()
{

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_ebonia";

    $conn = new mysqli($server, $user, $pass, $db);

    if (!$conn) {

        return die("connection failed: " . mysqli_connect_error());
    } else {

        return $conn;
    }
}
