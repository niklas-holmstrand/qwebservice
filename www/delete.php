 <!DOCTYPE html>
<html>
<body>


<?php
echo "Delete is not yet implemented <br/>";
echo "to delete " . $_GET["id"] . " <br/>";

include 'db-connect.php';

$conn = db_connect();
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
