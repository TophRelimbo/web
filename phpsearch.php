<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<nav>
        <ul>
            
           <li><a href="index.php">Home</a></li>
            <li><a href="user.php">Book Info</a></li>
            <li><a href="search.php">User Info</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a  href="logout.php"> Sign Out</a></li>
        </ul>
    </nav>
<style>
	
h1 { font-size: 3vw; }

.linear-wipe {
  text-align: center;

  
   background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  
  
    }

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
		.glow-on-hover2 {
    width: 100px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 5px;
}

.glow-on-hover2:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover2:active {
    color: #000
}

.glow-on-hover2:active:after {
    background: transparent;
}

.glow-on-hover2:hover:before {
    opacity: 1;
}

.glow-on-hover2:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
  animation: gradient 15s ease infinite;
    left: 0;
    top: 0;
    border-radius: 5px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}

.glow-on-hover {
    width: 100px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 5px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
  animation: gradient 15s ease infinite;
    left: 0;
    top: 0;
    border-radius: 5px;
}

	</style>


</style>
</body>
</html>

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
// end conn
if(isset($_POST['search'])) {
	$qry = array();

	$title = $_POST['title'];
	$author = $_POST['author'];
		if ($title != "") {
			$qry[] = "title = '".$title."'";
			// code...
		}
		if ($author != "") {
			$qry[] = "author = '".$author."'";
			// code...
		}
		else{
			$criteria = "where user_id is null";
		}
		if(count($qry)>0){
			$criteria = "where ".implode(" and ", $qry);
		}
		//implode collect all query and seperated by and.
    //criteria variable collect all where's and array, ect.
		$result = mysqli_query($conn, " SELECT * FROM act2 $criteria");
}
else{
	$result = mysqli_query($conn, " SELECT * FROM act2");
}

?>
<center>
	<h1 class="linear-wipe">Book Information</h1>
<table class="glow-on-hover2" border="5" cellspacing="4" cellpadding="4">
		<form action="phpsearch.php" method="post">
   <input type="text" name="title" placeholder="Title:">
   <input type="text" name="author" placeholder="Author:">
   <input type="submit" name="search" id="search" value="Search"/><br>
   <br>   
		<thead>
			<tr>

				<td> ID </td>
        <td> TITLE </td>
        <td> AUTHOR </td>
        <td> PAGES </td>
        <td> CATEGORY </td>
        <td>DATE_PUBLISH</td>
        <td> &nbsp;&nbsp;&nbsp;&nbsp;UPDATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				
			</tr>
		</thead>
<tbody>
	<?php
	if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	?>
</center>
<tr>
	<td> <?php echo $row ['user_id']; ?> </td>
	<td> <?php echo $row ['title']; ?> </td>
	<td> <?php echo $row ['author']; ?> </td>
  <td> <?php echo $row ['pages']; ?> </td>
  <td> <?php echo $row ['category']; ?> </td>
  <td> <?php echo $row ['date_publish']; ?> </td>


  <td>
    <button class="glow-on-hover" type="button"><a href ="edit.php?user_id=<?php echo $row['user_id']; ?>"> Update</a></button>
      <button class="glow-on-hover" type="button"><a href ="delete.php?user_id=<?php echo $row['user_id']; ?>"> Delete</a></button>
      
</tr>


<?php
	}
}
?>