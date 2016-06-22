<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/EscritorEntradas.inc.php';

$titulo = "Curso desarrollo Web Principiantes - Blog Java Dev One";
?>

<?php include_once 'plantillas/documento-declaracion.inc.php'?>
<?php include_once 'plantillas/navbar.inc.php';?>

<div class="container">
	<div class="jumbotron">
		<h1>Blog de pruebas</h1>
		<p>para recordar y aprender nuevas cosas</p>
	</div>
</div>

<div class="container">
	<div class="row">

		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							Busqueda
						</div>
						<div class="panel-body">
							<div class="form-group">
								<input type="search" class="form-control"
									placeholder="¿Qué Buscas?"></input>
							</div>
							<button class="form-control">Buscar</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel panel-heading">
							<span class="glyphicon glyphicon-filter" aria-hidden="true"></span>
							Filtro
						</div>
						<div class="panel-body"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel panel-heading">
							<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
							Archivo
						</div>
						<div class="panel-body"></div>
					</div>
				</div>

			</div>
		</div>

		<div class="col-md-8">
			<?php EscritorEntradas::escribir_entradas(); ?>
		</div>
	</div>
</div>

<?php include_once 'plantillas/documento-cierre.inc.php'?>