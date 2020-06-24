<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 20:42:12
  from 'C:\xampp\htdocs\Progra\Programacion-\templates\AdminHabUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef39e849879d3_86755668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69db71256a6802ed60dfdd0bd9e3b51eab33014f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\Programacion-\\templates\\AdminHabUser.tpl',
      1 => 1593023528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef39e849879d3_86755668 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-md-center">
	<div class="col">
		<br><h1>Habilitar/Deshabilitar Usuario</h1>
		<form method="post" action"">
			<div class="form-group">
				<label for="usuario">Usuario</label>
				<input type="tex" class="form-control" id"usuario" name="usario" aria-describedby="emailHelp">
			</div><br>

			<div class="form-group">
				<label for="tipo">Tipo Trabajador</label>
				<select class="form-control" name="tipo" id="tipo">
					<option value="Trabajador">Trabajador</option>
					<option value="Administrador">Administrador</option>
				</select>
			</div><br>

			<div class="form-group">
				<label for="tipo">Habilitar/Deshabilitar Usuario</label>
				<select class="form-control" name="tipo" id="tipo">
					<option value="1">Habilitar</option>
					<option value="0">Deshabilitar</option>
				</select>
			</div><br>

			<button type="submit" class="btn btn-primary">Guardar</button>
		</form>
	</div>
</div><?php }
}
