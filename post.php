<?php   

$servername = "database-1.cgvkojo0ntbn.us-east-1.rds.amazonaws.com";
$username = "std";
$password = "tetris72";
$dbname = "firts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = mysqli_query($conn,"SELECT Latitude, Longitude FROM tabla  WHERE Datemy >= '2022-09-26 22:56' AND Datemy 
<= '2022-09-27 00:16' ");  
$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);

exit(json_encode($result));

$conn->close();

?>