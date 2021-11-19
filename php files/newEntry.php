<?php


session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
  header("location: index.php");
  exit;
}
require_once "config.php";


?>	
    <form action="entryReg.php" method="POST">
    <input type="text" name="name">
    <input type="radio" name="gender" value="m">
    <input type="radio" name="gender" value="f">
    <input type="radio" name="gender" value="o">
    <input type="email" name="email">
    <input type="number" name="phone">
    <input type="text" name="address">
    <input type="radio" name="status" value="hot">
    <input type="radio" name="status" value="warm">
    <input type="radio" name="status" value="cold">
    <input type="textarea" name="note">
    <input type="submit" value="Submit">

    </form>
