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

include 'db-connect.php';


$message=$_POST["Message"];
//$time=$_POST["Time"];

$time = date("Y-m-d h:i:sa");

$conn = db_connect();
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
