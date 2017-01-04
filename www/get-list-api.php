<?php
include 'db-connect.php';

$conn = db_connect();
$sql = "SELECT id, message, time, latitude, longitude, creator FROM myposts WHERE deleted <> 1 ORDER BY id ";
$result = $conn->query($sql);

$return_arr = array();

if ($result){
    while ($row = mysqli_fetch_assoc($result)) {
    $row_array['id'] = $row['id'];
    $row_array['message'] = $row['message'];
    $row_array['time'] = $row['time'];
    $row_array['latitude'] = $row['latitude'];
    $row_array['longitude'] = $row['longitude'];
    $row_array['creator'] = $row['creator'];

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

