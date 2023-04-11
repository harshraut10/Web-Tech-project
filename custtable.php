<?php
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
	$q1="CREATE TABLE customerData(FNAME char(20),LNAME char(20), Gender char(20), City char(20), Email char(30), PhNo Integer not null, dob varchar(20));"; 
	$r1=mysqli_query($conn,$q1);
	if($r1)
	{
		echo "<br>table customer created successfully<br>";
	}
	else
	{
		echo "<br>error";
	}
	mysqli_close($conn);
	
		
?>

