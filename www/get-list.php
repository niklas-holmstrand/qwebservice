 <!DOCTYPE html>
<html>
<body>

<h1>Alla poster:</h1>

<?php
include 'db-connect.php';

$conn = db_connect();
$sql = "SELECT id, message, time FROM myposts WHERE deleted <> 1 ORDER BY id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $msg = $row["message"];
        echo "id: " . $row["id"]. " - Text: " . $msg . " " . $row["time"]. " - <a href=delete.php?id=" . $row["id"] . "&Deleter=xtress>Delete</a><br>";
    }
} else {
    echo "List is empty";
}
$conn->close();


?>
<br/>
<a href="index.html">Home</a>
</body>
</html> 
