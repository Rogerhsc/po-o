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

 $nomex = $_POST["cpf"];

 $sql = "DELETE FROM cadastro WHERE cpf = '$nomex'";

 if (mysqli_query($conexao, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conexao);
}
 
?>