<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MCRM Solution</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
            position: relative;
            background-image: url(/assets/bg3.jpg);
            color:white;
        }
    </style>
</head>

<body>

<div class="container">
<!--    Logout And Reset Buttons -->
  
<!-- Your Actual HTML Code Goes Below Here -->


   <section class="main">

   <div class="welcome">
        <h1>Hi,<b> <?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
        <p>Welcome to  <b>MCRM Solution</b> for maintaining client information.<br>
            You can select your role in the right side. <br>
            You can submit a new entry by chosing Acquisition. <br>
            Or modify / view existing entry by chosing Disposition.
             
    <a href="reset-password.php" class="login reset">Reset Password</a>
    <a href="logout.php" class="login logout">Log Out</a>

            
        </p>
    </div>

    <div class="role">
        <a href="clientData.php" class="acq">Acquisition</a>
        <br>
        <a href="clientData.php" class="dis">Disposition</a>
    </div>
   </section>

    </div>
</body>

</html>
