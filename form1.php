<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$banco = "fib";

$conexao = mysqli_connect($servername, $username, $password, $banco);

if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Create connection
$conexao = mysqli_connect($servername, $username, $password, $banco);


$nome = $_POST ["nome"];


$sql = "SELECT * FROM cadastro WHERE nome LIKE '$nome%'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // output data of each row - fetch_assoc - diz para pegar os dados e retornar em uma matriz
    while($row = $result->fetch_assoc()) {
        echo "</br>nome: " . $row["nome"]. " - cpf: " . $row["cpf"]. "<br>";
    }
} else {
    echo "0 results";
}


?>