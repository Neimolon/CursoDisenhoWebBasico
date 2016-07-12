<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'app/Usuario.inc.php';
include_once 'app/Entrada.inc.php';
include_once 'app/Comentario.inc.php';

include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/RepositorioEntrada.inc.php';
include_once 'app/RepositorioComentario.inc.php';


$componentes_url = parse_url($_SERVER["REQUEST_URI"]);

$ruta = $componentes_url["path"];

$partes_ruta = explode("/", $ruta);
$partes_ruta = array_filter($partes_ruta); //cambia las referencias vacias a null
$partes_ruta = array_slice($partes_ruta, 0); //elimina los array que apuntan a null

$ruta_elegida = "vistas/404.php";

if ($partes_ruta[0] == "blog-CursoDesarolloWeb-JD1") {
    if (count($partes_ruta) == 1) {
        include_once 'vistas/home.php';
    } else if (count($partes_ruta) == 2) {
        switch ($partes_ruta[1]) {
            case 'login':
                $ruta_elegida = "vistas/login.php";
                break;
            case 'logout':
                $ruta_elegida = "vistas/logout.php";
                break;
            case 'registro':
                $ruta_elegida = "vistas/registro.php";
                break;

            case 'gestor':
                $ruta_elegida = "vistas/gestor.php";
                break;
            case 'relleno-dev':
                $ruta_elegida = "vistas/script-relleno.php";
                break;
        }
    } else if (count($partes_ruta) == 3) {
        if ($partes_ruta[1] == "registro-correcto") {
            $ruta_elegida = "vistas/registro-correcto.php";
            $nombre = $partes_ruta[2];
        }
        if ($partes_ruta[1] == "entrada") {
            $url = $partes_ruta[2];
            Conexion::abrir_conexion();
            $entrada = RepositorioEntrada::obtener_entrada_por_url(Conexion::obtener_conexion(), $url);

            if ($entrada != null) {
                $autor = RepositorioUsuario::obtener_usuario_por_id(Conexion::obtener_conexion(), $entrada->obtener_autor_id());
                $comentarios = RepositorioComentario::obtener_comentarios(Conexion::obtener_conexion(), $entrada->obtener_id());
                $ruta_elegida = "vistas/entrada.php";
                $entradas_al_azar = RepositorioEntrada::obtener_entradas_al_azar(Conexion::obtener_conexion(), 3);
            }
        }
    }
}

include_once $ruta_elegida;


