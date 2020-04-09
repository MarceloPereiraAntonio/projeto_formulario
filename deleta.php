<?php  
include 'db.php';

$id_deleta = $_POST['id_deleta'];

$query ="DELETE FROM cadastro WHERE ID= $id_deleta";

mysqli_query($conexao, $query);

header('location:index.php?pagina=visual');

?>