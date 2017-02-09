<?php

//session_start(); //Already included in connect.php
require 'connect.php'; 

//============ LOGIN SUCCESS MESSAGE =================
echo $_SESSION['errorMsg']; 

//=============== WELCOME MESSAGE ====================
echo "<br> Hi " . $_SESSION['email'];

//================ LOGOUT BUTTON =====================
echo "<br/> <a href='logout.php'>Logout</a>";

//=== IF SESSION NOT CREATED REDIRECT TO index.php ===
if(!$_SESSION['email']) {
    header("Location:index.php");
}

?>