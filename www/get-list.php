 <!DOCTYPE html>
<html>
<body>

<h1>Alla poster:</h1>

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

$sql = "SELECT message, time FROM myposts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["message"]. " " . $row["time"]. "  <a href='delete.php'>Delete</a><br>";
    }
} else {
    echo "0 results";
}
$conn->close();

echo ".........10 <br/>";

?>
<a href="index.html">Home</a>
</body>
</html> 