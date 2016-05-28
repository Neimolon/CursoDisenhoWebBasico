
<div class="form-group">
	<label>Nombre de usuario:</label> <input name="nombre" type="text"
		class="form-control" placeholder="David Pérez" <?php $validador->mostrar_nombre() ?> >
	<?php $validador->mostrar_error_nombre(); ?>
</div>
<div class="form-group">
	<label>Email:</label> <input name="email" type="email"
		class="form-control" placeholder="usuario@mail.com" <?php $validador->mostrar_email() ?>>
	<?php $validador->mostrar_error_email(); ?>
</div>
<div class="form-group">
	<label>Password:</label> <input name="clave1" type="password"
		class="form-control">
	<?php $validador->mostrar_error_clave1(); ?>
</div>
<div class="form-group">
	<label>Repite la contraseña:</label> <input name="clave2"
		type="password" class="form-control">
	<?php $validador->mostrar_error_clave2(); ?>
</div>
<br>
<button type="reset" class="btn btn-default btn-primary">Limpiar
	formulario</button>
<button name="enviar" type="submit" class="btn btn-default btn-primary">
	Enviar datos</button>