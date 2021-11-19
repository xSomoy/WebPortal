<?php


session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
  header("location: index.php");
  exit;
}
require_once "config.php";

?>
<?php


    $name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$status = $_POST['status'];
	$note = $_POST['note'];

 
     
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
     
    // Attempt insert query execution
    $sql = "insert into clientinfo (name, gender, email, phone, address, status, note) values ('$name', '$gender', '$email', '$phone', '$address', '$status', '$note')";
    if(mysqli_query($link, $sql)){
        header("location: newEntry.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);



?>