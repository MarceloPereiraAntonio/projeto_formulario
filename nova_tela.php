<?php include'db.php';

$query = "SELECT * FROM cadastro WHERE ID = ".$_GET['buscar_id'];

$linha = mysqli_query($conexao, $query);
$result = mysqli_fetch_assoc($linha);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<h2>Editar</h2>
<br>
<form method="POST" action="atualiza.php">
 <input type='hidden' name='buscar_id' value="<?php echo $result['ID']; ?>"> 
 	 <div>
    	<div class="col">
     	 <label class="badge badge-secondary">Nome e sobre nome</label>
      	 <input class="form-control" type="text" name="nome" value="<?php echo $result['NOME']; ?>" required>
      	 <br>
         </div> 
    	 <div class="col">
      	 <label class="badge badge-secondary">Idade</label>
      	 <input class="form-control" type="text" name="idade" value="<?php echo $result['IDADE']; ?>" required>
      	 <br>
    	 </div>
    	 <div class="col">
    	 <label class="badge badge-secondary">E-mail</label>
     	 <input type="email" name="email" class="form-control" value="<?php echo $result['EMAIL']; ?>" required>
         </div> 
         <br>
         <div class="col">
       	 <label class="badge badge-secondary">Username</label>
         <input class="form-control" type="text" name="username" value="<?php echo $result['USERNAME']; ?>" required>
   		 </div>
  	</div>
   		 <button type="submit" class="btn btn-dark" >atualizar</button>
</form>   		 
    	 <form action='deleta.php ' method='POST'> 
         <input type='hidden' name='id_deleta' value="<?php echo $result['ID']; ?>" >
	     <button type="submit" class=' btn btn-danger'> excluir </button>
         </form> 
<footer style="position: absolute; bottom: 0%; width: 100%;">
	<div >
 		©2020 formulario
 	</div>
</footer>

</body>
</html>