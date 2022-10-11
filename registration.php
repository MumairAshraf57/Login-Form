<?php
require('db.php');
if (isset($_POST['submit'])){
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$username=$_REQUEST['username'];
$phoneNumber=$_REQUEST['phoneNumber'];
$sql = "insert into formdata (email, password,username,phoneNumber)
VALUES ('$email', '$password','$username','$phoneNumber')";
$insertData = mysqli_query($conn,$sql);
if($insertData){
         echo "The form has been successfully submitted.";
       } else {
         echo "Something went wrong!";
       }
}
?>
<form action="" method="POST">
			<input type="email" name="email" placeholder="Enter your email"/><br>
      <input type="text" name="username" placeholder="Enter your username"/><br>
      <input type="number" name="phoneNumber" placeholder="Enter your email"/><br>
			<input type="password" name="password" placeholder="Enter your password" /><br>
			<input type="submit" name="submit" value="Create my account"/>
			</form>
