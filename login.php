<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if(isset($_POST['email'])) {
        // username and password sent from form

        $email = mysqli_real_escape_string($conn,$_POST['email']);
        
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        $sql = "SELECT id FROM formdata WHERE email = '$email', username='$username', phoneNumber='$phoneNumber' , and password = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
         if($count==true){
          echo $email;
          echo $username;
         }

        if($count == true) {
           $_SESSION['email'] = $email;
           $_SESSION['username'] = $username;
           $_SESSION['phoneNumber'] = $phoneNumber;
           header("location: dashboard.php");
        }else {
           echo  "Your Login Name or Password is invalid";
        }
     }
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="email" class="login-input" name="email" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>
