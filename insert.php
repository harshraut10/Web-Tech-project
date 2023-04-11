<?php

   $a=$_GET["watchname"];
   $b=$_GET["id"];
   $c=$_GET["size"];
   $d=$_GET["color"];
   $e=$_GET["feature"];
   $f=$_GET["price"];
   $g=$_GET["stock"];
   $conn=mysqli_connect("localhost","root","","watchBusiness");
    if($conn)
    {
      echo"connection successfull<br>";
    }
    else{
      echo"error in connecting";
    }

    $q1="insert into watch(id ,watch_Name , size ,color ,feature,price,stock) values('".$b."','".$a."','".$c."','".$d."','".$e."','".$f."','".$g."');";
    

    $r1=mysqli_query($conn,$q1);
    if($r1)
    echo "inserted successfully";

    else
    echo"error";

    mysqli_close($conn);
 ?>