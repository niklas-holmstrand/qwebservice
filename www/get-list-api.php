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

$return_arr = array();

if ($result){
    while ($row = mysqli_fetch_assoc($result)) {
    $row_array['message'] = $row['message'];
    $row_array['time'] = $row['time'];

    array_push($return_arr,$row_array);
//    echo ".........5 " . $row_array['message'] . " -- " . $row_array['message'] . "<br/>";
//    echo ".........5 " . $row_array['message'] . " -- " . $row_array['message'] <br/>";
//    echo ".........6" .  $return_array . " <br/>";
   }
 }

$conn->close();

echo "<pre>"; // for json pretty print
echo json_encode($return_arr, JSON_PRETTY_PRINT);
echo "</pre>";


?>
</body>
</html> 
