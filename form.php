<?php


$servername = "localhost";
$username = "root";
$password = "";
$banco = "fib";

// Create connection
$conexao = mysqli_connect($servername, $username, $password, $banco);

if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
 
  $nome = $_POST ["nome"];
  $cpf = $_POST ["cepefe"];

$sql = "INSERT INTO cadastro (nome, cpf) VALUES ('$nome ', '$cpf')";

if (mysqli_query($conexao, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

  echo "</br>$nome </br>";
  echo "cpf do cliente = $cpf";


?>
