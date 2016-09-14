<?php
 if (isset($_POST['name'])) {
  		$name= $_POST['name'];
  		$email= $_POST['email'];
      $phone= $_POST['phone'];
      $school= $_POST['school'];
      $message= $_POST['message'];

  	    $conn = mysqli_connect("localhost","root","",'siksha');
        $db=mysqli_select_db($conn,'siksha');



  	    $query=mysqli_query($conn,"INSERT INTO user_details(name, email, phone, school, message) VALUES('$name','$email','$phone','$school','$message')");
  	    if($query)
  	     echo "hello";
  	    }
 ?>
