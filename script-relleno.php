<?php 

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'app/Usuario.inc.php';
include_once 'app/Entrada.inc.php';
include_once 'app/Comentario.inc.php';

include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/RepositorioEntrada.inc.php';
include_once 'app/RepositorioComentario.inc.php';

Conexion::abrir_conexion();

for($usuarios = 0; $usuarios < 100; $usuarios++){
	$nombre = sa(10);
	$email = sa(5)."@".sa(5).".".sa(3);
	$password = password_hash("abc123..",PASSWORD_DEFAULT);
	
	$usuario = new Usuario('',$nombre,$email,$password,'','');
	
	RepositorioUsuario::insertar_usuario(Conexion::obtener_conexion(),$usuario);
}

for($entradas = 0; $entradas < 100; $entradas++){
	$titulo = sa(10);
	$texto = lorem();
	$autor_id = rand(1,100);
	
	$entrada = new Entrada('',$autor_id,$titulo,$texto,'','');
	
	RepositorioEntrada::insertar_entrada(Conexion::obtener_conexion(),$entrada);
}

for($comentarios = 0; $comentarios< 100; $comentarios++){
	$titulo = sa(10);
	$texto = lorem();
	$autor_id = rand(1,100);
	$entrada_id = rand(1,100);

	$comentario = new Comentario('',$autor_id,$entrada_id,$titulo,$texto,'');

	RepositorioComentario::insertar_comentario(Conexion::obtener_conexion(),$comentario);
}



function sa($longitud){
	$caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$numero_caracteres = strlen($caracteres);
	
	$string_aleatorio = "";
	
	for($i = 0; $i < $longitud; $i++){
		$string_aleatorio .= $caracteres[rand(0,$numero_caracteres-1)];
	}
	
	return $string_aleatorio;
}

function lorem(){
	$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu hendrerit nulla. Morbi in aliquet dolor. Sed ut commodo quam, non sollicitudin leo. Nulla pharetra rhoncus congue. In finibus laoreet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque laoreet arcu eget pretium tempor. Nunc vehicula ut nunc et elementum.
			  Aliquam a feugiat tortor. Praesent iaculis mattis nulla, a accumsan sem facilisis non. Aenean scelerisque feugiat neque id pretium. Maecenas eget tristique neque. Fusce et nisi diam. Donec congue elit eu mi gravida ornare. In ante ipsum, porttitor et tempor id, venenatis et mi. Proin vehicula justo nec nunc finibus condimentum. Mauris eu velit quis sapien scelerisque luctus ut quis diam. Vivamus at enim felis. Suspendisse at est quis elit lacinia egestas nec nec massa. Nunc placerat bibendum nisl, at hendrerit leo molestie ut.
			  Ut pulvinar magna at urna volutpat interdum. Duis in ullamcorper felis, lobortis dictum eros. Suspendisse fermentum ex in accumsan suscipit. Maecenas lacus ligula, semper et diam eget, fringilla tincidunt elit. Suspendisse varius cursus dolor vel tincidunt. Ut ornare maximus est, et sagittis orci bibendum sed. Maecenas euismod finibus purus non vestibulum. Etiam porttitor bibendum aliquet. Proin feugiat, ex condimentum ultricies laoreet, dolor est sagittis tellus, id molestie augue erat sed neque. Sed posuere vitae diam vel sodales. Etiam porta suscipit sapien, lacinia molestie dolor varius eu. Praesent felis ipsum, accumsan id imperdiet et, egestas quis elit. Integer ligula ligula, laoreet fermentum commodo ac, tristique nec odio. Vestibulum vitae tellus fringilla, congue urna id, bibendum enim.
			  Suspendisse tincidunt, augue in efficitur feugiat, tellus nisi dignissim lectus, nec gravida nunc lacus vitae quam. Maecenas facilisis tellus vitae lorem vestibulum, id vestibulum neque fermentum. Donec ac turpis molestie, iaculis est vel, sollicitudin lectus. Donec sed pellentesque ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus eu nulla vitae metus lacinia vehicula. Duis interdum lobortis velit nec feugiat. Curabitur sed ex at nunc convallis accumsan accumsan id nibh. Donec id leo nunc. Proin vitae lacinia arcu, in hendrerit libero. In vitae tincidunt lectus. Proin vehicula malesuada urna eget lobortis. Nam sed lacus nisl. Donec sapien ante, ultricies tincidunt elit interdum, accumsan dapibus odio. Nullam quis justo quis elit porttitor molestie. Suspendisse laoreet arcu ex.
			  Vivamus eget nisl laoreet, malesuada diam ut, laoreet purus. Etiam condimentum quis orci ac viverra. Sed ullamcorper metus magna, quis accumsan odio volutpat in. Nam quis pharetra eros, vel commodo orci. Donec libero sem, maximus id fringilla sit amet, tempor vel velit. Duis eu euismod augue. In ut tincidunt tellus, in egestas eros. Sed imperdiet venenatis orci eget lacinia. Duis auctor quam ac erat luctus, quis condimentum dui interdum. Etiam elit nisl, eleifend vitae nisl vel, tempus sollicitudin eros.";

return $lorem;
}


?>