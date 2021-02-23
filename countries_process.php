
 
<?php
$con=mysqli_connect("localhost","root","","squarebox");

// checks connection to see if available 

if (mysqli_connect_errno($con)) {
	echo "Failed to connect to MySQL".mysqli_connect_error();
}

 $sql="INSERT INTO countries (country_id,country_name,region_id)
 VALUES('$_POST[country_id_input]','$_POST[country_name_input]','$_POST[region_id_input]')";

 if (!mysqli_query($con,$sql))  { 
  die('Error: ' . mysqli_error());  }

  echo "<h1>1 Country Record Added</h1>";mysqli_close($con);

  ?>