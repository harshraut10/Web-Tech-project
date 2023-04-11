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
    $q1="select *from customerdata";
    $r1=mysqli_query($conn,$q1);
    $count=mysqli_num_rows($r1);

    while($info=mysqli_fetch_array($r1))
    {
        echo"<br>";
        echo "<br>First Name is ".$info['FNAME'];
        echo "<br>Last Name is ".$info['LNAME'];
        echo "<br>Gender is ".$info['Gender'];
        echo "<br>City is ".$info['City'];
        echo "<br>Email is ".$info['Email'];
        echo "<br>Contact No. is ".$info['PhNo'];
        echo "<br>Birth-Date is ".$info['dob'];
        
    }

    mysqli_close($conn);
?>