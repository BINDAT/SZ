<?php
$servername = "localhost";
$username = "root";
$password = "banane";
$dbname = "ud";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "successfully connected";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
//$conn = null;
?>
