<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rien";
$dbtable ="user";
try {
  $conn = new PDO("mysql:host=$servername", $username, $password, $email,);
  // set the PDO error mode to
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "successfully connected";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
