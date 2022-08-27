<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'company_portfolio';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  

echo '<span style="color:Green;font-size:40px"><p align=center>Your Queries has been submitted Successfully ....</p></span>';  

$First_name=mysqli_real_escape_string($conn,$_REQUEST['First_name']);
$Last_name=mysqli_real_escape_string($conn,$_REQUEST['Last_name']);
$Email=mysqli_real_escape_string($conn,$_REQUEST['Email']);
$City=mysqli_real_escape_string($conn,$_REQUEST['City']);
$State=mysqli_real_escape_string($conn,$_REQUEST['State']);
$Text_area=mysqli_real_escape_string($conn,$_REQUEST['Text_area']);


  
$sql = "INSERT INTO contact_info (First_name,Last_name,Email,City,State,Text_area) VALUES ('$First_name','$Last_name','$Email','$City','$State','$Text_area')";  
if(mysqli_query($conn, $sql)){  
 echo '<span style="color:green;font-size:30px;"><marquee direction="right" scrollamount="15">We will contact you within 48 Hours.</marquee></span><br/>';  
 echo '<a href="index.html"><p align=center><button class="btn btn-primary" type="button">Back to Home Page</button></p></a>';

}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  
  
</body>
</html>
