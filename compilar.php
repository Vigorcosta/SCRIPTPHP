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


<?php
$texto=$_POST['texto'];

if (isset($texto)) {

	$arquivo = fopen('config.php', 'w');
	fwrite($arquivo, $texto);
	fclose($arquivo);

	echo '

	<div class="alert alert-success col-4" role="alert">

	O arquivo CONFIG.PHP foi gerado com sucesso!
	<a class="btn btn-primary btn-sm mt-3" href="index.php">Pronto!</a>

	</div>
	';

} else {
	echo '
	<div class="alert alert-danger col-4 mt-3" role="alert">

	O arquivo não foi gerado com sucesso!
	<a class="btn btn-primary btn-sm" href="index.php">Tente de novo!</a>
	</div>
	';

}

?>


</div>
</div>




</body>
</html>
