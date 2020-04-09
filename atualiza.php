<?php include'db.php';

$buscar_id = $_POST ['buscar_id'];
$nome = $_POST['nome'];
$idade =  $_POST['idade'];
$email =  $_POST['email'];
$username =  $_POST['username'];

$query = "UPDATE cadastro SET NOME='$nome', IDADE=$idade, EMAIL='$email', USERNAME='$username' WHERE ID = $buscar_id ";

mysqli_query($conexao, $query);

header('location:index.php?pagina=visual');

?>