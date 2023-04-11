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
    $q1="select *from watch";
    $r1=mysqli_query($conn,$q1);
    $count=mysqli_num_rows($r1);

    while($info=mysqli_fetch_array($r1))
    {
        echo"<br>";
        echo "<br>id is ".$info['id'];
        echo "<br>Name is ".$info['watch_Name'];
        echo "<br>Size is ".$info['size'];
        echo "<br>Color is ".$info['color'];
        echo "<br>Feature is ".$info['feature'];
        echo "<br>Price is ".$info['price'];
        echo "<br>Stock is ".$info['stock'];
        
    }

    mysqli_close($conn);
?>