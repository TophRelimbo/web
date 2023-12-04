<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "act2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
$sql = "INSERT INTO user1 (username, email, password) VALUES('$username', '$password')";
if($conn->query($sql) === TRUE )
{
  echo "Registered Successful";
}
else{
  echo "Not Registered";
}
$conn->close();
}
?>

//another php code

<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "act2";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 
$sqlquery = "INSERT INTO user1 VALUES
    ('username', 'email', 'password')";
    {
 
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    
    $data = $_REQUEST['val1'];
 
    if (empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}
$conn = mysqli_connect("localhost", "root", "", "act2");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        $username =  $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password =  $_REQUEST['password'];
        
         
       
        $sql = "INSERT INTO user1 VALUES ('$username',
            '$email','$password')";
}
?>
