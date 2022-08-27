<!DOCTYPE html>
<html>
<head>
    <!--font awesome-->
  <script src="https://kit.fontawesome.com/982b11278c.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Admin Login</title>
<style>
table {
border-collapse: collapse;
width: 90%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: center;
margin-left:auto;
margin-right:auto;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
.page_border{
  border:2px solid green;
  background-color:ghostwhite;
}
</style>
<script>
  alert('You Have Successfully Logged in.');
</script>
</head>
<body>
  <section>
  <div class="container-fluid">
          <div class="row">
            <div class="col-md-9 left">
            <a href="Admin.html"><button type="button" class="btn btn-outline-primary"><i class="fas fa-backspace"></i><br><font size="5">Back</font></button></a><br><br>
            </div>
            <div class="col-md-3 text-center right">
            <h4>Click <?php echo $_SESSION['username']='To '; ?><a href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a></h4>
            </div>
          </div>
  </div>
</section>


<h1 style="text-align:center;color:blue;">Admin Page</h1><br>
<section>
<div class="page_border">
<h3 style="text-align:center;"><font color="green">Contact List</font></h3><br><br>
<table border="2">
<tr>
<th>First_Name</th>
<th>Last_Name</th>
<th>Email</th>
<th>City</th>
<th>State</th>
<th>Text_area</th>
<th>Operation</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "company_portfolio");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM contact_info";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "
<tr>
<td>" . $row["First_Name"]. "</td>
<td>" . $row["Last_Name"] . "</td>
<td>" . $row["Email"]. "</td>
<td>" . $row["City"] ."</td>
<td>" .$row["State"] ."</td>
<td>" . $row["Text_area"] . "</td>
<td><a href='delete.php?fn=$row[First_Name]'><i class='fas fa-trash-alt'></i> Delete </td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
</div>
</section>
</body>
</html>