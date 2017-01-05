 <!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h1>Niklas lista:</h1>

<?php
include 'db-connect.php';

$conn = db_connect();
$sql = "SELECT id, message, time, latitude, longitude FROM myposts WHERE deleted <> 1 ORDER BY id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table>";
    echo "<tr>";
    echo "<th>id</th><th>Message</th><th>Time</th><th>Position</th><th></th>";
    echo "</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $msg = $row["message"];
        echo "<tr>";
        echo "<td>" . $row["id"]. "</td>" . 
             "<td>" . $msg . "</td>" . 
             "<td>" . $row["time"] . "</td>" . 
             "<td>" . $row["latitude"] . " / " . $row["longitude"] . "</td>" . 
             "<td>" . "<a href=delete.php?id=" . $row["id"] . "&Deleter=xtress>Delete</a>" . "</td>";
        echo "</tr>";
//        echo "id: " . $row["id"]. " - Text: " . $msg . "  -  " . 
//             $row["time"] . "  -  " . 
//             $row["latitude"] . " / " . $row["longitude"] . "  -  " .
//             "  -  <a href=delete.php?id=" . $row["id"] . "&Deleter=xtress>Delete</a><br>";
    }
    echo "</table>";


} else {
    echo "List is empty";
}
$conn->close();


?>
<br/>
<a href="index.html">Home</a>
</body>
</html> 
