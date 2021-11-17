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
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
            position: relative;
            background-image: url(/assets/bg2.jpg);
        }

        .logout {
	position: absolute;
	top: -10px !important;
	right: 15px !important;
	color: white;
}

        .reset{
            position: absolute;
            top: -10px !important;
            left: 20px !important;
            color: white;
        }

        .welcome{
            color:white;
        }
    </style>
</head>

<body>

<div class="container">
<!--    Logout And Reset Buttons -->
   
    <a href="reset-password.php" class="login reset">Reset Password</a>
    <a href="logout.php" class="login logout">Log Out</a>

<!-- Your Actual HTML Code Goes Below Here -->
    <div class="welcome">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
    </div>
    
    </div>
</body>

</html>
