<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "db_biodata";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die ("Koneksi gagal".mysqli_connect_error());
}

?>