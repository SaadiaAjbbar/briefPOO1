<?php

$server = "localhost";
$user = "root";
$password = "Saadia@02";
$dbname = "briefpoo";

$connexion = mysqli_connect($server, $user, $password, $dbname);

if (!$connexion) {
    die("error:".mysqli_connect_error());
}else{
    echo "bien connecte";
}