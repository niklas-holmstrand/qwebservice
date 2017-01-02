<?php
include 'db-connect.php';

$conn = db_connect();
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

echo '{ "children":';
echo json_encode($return_arr, JSON_PRETTY_PRINT);
echo '}';


?>

