<?php


session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
  header("location: index.php");
  exit;
}
require_once "config.php";


?>	

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style/style.css">
  <title>Document</title>
  <style>
       input {
        border-radius: 10px;
    }
  </style>
</head>
<body>
  
<section class="form">
  <div class="wrapper">
<form action="entryReg.php" method="POST" id="entryForm">
    <input class="inpt"type="text" name="name" placeholder="Client Name">
    <input type="radio" name="gender" value="m" >
    <input type="radio" name="gender" value="f">
    <input type="radio" name="gender" value="o">
    <input class="inpt" type="email" name="email" placeholder="Email">
    <input class="inpt" type="tel" name="phone" placeholder="Phone">
    <input class="inpt" type="text" name="address" placeholder="Address">
    <input type="radio" name="status" value="hot">
    <input type="radio" name="status" value="warm">
    <input type="radio" name="status" value="cold">
    <input type="text" class="inpt" name="note" placeholder="Note">
    <input class="login" type="submit" value="Submit">

    </form>

    

    </div>
</section>


</body>
</html>
   
