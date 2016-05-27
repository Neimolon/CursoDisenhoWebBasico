<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Curso desarrollo Web Principiantes - Blog Java Dev One</title>

		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/estilos.css" rel="stylesheet" />
	</head>
	<body>
		<nav class="navbar navbar-default navbar-static-top" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Este botón despliega la barra de navegación </span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"> Blog de curso de desarrollo</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Entrada</a>
						</li>
						<li>
							<a href="#">Favoritos</a>
						</li>
						<li>
							<a href="#">Auores</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Entrada</a>
						</li>
						<li>
							<a href="#">Favoritos</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

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
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Busqueda
								</div>
								<div class="panel-body">
									<div class="form-group">
										<input type="search" class="form-control" placeholder="¿Qué Buscas?" ></input>
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
									<span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
								</div>
								<div class="panel-body">
									
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel panel-heading">
									<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
								</div>
								<div class="panel-body">
									
								</div>
							</div>
						</div>
						
					</div>
				</div>

				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 
									Últimas entradas
								</div>
								<div class="panel-body">
									<?php
										include_once 'app/Conexion.inc.php';
										Conexion::abrir_conexion();
										Conexion::cerrar_conexion();
									?>
									<p>Todavía no hay entradas</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>