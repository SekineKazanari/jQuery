<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Clase</title>
	<style type="text/css">
		.super_div{
			width: 100%;
			height: 500px;
			background-color: #D5D8DC;
		}
		.mini_div{
			width: 30%;
			margin: 1%;
			border-radius: 5px;
			border-width: 1px;
			border-style: solid;
			border-color: black;
			height: 300px;
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
		});
	</script>

</body>
</html>