<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "coba";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully  <br/>";


$sql = "SELECT * FROM user";
$result  = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: ". $row["id"]. " - name: ". $row["name"]. " -umur: ". $row["umur"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>