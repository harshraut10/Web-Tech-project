<?php
    $a=$_GET["id"];
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
	$q1="delete from watch where id=".$a;
	$r1=mysqli_query($conn,$q1);
	if($r1)
	{
		echo "<br>values deleted successfully<br>";
	}
	else
	{
		echo "<br>error";
	}
	mysqli_close($conn);
	
		
?>