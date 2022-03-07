<!DOCTYPE html>
<html>

    <head>
    
    <link rel="icon" href="img.png">
    <link rel="shortcut"  href="img.png">
    <link rel="apple-touch-icon" href="img.png">
    <title>lattuf</title>
    <meta charset="utf-8">
    <meta name="author" content="The Shadow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta thhp-equiv='X-UA-Compatible'  content="IE=edge,chrome=1">
    </head>

<body align="center">

<h3>Attention: the password is your first name and your phone number and your last name and your birthday's year and day<br></h3>
<h4 >Example:mostafa71402068zooebi2004wednessday</h4>
<style type="text/css">
  h3{background-color: red;color: white;}
  h4{color: red;}
</style>

<div id="login">
<form  method="POST">
  

  <label name="pass">Password </label>
<input type="password" name="pass"  placeholder="Enter your password :" required 
 />
 <button name="login"type="submit">send</button>
</form>
<?php
$password="latifa81299535merahbi1998saturday";
$getpass=' ';
if (isset($_POST['login'])) {
  
  $getpass=$_POST['pass'];

}

if ($password===$getpass) {
  session_start();
  $_SESSION['PASS']='getpass';
  $_SESSION['LOGIN']=True;
  echo "<script> location.replace('code.php')</script>";
}


?>


   



















</body>

</html>