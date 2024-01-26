<?php

$id = $_GET["id"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angulartest";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
}

$sql = "DELETE FROM personen WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
