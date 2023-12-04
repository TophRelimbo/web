<?php
require('dbCS.php');
$id=$_GET['user_id'];
$sql = "DELETE FROM act2 WHERE user_id=$id"; 
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}


echo"record deleted";
header('location: user.php');
?>