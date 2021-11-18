<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require_once "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Table with database</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <link rel="stylesheet" href="/style/style.css">
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">
<style>
    table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
            }
    th {
        background-color: #588c7e;
        color: white;
        }
    tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>
        <form action="newEntry.php">
        <input type="text" name="name">
        <input type="checkbox" name="gender" value="m">
        <input type="checkbox" name="gender" value="f">
        <input type="checkbox" name="gender" value="o">
        <input type="email" name="email">
        <input type="number" name="phone">
        <input type="text" name="adress">
        <input type="checkbox" name="status" value="hot">
        <input type="checkbox" name="status" value="warm">
        <input type="checkbox" name="status" value="cold">
        <input type="textarea" name="note">
        <input type="submit" value="Submit">

        </form>




    <table>
        <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
</tr>
<?php
    
// Check connection
    if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
    }
    $sql = "SELECT id, name, email FROM clientinfo";
    $result = $link->query($sql);
    if ($result-> num_rows > 0) {
// output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>". $row["email"]. "</td></tr>";
        }
        echo "</table>";
    } else { echo "0 results"; }
$link->close();
?>
</table>

</body>
</html>