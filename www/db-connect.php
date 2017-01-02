<?php

function db_connect() {
  $servername = "xx";
  $username = "xx";
  $password = "xx";
  $dbname = "xx";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}


?>
