<?php include 'db.php';?>


<!DOCTYPE html>
<html>
<head>
	<title>lista</title>
</head>
<header>
		<a href="?pagina=formulario" class="btn btn-dark">Novo cadastro</a>
</header>
<body>
	<table class="table table-striped" id="visual">
	<thead class="thead-dark">
		<tr>
			<th>Nome</th> 
			<th>Idade</th>
			<th>Email</th>
			<th>Username</th>
			<th >Editar</th>

	</thead>
	
<tbody>
<?php

$query = "SELECT * FROM cadastro";
$linha = mysqli_query($conexao, $query);

while($result = mysqli_fetch_assoc($linha)){
	echo "<tr><td>".$result['NOME']."</td>";
	echo "<td>".$result['IDADE']."</td>";
	echo "<td>".$result['EMAIL']."</td>";
	echo "<td>".$result['USERNAME']."</td>";

    echo "<td>
               
                <form action='nova_tela.php' method='GET'>
                    <input type='hidden' name='buscar_id' value='".$result['ID']."'>
	                <button class='btn btn-dark'> EDITAR </button>
                </form> 
          </td></tr>";
}
?>

</tbody>
</table>
