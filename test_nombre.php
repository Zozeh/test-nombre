<!DOCTYPE html>
<html>
<head>
	<title>Test nombre</title>
</head>
<body>
	<form action="test_nombre.php" method="POST">
		<input type="number" name="nbr" placeholder="Entrer un nombre"><br>
		<input type="submit" value="Montrer">
	</form>
</body>
</html>

<?php 
$ins = $_POST["nbr"];
if($ins < 0){
	echo $ins ." est inférieur à 0";
}
else if ($ins > 0){
	echo $ins ." est supérieur à 0";
}

 ?>
