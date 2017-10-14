<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "coba";

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Check connection
    $name = $_POST['name'];
    $umur = $_POST['umur'];

    $sql = "INSERT INTO user (name, umur) VALUES ('$name', '$umur')";

    $conn->exec($sql);

    echo "Saved successfully  <br/>";
    
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}



?>