<?php
$host = "localhost";
$user = "yourUserName";
$password = "yourPassword";
$database = "ngo";
$connection = new mysqli($host, $user, $password, $database);
if (!$connection) {
  echo "Server not respond";
}
