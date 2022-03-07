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



<div id="login">
<form  method="POST">
  

  <label name="username">Name </label>
<input type="text" name="username"  placeholder="Enter your name :" required 
 />
 <button name="login"type="submit">send</button>
</form>
<?php
$user="latifa merahbi";
$getuser=' ';
if (isset($_POST['login'])) {
  
  $getuser=$_POST['username'];

}

if ($user===$getuser) {
  session_start();
  $_SESSION['USER']='getuser';
  $_SESSION['LOGIN']=True;
  echo "<script> location.replace('password.php')</script>";
}


?>
<?php /* 

<h3>Attention: the password is your first name and your phone number and your last name and your birthday's year and day<br></h3>
<h4 >Example:mostafa71402068zooebi2004wednessday</h4>
<style type="text/css">
  h3{background-color: red;color: white;}
  h4{color: red;}
</style>
<input type="password" name="pass" placeholder="Enter your password : "/><br>
<button type="send">send</button>
</form> 
</div>

*/
?>
   



















</body>

</html>