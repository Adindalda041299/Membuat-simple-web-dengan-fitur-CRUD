<?php



$servername = "localhost"; //$host, ip
$username = "root"; //
$password = "";
$nama_database = "gudang otomotif"; //nama database yang dibuat di phpmyadmin

//create connerctor
$koneksi = new mysqli($servername, $username, $password, $nama_database);

//Check connection
if ($koneksi->connect_error) {
    die("connection failed: " . $koneksi->connect_error);
}


?>