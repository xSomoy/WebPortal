var res = getElementById("result");
function allResult() {
    document.getElementById("p1").innerHTML = "<?php if ($link->connect_error) { die("Connection failed: " . $link->connect_error);}$sql = "SELECT * FROM clientinfo";$result = $link->query($sql);if ($result-> num_rows > 0) {
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
    ?>";

}