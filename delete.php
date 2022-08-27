<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--font awesome-->
  <script src="https://kit.fontawesome.com/982b11278c.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<p align="center">------------------------------------------</p><br>
<?php
include("connection.php");
error_reporting(0);

$First_Name=$_GET['fn'];
$query="DELETE FROM contact_info where First_Name='$First_Name'";

$data=mysqli_query($con,$query);

if($data)
{
    echo "<p align='center'><font color='green'>Record Deleted from Database</font></p>";

}
else
{
    echo "<font color='red'>Failed to delete Record from Database</font>";

}
?>
<br><br>
<p align="center"><a href="Admin_page.php"><button type="button" class="btn btn-primary">Back</button></a></p>
<p align="center">------------------------------------------</p>
</body>
</html>
