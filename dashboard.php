<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>

</head>
<body>
    <div class="form">
        <h1> Hi, <?php echo $_SESSION['username']; ?> </h1>
        <p>Hey, <?php echo $_SESSION['email']; ?>!</p>

        <p>You are now user dashboard page.</p>
        <p><a href="registration.php">Logout</a></p>
    </div>
</body>
</html>
