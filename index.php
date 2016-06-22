<?php 

$componentes_url = parse_url($_SERVER["REQUEST_URI"]);
$ruta = $componentes_url["path"];
$partes_ruta = explode("/",$ruta);

if($partes_ruta[2] == "registro"){
	include_once 'vistas/registro.php';
}else if($partes_ruta[2] == "login"){
		include_once 'vistas/login.php';
}else if($partes_ruta[1] == "blog-CursoDesarolloWeb-JD1"){
	include_once 'vistas/home.php';
}else{
	echo "404 <br>";
}