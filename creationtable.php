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
	$q1="CREATE TABLE watch(id Integer not null,watch_Name char(20) not null, size varchar(10) not null,color char(20) not null,feature char(20) not null,price Integer not null,stock Integer not null, primary key(id))";
	$r1=mysqli_query($conn,$q1);
	if($r1)
	{
		echo "<br>table watch created successfully<br>";
	}
	else
	{
		echo "<br>error";
	}
	mysqli_close($conn);
	
		
?>