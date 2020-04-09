<?php
include 'db.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$username = $_POST['username'];

$query = "INSERT INTO cadastro (nome, idade, email, username) VALUES('$nome', $idade, '$email', '$username')";

mysqli_query($conexao, $query);


header('location:index.php?pagina=visual');

