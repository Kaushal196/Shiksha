<?php

 if (isset($_POST['emailid'])) {


      $emailid=$_POST['emailid'];
        $conn = mysqli_connect("localhost","root","",'siksha');
        $query1=mysqli_query($conn,"INSERT INTO subscribe(emailid) VALUES ('$emailid')");
        if($query1){
          echo "hello";
         }
}
 ?>
