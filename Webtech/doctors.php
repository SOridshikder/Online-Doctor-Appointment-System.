<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="adminmain.css"> 
<style>
table{
    width: 75%;
    border-collapse: collapse;
	border: 4px solid black;
    padding: 5px;
	font-size: 25px;
}

th{
border: 4px solid black;
	background-color: #4CAF50;
    color: white;
	text-align: left;
}
tr,td{
	border: 4px solid black;
	background-color: white;
    color: black;
}
</style>

</head>
<body background= "admin/dr.jpg">
<ul>
<link rel="stylesheet" href="main.css">
      <div class="header">
        <ul>
          <li style="float:left;border-right:none"><a href="cover.php" class="logo"><img src="images/cal.png" width="30px" height="30px"><strong> Doctor </strong>Consultation System</a></li>
          <li><a href="locateus.php">Locate Us</a></li>
          <li><a href="aboutus.html">About Us</a></li>
          <li><a href="doctors.php">Doctors</a></li>
          <li><a href="clinic.php">Clinic</a></li>
          <li><a href="cover.php">Home</a></li>

        </ul>
      </div>
  
   <li>  
	<form method="post" action="mainpage.php">	
	</form>
  </li>
	
</ul>
</h2>
<center><h1>SHOW DOCTOR</h1>
<?php
session_start();
$con = mysqli_connect('localhost','root','','wt_database');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM Doctor order by DID ASC";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>Doctor Name</th>
<th>Experience</th>
<th>Specialization</th>
<th>Contact</th>
<th>Region</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>Dr. " . $row['name'] . "</td>";
    echo "<td>" . $row['experience'] . "</td>";
    echo "<td>" . $row['specialization'] . "</td>";
	echo "<td>" . $row['contact'] . "</td>";
	echo "<td>" . $row['region'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=alogin.php"); 
	}
?>
</body>
</html>