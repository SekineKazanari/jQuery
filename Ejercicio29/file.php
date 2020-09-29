<?php 
error_reporting(E_ALL ^ E_NOTICE);

$mysqli = new mysqli("localhost", "root", "", "Ajax");

if ($mysqli->connect_errno) {

    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();

}else{

	$email = $_POST['email'];
	$pass = $_POST['password'];
	$anio = $_POST['year'];

	$consulta = "INSERT INTO examen VALUES ('".$email."', '".$pass."', '".$anio."')";

	mysqli_query($mysqli, $consulta);

	if ($consulta) {
		echo "Registro exitoso";
	}else{
		echo "No se puede registrar el usuario:c";
	}

	$consulta2 = "SELECT * FROM examen";

	$resultado = mysqli_query($mysqli, $consulta2);

	while ($row = mysqli_fetch_array($resultado)) {
		echo "<tr>";
			echo "<th>".$row['email']."</th>";
			echo "<th>".$row['pass']."</th>";
			echo "<th>".$row['anio']."</th>";
		echo "</tr>";
	}
}

$mysqli->close();

?>