<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Smart Donor</title>
    <link rel="shortcut icon" href="../Images/Capture.JPG" />
</head>

<body>
<?php
function makeconnection()
{
	$con=mysqli_connect("localhost","root","root","bloodbank");
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  return $con;
}

?>
</body>
</html>