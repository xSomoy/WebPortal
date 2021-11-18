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
    <table>
        <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
</tr>
<?php
    $conn = mysqli_connect("localhost", "root", "", "company");
// Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id, username, password FROM login";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>