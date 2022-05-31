<?php

$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$number = $_POST["number"];
$message = $_POST["message"];

require_once "dbh.inc.php";
require_once "functions.inc.php";

createMessage($conn, $name, $surname, $email, $number, $message);