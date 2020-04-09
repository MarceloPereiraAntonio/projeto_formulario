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
	case 'formulario': include 'formulario.php'; break;
	case 'visual': include 'views/visual.php'; break;
	case 'nova_tela': include 'nova_tela.php'; break;
	
	default: include 'views/home.php';

		break;
}

#rodape
include 'footer.php';