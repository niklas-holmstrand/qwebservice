 <!DOCTYPE html>
<html>
<body>


<?php
echo "Delete is not yet implemented <br/>";
echo "to delete " . $_GET["id"] . " <br/>";

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

$sql = "DELETE FROM myposts WHERE id=" . $_GET["id"];

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

$conn->close();


?>

<a href="index.html">Home</a>
</body>
</html> 
