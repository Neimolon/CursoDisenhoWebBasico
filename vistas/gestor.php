<?php
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
include_once 'plantillas/panel-control-declaracion.inc.php';

switch ($gestor_actual) {
    case '':
        include_once 'plantillas/gestor-generico.inc.php';
        break;
    case 'entradas':
        include_once 'plantillas/gestor-entradas.inc.php';
        break;
    case 'comentarios':
    include_once 'plantillas/gestor-comentarios.inc.php';
    break;
    case 'favoritos':
    include_once 'plantillas/gestor-favoritos.inc.php';
    break;
}

include_once 'plantillas/panel-control-cierre.inc.php';
