<?php
//============================= LOG IN PAGE =================================
//session_start(); //Already included in connect.php
require 'connect.php';

//====================== IF LOGIN FORM SUBMITTED ============================

if(isset($_POST['login'])) {
    
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    
    $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
    
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":password", $password);
        $stmt->execute();
        
        $result = $stmt->rowCount();
        
        if ($result > 0) {
            $_SESSION['email'] = $email;
            $_SESSION['errorMsg'] = "You successfully logged in";
            header('location:newpage.php');    
        } else {
            $_SESSION['errorMsg'] = "Invalid Login, Try Again";
            echo $_SESSION['errorMsg'];
        }
    } catch (Exception $ex) {
        echo $_SESSION["errorMsg"] = $ex->getMessage();
    }
}

echo "<br/> <a href='index.php'>Try Again</a>";

?>

