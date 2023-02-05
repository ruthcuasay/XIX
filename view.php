
<style>


td {
  height: 20px;
  text-align: center;
  vertical-align: middle;


}
 table{
  width:100%;

 
 }

h1{
  font-size: 40px;
  margin-top:16px;
  margin-bottom: 10px;
}
.logo {
    height:35px;
    width:70px;
    position: absolute;
    top:20px;
    left:50px;

}




.admn {
    height: 50px;
    width:50px;
    position:absolute; 
    top:8px;
    left:500px;

}


#table2{
height: 20px;
width: 100%;

text-align: center;
color: white;
background-color: green;
border:3px;
margin-top:10px;
}





</style>
<body>
    
  <div class="left_b">
   <image class="logo"    src="xix.png">
   <image class="admn"  src="avatar.png">
    
  <center><h1>Admin Panel</h1></center>
   

<?php
$servername="localhost";
$username="root";
$password="";
$db="signup";
$con=mysqli_connect($servername,$username,$password,$db);

if(!$con)
{
die("Connection Failed". mysqli_connect_error());
}
$sql="SELECT * FROM form ORDER BY ID";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
?>

<table border="3" id="table">
<tr>
<td><b>ID</b></td>
<td><b>Email</b></td>
<td><b>Verify Email</b></td>
<td><b>Password</b></td>
<td><b>Verify Password</b></td>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['ID'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['email2'];?></td>
<td><?php echo $row['pw'];?></td>
<td><?php echo $row['pw2'];?></td>
 </tr>
<?php
}
}
else
{
echo "No file found";
}
mysqli_close($con);
?>
<br>
 
<form method="POST" action="">
<input type="text" name="ID" placeholder="Enter the ID">
<input type="submit" name="delete" value="DELETE">
</form>
<br>
<?php
  if(isset($_POST['delete']))
{
$id=$_POST['ID'];
$servername="localhost";
$username="root";
$password="";
$db="signup";

$con=mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
die("Connection Failed". mysqli_connect_error());
}
$sql="DELETE FROM form WHERE ID='$id'";
if (mysqli_query($con, $sql)) {
 echo "Deleted successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?><br>
<?php
 $url1=$_SERVER['REQUEST_URI'];
 header("Refresh: 5; URL=$url1");
?>

<form class="search" method="POST" action="">
<input type="text" name="input" placeholder="Enter email">
<input type="submit" name="submit" value="Search"><br>
</form><br>
<?php

if(isset($_POST['input']))
{

$search=$_POST['input'];
$servername="localhost";
$username="root";
$password="";
$db2="signup";
$conn=mysqli_connect($servername,$username,$password,$db);


if(!$con)
{
die("Connection Failed". mysqli_connect_error());
}
$sql2="SELECT * FROM form WHERE email='$search'";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
?>

<table border="3" id="table2">
  
<tr>

<td><?php echo $row['ID'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['email2'];?></td>
<td><?php echo $row['pw'];?></td>
<td><?php echo $row['pw2'];?></td>

 </tr>
</table>

<?php
}
}
else
{
echo "No file found";
}


mysqli_close($conn);
}
?>
