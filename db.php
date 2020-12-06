<?php
// To be included in same directory as form page
// Enter your Host, username, password, database below.
$con = mysqli_connect("127.0.0.1","root","","devopscrunch");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>