<?php
$databaseHost = "localhost";
$databaseName = "shop";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if($mysqli){
    echo "koneksi Database berhzsil.<br/>";
}else{
    echo "koneksi gagal.<br/>";
}
?>