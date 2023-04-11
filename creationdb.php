<?php
	$conn=mysqli_connect("localhost","root","");
	if($conn)
	{
		echo"successfully connected to the server";
	}
	else
	{
		echo"connection failed";
		exit();
	}
	$q1="CREATE DATABASE watchBusiness";
	$r1=mysqli_query($conn,$q1);
	if($r1)
	{
		echo "<br>database batch_a created successfully<br>";
	}
	else
	{
		echo"error";
	}
	mysqli_close($conn);
	
		
?>