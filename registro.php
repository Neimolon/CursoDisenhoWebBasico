<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = "Registro";
?>

<?php include_once 'plantillas/documento-declaracion.inc.php'?>
<?php include_once 'plantillas/navbar.inc.php';?>

<div class="container">
	<div class="jumbotron">
		<h1 class="text-center">Formulario de registro</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 text-center">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Instrucciones</h3>
				</div>
				<div class="panel-body">
					<br>
					<br>
					<p class="text-justify">Para unirte al blog introduce un nombre de
						usuario, tu email y una contraseña. El email que escribas debe ser
						real ya que lo necesitarás para gestionar tu cuenta. Te
						recomendamos que usas una contraseña que contenga letras
						minusculas, mayusculas, números y simbolos</p>
					<br>
					<br> <a href="#">¿Ya tienes cuenta?</a> <br>
					<br> <a href="#">¿Olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Introduce tus datos</h3>
				</div>
				<div class="panel-body">
					<form role="form" >
						<div class="form-group">
							<label>Nombre de usuario:</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Email:</label>
							<input type="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input type="password" class="form-control">
						</div>
						<div class="form-group">
							<label>Repite la contraseña:</label>
							<input type="email" class="form-control">
						</div>
						<br>
						<button type="reset" class="btn btn-default btn-primary"> Limpiar formulario</button>
						<button type="submit" class="btn btn-default btn-primary"> Enviar datos</button>
					
					</form>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include_once 'plantillas/documento-cierre.inc.php'?>