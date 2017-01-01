<!DOCTYPE html>
<html>
<body>

<h1>Item added?</h1>

 <html>
<body>

Message to post: <?php echo $_POST["Message"]; ?><br>
time: <?php echo $_POST["Time"]; ?>




<?php

echo ".........0 <br/>";

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

$message=$_POST["Message"];
$time=$_POST["Time"];

$sql = "INSERT INTO myposts (message, time)
VALUES ('$message', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo ".........10 <br/>";

?>
<a href="index.html">Home</a>
</body>
</html> 
