
<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "formulario";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM cadastro";
$consulta_cadastro = mysqli_query($conexao, $query);
?>