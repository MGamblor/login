<?php

//session_start(); //Already included in connect.php
require 'connect.php'; 

//================ LOGOUT MESSAGE ====================
echo "Please sign out first before logging in again <br/>";

//================ LOGOUT BUTTON =====================
echo "<br/> <a href='logout.php'>Logout</a> <br/>";
echo "<br/> <a href='newpage.php'>Remain Logged In</a>";

//=== IF SESSION NOT CREATED REDIRECT TO index.php ===
if(!$_SESSION['email']) {
    header("Location:index.php");
}

?>