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
  <title>Client Entry</title>
<style>
  body {
            font: 14px sans-serif;
  
           
            background-image: url(/assets/bg4.jpg);
            color:white;
        }
    .form {
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 20px;
      width: 325px;
    }
    .form p {
      font-weight: 700;
      font-size: 24px;
      font-family: serif;
    }
  
</style>
</head>
<body>
  
<section class="form">
  <div class="wrapper">
<form action="entryReg.php" method="POST" id="entryForm">
  <p>New Client Information</p>
    <input class="inpt2"type="text" name="name" placeholder="Client Name" required>
   <span>Gender:</span>
  <label>
  <input type="radio" class="inpt3" name="gender" checked="checked" value="m">
  Male
</label>

<label>
  <input type="radio" class="inpt3" name="gender" value="f">
  Female
</label>

<label class="container">
  <input type="radio" class="inpt3" name="gender" value="o">
  Other
</label>


    
    <input class="inpt2" type="email" name="email" placeholder="Email" required>
    <input class="inpt2" type="tel" name="phone" placeholder="Phone" required>
    <input class="inpt2" type="text" name="address" placeholder="Address"required>
    <!-- <input class="inpt3" type="radio" name="status" value="hot">
    <input class="inpt3" type="radio" name="status" value="warm">
    <input class="inpt3" type="radio" name="status" value="cold"> -->
<span>Status: </span>
    <label>
  <input type="radio" class="inpt3" name="status" checked="checked" value="hot">
  Hot
</label>

<label>
  <input type="radio" class="inpt3" name="status" value="warm">
  Warm
</label>

<label class="container">
  <input type="radio" class="inpt3" name="status" value="cold">
  Cold
</label>

    <input class="inpt2" type="text" class="inpt2" name="note" placeholder="Note">
    <input class="login submit" type="submit" value="Submit">

    </form>

    

    </div>
</section>


</body>
</html>
   
