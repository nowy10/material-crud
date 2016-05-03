<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Insertar, Eliminar, Modificar con PHP, Mysqli</title>

<!-- agregamos los estilos -->
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/flexboxgrid.css">
<link rel="stylesheet" href="css/style.css">
<!-- agregamos font awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<!-- agregamos jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="js/main.js"></script>
</head>
<body>

	<div class="container">

		<div class="row center-xs top">
		    <div class="col-xs-12">
		       <div class="nuevo_registro">
		       		<a id="registro" href="javascript:void(0);"><i class="fa fa-user-plus" aria-hidden="true"></i> Nuevo Registro</a>
		       </div> 
		    </div>
		</div> <!-- boton de nuevo registro -->

		<div class="row center-xs top">
			<div class="col-xs-12">
				<div class="cabecera">
					<div class="row">
						<div class="col-xs-1">
							ID
						</div>
						<div class="col-xs-3">
							Nombre
						</div>
						<div class="col-xs-3">
							Apellido
						</div>
						<div class="col-xs-3">
							Correo
						</div>
						<div class="col-xs-1 center">
							Editar
						</div>
						<div class="col-xs-1 center">
							Eliminar
						</div>
					</div>
				</div>
			</div>
		</div> <!-- div de cabecera -->

		<div class="row">
			<div class="col-xs-12">
				<div class="resultados">
					<div class="fila-1">
						<div class="row">
							<div class="col-xs-1">
								ID
							</div>
							<div class="col-xs-3">
								Nombre
							</div>
							<div class="col-xs-3">
								Apellido
							</div>
							<div class="col-xs-3">
								Correo
							</div>
							<div class="col-xs-1 center">
								<a href="#" class="editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</div>
							<div class="col-xs-1 center">
								<a href="#" class="eliminar"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
							</div>
						</div> 
					</div><!-- fila 1 -->
					<div class="fila-2">
						<div class="row">
							<div class="col-xs-1">
								ID
							</div>
							<div class="col-xs-3">
								Nombre
							</div>
							<div class="col-xs-3">
								Apellido
							</div>
							<div class="col-xs-3">
								Correo
							</div>
							<div class="col-xs-1 center">
								<a href="#" class="editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</div>
							<div class="col-xs-1 center">
								<a href="#" class="eliminar"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
							</div>
						</div> 
					</div><!-- fila 2 -->
				</div>
			</div>
		</div>
	</div>

	<div class="bg">
		<div class="modal-registro">
			<div class="cerrar-modal">
				<a class="cerrar" href="javascript:void(0);"><i class="fa fa-times" aria-hidden="true"></i></a>
			</div>
			<div class="cont-modal">
				<h1>Nuevo Registro</h1>
				<form id="form-registro">
					<input type="text" id="nombre" name="nombre" placeholder="Nombre">
					<input type="text" id="apellido" name="apellido" placeholder="Apellido">
					<input type="text" id="correo" name="correo" placeholder="correo">

					<button id="enviar" class="enviar">enviar</button>
				</form>
			</div>
		</div> <!-- modal de registro -->

		<div class="modal-editar">
			<div class="cerrar-modal">
				<a class="cerrar" href="javascript:void(0);"><i class="fa fa-times" aria-hidden="true"></i></a>
			</div>
			<div class="cont-modal">
				<h1>Editar este Registro</h1>
				<form id="form-registro">
					<input type="text" id="nombre" name="nombre" placeholder="Nombre">
					<input type="text" id="apellido" name="apellido" placeholder="Apellido">
					<input type="text" id="correo" name="correo" placeholder="correo">

					<button id="enviar" class="enviar">enviar</button>
				</form>
			</div>
		</div> <!-- modal de editar -->

		<div class="modal-eliminar">
			<div class="cerrar-modal">
				<a class="cerrar" href="javascript:void(0);"><i class="fa fa-times" aria-hidden="true"></i></a>
			</div>
			<div class="cont-modal">
				<h1>Seguro de eliminar este registro</h1>
			</div>
		</div> <!-- modal de eliminar -->
	</div>



</body>
</html>