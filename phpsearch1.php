<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<nav><form action="phpsearch1.php" method="post">
    <input type="text" name="search" placeholder="Search:"><input type="image" src="s.png" width="30" height="30" alt="submit">       
        <ul>
            
            <li><a href="index.php">Home</a></li>
            <li><a href="user.php">Book Info</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a  href="logout.php"> Sign Out</a></li>
        </ul>
    </nav>
<style>
	
body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
 *{
  margin:0;
  padding:0;
}
nav form{
    text-align: right;
}

nav{
  width: 100%;
  height: 50px;
  background-color: #0005;
  line-height: 50px;
}
nav ul{
  float: right;
  margin-right: 30px;
}
nav ul li{
  list-style-type: none;
  display: inline-block;
  transition: 0.7s all;
}
nav ul li:hover{
  background: linear-gradient(60deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
  animation: gradient 15s ease infinite;
}
nav ul li a{
  text-decoration: none;
  color: #fff;
  padding: 10px;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
		
	</style>

</style>
</body>
</html>

<?php

$search = $_POST['search'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "act2";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql1 = " SELECT * FROM info WHERE firstname like '%$search%'";


$result = $conn->query($sql1);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
  echo "<center>";
	echo $row["firstname"]."<br>
		 ".$row["lastname"]."<br>
		 ".$row["middlename"]."<br>
     ".$row["address"]."<br>";
}
} else {

	echo "No Results Found";
}

$conn->close();

?>