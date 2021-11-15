<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>DEMO</title>
		<!--BOOTSTRAP 5.13-->
		<link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
	</head>
	<body>
<div class="container">
<div class="row justify-content-center mt-5">
	 		
			 <div class="col-4 mb-5">
			 	<h4 class="text-center">Criar conexão</h4>
			 	<form method="post" action="">
			 		<label class="form-label">Servidor</label>
			 		<input class="form-control" type="text" name="servidor"/>
			 		<label class="form-label">Usuário</label>
			 		<input class="form-control" type="text" name="usuario"/>
			 		<label class="form-label">Senha</label>
			 		<input class="form-control" type="text" name="senha"/>
			 		<label class="form-label">Banco de Dados</label>
			 		<input class="form-control" type="text" name="banco"/>
			 		<button class="btn-primary mt-3" type="submit" name="criar">Criar</button>
			 	</form>
			 </div>	
	 		
</div>
</div>
<?php 
if (isset($_POST['criar'])) {

	$local=$_POST['servidor'];
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
	$database=$_POST['banco'];

	$simple_xml = new SimpleXMLElement('<DATABASE></DATABASE>');
	$simple_xml->addChild('NOTA');
	$simple_xml->NOTA[0]->addChild('localhost', $local);
	$simple_xml->NOTA[0]->addChild('usuario', $usuario);
	$simple_xml->NOTA[0]->addChild('senha', $senha);
	$simple_xml->NOTA[0]->addChild('banco', $database);
	$simple_xml->asXML('load.xml');

	echo '
	<div class="container">
	<div class="row justify-content-center">

	<div class="alert alert-success col-4" role="alert">
	
	O arquivo foi gerado com sucesso!
	<a class="btn btn-primary btn-sm" href="gerar.php">Próximo</a>

	</div>
	
	

	</div>
	</div>';
}
	
?>
	
		
		
		
		
	</body>
</html>