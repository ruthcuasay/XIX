<?php

  $em = $_POST['email'];
  $em2 = $_POST['email2'];
  $pw = $_POST['pw'];
  $pw2 = $_POST['pw2'];

  include 'connect.php';
  
  
    //insert query
    mysqli_query($conn,"INSERT INTO form(email,email2,pw,pw2)VALUES('$em','$em2','$pw','$pw2')") or die('Query Error');  

   



?>
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

.container .box {
  position: relative;
  width: calc(400px - 30px);
  height: calc(300px - 30px);
  background: #000;
  float: left;
  margin:15px;
  box-sizing: border-box;
  
  border-radius: 10px;

}


.update {
  width:150px;
    height:40px;
    font-size: 16px;
    border-radius: 100px;
    background-color: white;    
    margin-left: 108px;
    margin-top: 105px;
    border: 1px solid #1260cc;
}
h1 {
  text-align: center;
  font-size: 50px;
  margin-top:50px;
  font-family: 'Cookie', cursive;
  margin-bottom: 30px;
}


.logo {
    height:35px;
    width:70px;
    position: absolute;
    top:20px;
    left:50px;

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
    left:1180px;
 
}


</style>

<head>

  <div class="left_b">
   <image class="logo"    src="xix.png">
   
    <button onclick="window.location.href='signup.php'">Back</button> </div>
     <h1>Admin Panel & Update Data for the User</h1>
<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Dancing+Script:wght@500&family=Pacifico&display=swap" rel="stylesheet">
   </head>
<div class="container">
  
  <div class="box">
    <button class="update" onclick="window.location.href='update.php'">Update your data</button>
  </div>
  
</div>
