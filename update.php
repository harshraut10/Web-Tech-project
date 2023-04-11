<?php
    $a=$_GET["id"];
    $b=$_GET["price"];
    $c=$_GET["stock"];
	$conn=mysqli_connect("localhost","root","","watchBusiness");
	if($conn)
	{
		echo"successfully connected to the server";
	}
	else
	{
		echo"connection failed";
		exit();
	}
    $q1="UPDATE watch set price=".$b.", stock=stock+".$c." WHERE id=".$a.";";
    echo $q1;
    $r1=mysqli_query($conn,$q1);
    if($r1)
    echo "updated successfully";

    else
    echo"error";

    mysqli_close($conn);