<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>DEMO</title>
		<!--BOOTSTRAP 5.13-->
		<link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
	</head>
	<body>
<div class="container-fluid">
<div class="row justify-content-center mt-5">
<div class="col-4">

<?php
$eventos = simplexml_load_file("load.xml");
foreach ($eventos->NOTA as $evento):
?>
				 
<h4 class="text-center">Verifique script gerado!</h4>
			 	
<form method="post" action="compilar.php">

<textarea class="border border-1 border-primary col-12" rows="15" name="texto">
<?php
print '
<?php

$conn = mysqli_connect(';
echo "'";
echo $evento->localhost;
echo "'";
echo ',';
echo "'";
echo $evento->usuario;
echo "'";
echo ',';
echo "'";
echo $evento->senha;
echo "'";
echo ',';
echo "'";
echo $evento->banco;
echo "'";
print ');
if (!$conn){
 	 echo "Falha de conexão: Por favor, contate o administrador de sistema!";
 	//header("Location: index.html");
 	exit();
 }else{

}

?>';


?>
	
</textarea>
<div class="d-grid gap-2 col-6 mx-auto">
<button class="btn btn-primary" type="submit">Gerar</button>
</div>
<?php endforeach; ?>	
</form>


</div>	
</div>
</div>
		

		
		
	</body>
</html>