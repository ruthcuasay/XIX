<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Dancing+Script:wght@500&family=Pacifico&display=swap" rel="stylesheet">
<style>
body {
	margin:0;
	padding:0;
	font-family: sans-serif;

}

.container {
	position: relative;
	width:1000px;
	height: 300px;
	margin-left: 480px;

}



h1 {
	text-align: center;
	font-size: 50px;
	margin-top:13px;
	font-family: 'Cookie', cursive;
	margin-bottom: 8px;
}

form input{
	height:30px;
	margin: 5px;
	width: 350px;


}

form  {
	text-align: center;

}

.left_b button{
    width:150px;
    height:40px;
    font-size: 16px;
    border-radius: 100px;
    background-color: black;    
    border: 1px solid black;
    position:absolute; 
    color:white;
    top:21px;
    left:20px;
 
}

	</style>

	<head>
     <h1>Update Data for the User</h1>

   </head>
  
<body>
	<div class="left_b">
<button onclick="window.location.href='index.php'">Sign Up</button> </div>

<form  method="POST" action="">

<input type="text" name="email" placeholder="Email"><br>
<input type="text" name="email2" placeholder="Verify Email"><br>
<input type="text" name="pw" placeholder="Password"><br>
<input type="text" name="pw2" placeholder="Verify Password"><br>
<input type="submit" name="submit" value="Update">
</form>

	



<?php
if(isset($_POST['submit']))
{

$email0=$_POST['email'];
$email1=$_POST['email2'];
$pw0=$_POST['pw'];
$pw1=$_POST['pw2'];

$servername="localhost";
$username="root";
$password="";
$db="signup";
$con=mysqli_connect($servername,$username,$password,$db);
if(!$con)
{
die("Connection Failed". mysqli_connect_error());
}
$sql="UPDATE form SET email='$email0', email2='$email1',pw='$pw0' ,pw2='$pw1' WHERE email='$email0'"; 
if (mysqli_query($con, $sql)) {
 echo "Updated successfully";
 else {
 echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>




	