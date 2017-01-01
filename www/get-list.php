 <!DOCTYPE html>
<html>
<body>

<h1>Alla poster:</h1>

<?php
include 'db-connect.php';

$conn = db_connect();
$sql = "SELECT id, message, time FROM myposts ORDER BY id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $msg = $row["message"];
        echo "id: " . $row["id"]. " - Name: " . $msg . " " . $row["time"]. "  <a href=delete.php?id=" . $row["id"] . ">Delete</a><br>";
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
