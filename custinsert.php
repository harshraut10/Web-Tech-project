<?php

   $a=$_POST["fname"];
   $b=$_POST["lname"];
   $c=$_POST["gender"];
   $d=$_POST["city"];
   $e=$_POST["username"];
   $f=$_POST["phone"];
   $g=$_POST["Birth-Date"];
   $conn=mysqli_connect("localhost","root","","watchBusiness");
    if($conn)
    {
      echo"connection successfull<br>";
    }
    else{
      echo"error in connecting";
    }

    $q1="INSERT INTO customerData(FNAME ,LNAME , Gender , City , Email , PhNo , dob ) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."')"; 
    $r1=mysqli_query($conn,$q1);
    if($r1)
    echo "inserted successfully";

    else
    echo"error";

    mysqli_close($conn);
 ?>