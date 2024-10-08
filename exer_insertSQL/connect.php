<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "dados";

$connect = new mysqli($host, $user, $password, $database);
session_start();