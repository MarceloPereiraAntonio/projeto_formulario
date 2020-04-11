
<?php include 'db.php';?>

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
			<th>Editar</th>
		

	</thead>
	
<tbody>
<?php

while($result = mysqli_fetch_array($consulta_cadastro)){
	echo "<tr><td>".$result['NOME']."</td>";
	echo "<td>".$result['IDADE']."</td>";
	echo "<td>".$result['EMAIL']."</td>";
	echo "<td>".$result['USERNAME']."</td>";

?>
	<td><a class="btn btn-primary" href="?pagina=tela_editar&editar=<?php echo $result['ID']; ?>">editar</a></td>

<?php
}
?>

</tbody>
</table>

 <footer>
	<div >
 		©2020 formulario
 	</div>

</footer>

</body>
</html>