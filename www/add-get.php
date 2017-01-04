<!DOCTYPE html>
<html>
<body>

<h1>Item added?</h1>

 <html>
<body>

Message to post (GET): <?php echo $_GET["Message"]; ?><br>
<!-- time: <?php echo $_POST["Time"]; ?> -->
<br/>



<?php

//echo ".........0 <br/>";

include 'db-connect.php';


$message=$_GET["Message"];
//$time=$_POST["Time"];
$lat=$_GET["Lat"];
$long=$_GET["Long"];
$creator=$_GET["Creator"];

if ($lat == null) {   $lat = "null"; };
if ($long == null) {   $long = "null"; };
if ($creator == null) { $creator = "unknown"; };


$time = date("Y-m-d H:i:s");
echo "Time $time <br/>";

$conn = db_connect();
$sql = "INSERT INTO myposts (message, time, latitude, longitude, creator, deleted)
VALUES ('$message','$time',$lat,$long,'$creator',0)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//echo ".........10 <br/>";

?>
<br/>
<br/>

<a href="index.html">Home</a>
</body>
</html> 
