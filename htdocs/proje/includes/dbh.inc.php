<?php

$serverName= "localhost";
$dBUsername= "root";
$dBPassword= "";
$dBName= "proje";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Bağlantı Yapılamadı". mysqli_connect_error());
}