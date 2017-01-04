<?php

function db_connect() {
  $servername = "x-stress.se.mysql";
  $username = "x_stress_se";
  $password = "hAYwYZMC";
  $dbname = "x_stress_se";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}


?>
