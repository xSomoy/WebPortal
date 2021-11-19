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
    <title>Client - All</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/style.css">
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">
<style>
    body{
        background-image: url(/assets/bg3.jpg);
    }
    table {
            
            border-collapse: collapse;
            width: 100%;
            line-height: 20px;
            color: #fff;
            font-size: 16px;
            text-align: center;
            }
    th {
        background-color: black;
        color: white;
        padding: 15px;
        /* border: 1px solid skyblue; */
        text-align: center;
        }
    td{
        padding: 10px;
    }
    tr:nth-child(even) {
        background-color: #2b2b2b;
        /* color: black; */
        
    }
    .topButton {
        display: flex;
        
    }

    .newSub{
        padding: 30px;
        
    }

    .newSub a {
        color: white;
    }


 
    </style>
</head>
<body>

<a href="index.php" class="login home client">Home</a>
<div class="topButton">
    <div class="newSub">
        <a class="login" href="newEntry.php">Submit New Enter</a>
    </div>
    <div class="filterDiv">
    <a href="clientData.php" class="filter">All</a>
  <a href="clientDataHot.php" class="filter">Hot</a>
  <a href="clientDataWarm.php" class="filter">Warm</a>
  <a href="clientDataCold.php" class="filter">Cold</a>
    </div>
</div>
    <table>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Status</th>
        <th>Note</th>
</tr>

<div id="result">
<?php
    
    // Check connection
        if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
        }
        $sql = "SELECT * FROM clientinfo";
        $result = $link->query($sql);
        if ($result-> num_rows > 0) {
    // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"]. "</td>
                    <td>" . $row["name"] . "</td>
                    <td>". $row["gender"]. "</td>
                    <td>" .$row["email"]. "</td>
                    <td>" .$row["phone"]. "</td>
                    <td>" .$row["address"]. "</td>
                    <td>" .$row["status"]. "</td>
                    <td>" .$row["note"]. "</td>
                    <td>" .  "</td>
                    </tr>";
            }
            echo "</table>";
        } else { echo "0 results"; }
    $link->close();
    ?>
</div>

</table>

<script src="/assets/script.js"></script>

</body>
</html>