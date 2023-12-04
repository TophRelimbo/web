<?php
require('dbCS.php');
$id=$_GET['user_id'];
$sql = "SELECT * FROM act2 WHERE user_id = $id";
$result = mysqli_query($conn, $sql);
$row   = mysqli_fetch_assoc($result);


?>

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

.glow-on-hover {
    width: 250px;
    height: 50px;
     box-shadow: 0px 0px 0px 3px rgba(0,0,0,0.3);
    border: none;
    outline:linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
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

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
  div {
  width: 300px;
  border: 1px solid black;
  border-radius: 1px;
  box-shadow: 0px 0px 0px 20px rgba(0,0,0,0.3);
  padding: 80px;
  margin: 20px 0;
}
.details {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  height: 100vh;
  width: 280px;
 height: 250px;
 box-shadow: 0px 0px 0px 20px rgba(0,0,0,0.3);
 border-radius: 5px;



</style>



<br><br><br><br><br>
<center>

<form action="" method="post">
	<div class="details">
			<br>
			
			Title: <input type="text" placeholder="Title"value = "<?php echo $row['title']?>" name="title"/><br/>
			<br>
			Author: <input type="text" placeholder="Author" value = "<?php echo $row['author'] ?>"name="author"/><br/>
			<br>
			Page: <input type="text" value = "<?php echo $row['pages'] ?>"name="pages"/><br/>
			<br>
			Category: <input type="text" placeholder="Category" value = "<?php echo $row['category'] ?>" name="category"/><br/>
			<br>
			Date Publish: <input type="date"value = "<?php echo $row['date_publish'] ?>" name="date_publish"/><br/>
			<br>
			<button class="glow-on-hover" type="button"><input type="Submit" name="submit" value="Update"/>

		</form>
	</div>

<?php


  if(isset($_POST['submit'])) {
  	$title = $_POST['title'];
  	$author = $_POST['author'];
  	$pages = $_POST['pages'];
  	$category = $_POST['category'];
  	$date_publish = $_POST['date_publish'];
  	


$sql="update act2 set title='".$title."',
author='".$author."',
pages='".$pages."',
category='".$category."',
date_publish='".$date_publish."'
where user_id='".$id."'";
mysqli_query($conn, $sql);

mysqli_close($conn);
header('location: user.php');

}

		
?>