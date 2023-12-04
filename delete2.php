<?php
$servername = "localhost";
$uname = "root";
$pword = "";
$dbname = "act2";

// Create connection
$conn = mysqli_connect($servername, $uname, $pword, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//the end of Connection string



$id=$_GET['user_id'];
$sql = "DELETE FROM info WHERE user_id=$id";  
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
 


echo"record deleted";
header('location: search.php');



$id=$_GET['user_id'];
$sql1 = "DELETE FROM user2 WHERE user_id=$id";  
if (mysqli_query($conn, $sql1)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
 


echo"record deleted";
header('location: search.php');
?>

