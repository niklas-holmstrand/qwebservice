 <!DOCTYPE html>
<html>
<body>


<?php
echo "Deleting [" . $_GET["id"] . "] <br/>";

include 'db-connect.php';

$deleter=$_GET["Deleter"];
if ($deleter == null) {   $deleter = "unknown"; };

$time = date("Y-m-d H:i:s");


//$sql = "DELETE FROM myposts WHERE id=" . $_GET["id"];
$sql = "UPDATE myposts 
SET deleted=true, deleter='$deleter', deletetime='$time' 
WHERE id=" . $_GET["id"];

$conn = db_connect();
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

$conn->close();


?>
<br/>
<br/>
<a href="index.html">Home</a>
</body>
</html> 
