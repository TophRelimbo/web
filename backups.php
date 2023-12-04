         <?php
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      $server = "localhost";
      $uname = "root";
      $pass = "";
      $db = "act2";
      
      $conn = mysqli_connect($server, $uname, $pass, $db);
      
      if(mysqli_connect_errno())
      {
         echo "Database connection failed!<BR>";
         echo "Reason: ", mysqli_connect_error();
         exit();
      }
      else
      {
         

         $fname = $_POST["firstname"];
         $lname = $_POST["lastname"];
         $mname = $_POST["middlename"];
         $address = $_POST["address"];
         $cnumber = $_POST["contact_number"];
         $sql = "INSERT INTO info( firstname, lastname, middlename, address, contact_number)
            VALUES ('$fname', '$lname', '$mname', '$address', '$cnumber')";
          $qry = mysqli_query($conn, $sql);
         if($qry)
         {
            echo "Successfully Registered!";
          
            // block of code to process further
         }
         else
         {
            echo "Something went wrong while registration!<BR>";
            echo "Error Description: ", mysqli_error($conn);
         }
      }
   }
   //mysqli_close($conn);
?>