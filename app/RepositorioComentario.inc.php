<?php 
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Comentario.inc.php';

class RepositorioComentario{

	public static function insertar_comentario($conexion,$comentario){
		$comentario_insertado = false;
		
		if(isset($conexion)){
			try {
				$sql = "INSERT INTO comentarios(autor_id,entrada_id,titulo,texto,fecha) VALUES(:autor_id,:entrada_id,:titulo,:texto,NOW())";
		
				$sentencia = $conexion->prepare($sql);
		
				$sentencia->bindParam(":autor_id",$comentario->obtener_autor_id(),PDO::PARAM_STR);
				$sentencia->bindParam(":entrada_id",$comentario->obtener_entrada_id(),PDO::PARAM_STR);
				$sentencia->bindParam(":titulo",$comentario->obtener_titulo(),PDO::PARAM_STR);
				$sentencia->bindParam(":texto",$comentario->obtener_texto(),PDO::PARAM_STR);
		
				$entrada_insertada = $sentencia->execute();
		
			}catch (PDOException $ex) {
				print "ERROR" . $ex->getMessage();
			}
		}
		return $entrada_insertada;
	}
	
	public static function obtener_comentarios($conexion,$entrada_id){
		
		$comentarios = [];
		
		if(isset($conexion)){
			try {
				include_once 'Comentario.inc.php';
				
				$sql = "SELECT * FROM comentarios WHERE entrada_id = :entrada_id";
				$sentencia = $conexion->prepare($sql);
				$sentencia->bindParam(":entrada_id",$entrada_id,PDO::PARAM_STR);
				$sentencia->execute();
				
				$resultado = $sentencia->fetchAll();
				
				if(count($resultado)){
					foreach($resultado as $fila){
						$comentarios[] = new Comentario($fila["id"],$fila["autor_id"],$fila["entrada_id"],$fila["titulo"],$fila["texto"],$fila["fecha"]);
					}
				}
				
				return $comentarios;
			}catch (PDOException $ex) {
				print "ERROR" . $ex->getMessage();
			}
		}
		return $comentarios;
	}
}