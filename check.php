<!DOCTYPE html>
<html lang="en">
<head>
  <title>Check Test Phishing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Check Test Phishing</h2>
  <p>Lista de usuários que clicaram preencheram os dados:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

	<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "nome_do_banco";
	$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
	$consulta = $pdo->query("SELECT email, password, data FROM usuarios;");

	while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         echo "<tr>
        	<td>"'.$linha['email'].'"</td>
        	<td>"'.$linha['password'].'"</td>
        	<td>"'.$linha['data'].'"</td>
         </tr>";
	?>
    </tbody>
  </table>
</div>

</body>
</html>
