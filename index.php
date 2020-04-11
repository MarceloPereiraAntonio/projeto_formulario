<?php  
#banco 
include 'db.php';

#cabecalho
include 'header.php';


#conteudo
if (isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];

}
else {
	$pagina = 'home';
}

switch ($pagina) {
	case 'formulario': include 'views/formulario.php'; break;
	case 'visual': include 'views/visual.php'; break;
	case 'tela_editar': include 'views/tela_editar.php'; break;
	
	default: include 'views/home.php';

		break;
}

#rodape
include 'footer.php';