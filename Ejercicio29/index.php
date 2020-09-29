<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Examen</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<style type="text/css">
		.super_div{
			width: 100%;
			height: 800px;
			background-color: #D5D8DC;
		}
		.mini_div{
			width: 30%;
			margin: 1%;
			border-radius: 5px;
			border-width: 1px;
			border-style: solid;
			border-color: black;
			height: 100%;
			float: left;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>

	<div class="super_div">
		<h1>o.o</h1>
		<center>
			<form id="formulario">
				<fieldset style="width: 40%;">
					<legend>
						Datos del usuario
					</legend>

					<label> Email </label>
					<input type="text" style="width: 100%;height: 40px;" name="email" id="email" value="" placeholder="">

					<p></p>

					<label>Contraseña</label>
					<input type="text" style="width: 100%;height: 40px;" name="password" id="password" value="" placeholder="">

					<p></p>

					<label>Año de nacimiento</label>
					<input type="text" style="width: 100%;height: 40px;" name="year" id="year" value="" placeholder="">

					<p></p>

					<button type="button" id="guardar"> Guardar regisro</button>
				</fieldset>
			</form>

			<p></p>
			<p style="color: #D5D8DC">a</p>

			<table class="table" style="width: 40%">
				<thead class="thead-dark" style="text-align: center;">
					<tr>
						<th scope="col">Email</th>
						<th scope="col">Password</th>
						<th scope="col">Fecha de nacimiento</th>
					</tr>
				</thead>
				<tbody id="contenido" style="text-align: center;">
					<!-- Aqui va la lista de usuarios -->
				</tbody>
			</table>

			<p></p>

			<button type="button" id="mostrar"> Mostrar registro</button>
	
		</center>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			$("#guardar").click(function(){
				var email = $("#email").val();
				var pass = $("#password").val();
				var anio = $("#year").val();

				$.ajax({
					type: "POST",
					dataType: 'html',
					url: "file.php",
					data: "&email="+email+"&password="+pass+"&year="+anio,
					success: function(){
						focus();
					}
				});
			});

			function focus(){
				$("#email").val("");
				$("#password").val("");
				$("#year").val("");
			}

			$("#mostrar").click(function(){
				$('#contenido').load('file.php');
			});
		});
	</script>

</body>
</html>