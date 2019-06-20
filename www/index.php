<?php
define("_config_",true);
require_once "config.php";




?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/index.css" />

</head>
<body>




  
<div class="bg-img">
  <form action="action_page.php" class="container">
    

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
      
    <input type="checkbox" name="checkbox" checked>
      <label for="check"><b>Remmember me</b></label>

    <button type="submit" class="btn">Login</button>
    <p>OR</p>
    <button type="button" class="btn" onclick="location.href='register.php'">Register</button>
  </form>
      
    </div>

</body>
</html>
