<?php
//============================= LOG IN PAGE =================================
//session_start(); //Already included in connect.php
require 'connect.php';

//=== IF SESSION CREATED ASK TO LOG OUT ===
if($_SESSION['email']) {
    header("location:re_login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Protected Login</title>
</head>

<body>
    <h3>Login</h3>

    <form action="verify.php" method="post">
       
        Email :<input type="text" name="email" id="email" autocomplete="off" required>
        <br>
        <br> Password :<input type="password" name="password" id="password" autocomplete="off" required>
        <br>
        <br>
        <input type="submit" name="login" value="Login">
        <br>
        
    </form>
</body>

</html>
