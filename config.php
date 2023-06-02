<?php
$servername = "localhost:81";
$username = "root";
$password = "";
$dbname = "php-crud";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}
