<?php


session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
require_once "config.php";


	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$status = $_POST['status'];
	$note = $_POST['note'];

	// Database linkection
	// if($link->connect_error){
	// 	echo "$link->connect_error";
	// 	die("Connection Failed : ". $link->connect_error);
	// } else {
	// 	$stmt = $link->prepare("insert into clientinfo(name, gender, email, phone, address, status) values(?, ?, ?, ?, ?, ?, ?)");
	// 	$stmt->bind_param("sssssi", $name, $gender, $email, $phone, $address, $status, $note);
	// 	$execval = $stmt->execute();
	// 	echo $execval;
	// 	echo "Registration successfully...";
	// 	$stmt->close();
	// 	$link->close();
	// }


	
	// Create connection

	// Check connection
	if ($link->connect_error) {
	  die("Connection failed: " . $link->connect_error);
	}
	
	$sql = "INSERT INTO clientinfo (name, gender, phone)
	VALUES ('John', 'Doe', 'john@example.com')";
	
	if ($link->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $link->error;
	}
	
	$link->close();

?>