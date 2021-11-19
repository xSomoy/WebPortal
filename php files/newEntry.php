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
  <link rel="stylesheet" href="/assets/style.css">
  <title>Document</title>
<style>
  body {
            font: 14px sans-serif;
  
           
            background-image: url(/assets/bg4.jpg);
            color:white;
        }
  
</style>
</head>
<body>
  
<section class="form">
  <div class="wrapper">
<form action="entryReg.php" method="POST" id="entryForm">
    <input class="inpt2"type="text" name="name" placeholder="Client Name" required>
    <!-- <input class="inpt3" type="radio" name="gender" value="m" >
    <input class="inpt3" type="radio" name="gender" value="f">
    <input class="inpt3" type="radio" name="gender" value="o"> -->
  <label>
  <input type="radio" name="gender" checked="checked" value="m">
  Male
</label>

<label>
  <input type="radio" name="gender" value="m">
  Female
</label>

<label class="container">
  <input type="radio" name="gender" value="m">
  Other
</label>


    <input class="inpt2"type="text" name="name" placeholder="Client Name" required>
    <input class="inpt2"type="text" name="name" placeholder="Client Name" required>
    <input class="inpt2"type="text" name="name" placeholder="Client Name" required>
    <input class="inpt2" type="email" name="email" placeholder="Email" required>
    <input class="inpt2" type="tel" name="phone" placeholder="Phone" required>
    <input class="inpt2" type="text" name="address" placeholder="Address"required>
    <!-- <input class="inpt3" type="radio" name="status" value="hot">
    <input class="inpt3" type="radio" name="status" value="warm">
    <input class="inpt3" type="radio" name="status" value="cold"> -->

    <label>
  <input type="radio" name="status" checked="checked" value="hot">
  Hot
</label>

<label>
  <input type="radio" name="status" value="warm">
  Warm
</label>

<label class="container">
  <input type="radio" name="status" value="cold">
  Cold
</label>

    <input class="inpt2" type="text" class="inpt2" name="note" placeholder="Note">
    <input class="login" type="submit" value="Submit">

    </form>

    

    </div>
</section>


</body>
</html>
   
