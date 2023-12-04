<!doctype html>
<html>
<head>
<title> Book Registration
</title>
</head>
<body>
  <nav>       
     <ul>
          
            <li><a href="index.php">Home</a></li>
            <li><a href="user.php">Book Info</a></li>
            <li><a href="search.php">User Info</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="logout.php">Sign Out</a></li>
        </ul>
    </nav>
  <center>
    <br>
    <h1 class="linear-wipe">Book Registration</h1>
    
  


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
  $title = $_POST['title'];
  $author = $_POST['author'];
  $pages = $_POST['pages'];
  $category = $_POST['category'];
  $date_publish = $_POST['date_publish'];
// Table name....
$sql = "INSERT INTO act2 (title, author, pages, category, date_publish)
VALUES ('$title', '$author', '$pages', '$category', '$date_publish')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("Location: user.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
<style>

  
  body {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  height: 100vh;
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


.glow-on-hover1 {
    width: 250px;
    height: 50px;
     box-shadow: 0px 0px 0px 3px rgba(0,0,0,0.3);
    border: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 5px;
}

.glow-on-hover1:before {
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

.glow-on-hover1:active {
    color: #000
}

.glow-on-hover1:active:after {
    background: transparent;
}

.glow-on-hover1:hover:before {
    opacity: 1;
}

.glow-on-hover1:after {
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
  div {
  width: 300px;
  border: 1px solid black;
  padding: 80px;
  margin: 20px 0;
}
 
 .register {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  height: 100vh;
  width: 280px;
 height: 250px;
 box-shadow: 0px 0px 0px 20px rgba(0,0,0,0.3);
 border-radius: 5px;
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


 


html { height: 100%; }

body { 
   background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  text-align: center;
 
  
}

h1 { font-size: 5vw; }

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
  }
}

</style>
<div class="register">
<form action="index.php" method="post">
  <img src="1.png" width="50" height="50">
  <br>

<br>

  Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="title"placeholder="Title"/><br/>
  Author:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="author" placeholder="Author" /><br/>
  Pages:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pages" placeholder="Pages"><br/>
  Category:&nbsp;&nbsp;<input type="text" name="category"placeholder="Category"><br/>
  Date Publish: <input type="date" name="date_publish"><br/>
<p class="solid">
  <br><br><br>
  <button class="glow-on-hover1" type="button"><input type="submit" name="submit" value="Submit"></button>
</center>
</form>
</div>
</p>
</body>
</html>

