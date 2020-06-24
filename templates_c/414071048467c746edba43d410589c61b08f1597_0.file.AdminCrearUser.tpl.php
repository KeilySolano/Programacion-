<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 20:46:54
  from 'C:\xampp\htdocs\Progra\Programacion-\templates\AdminCrearUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef39f9e37e9b2_73187453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '414071048467c746edba43d410589c61b08f1597' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\Programacion-\\templates\\AdminCrearUser.tpl',
      1 => 1593024239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef39f9e37e9b2_73187453 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-md-center">
	<div class="col">
	  <br><h1>Crear usuario</h1><br>
	  <form method="post" action="">
	    <div class="form-group">
			<label for="usuario">Usuario</label>
			<input type "tex" class="form-control" id="usuario" name="usuario " aria-decribedby="emailHelp">
	    </div><br>
		<div class="form-group">
			<label for="password">Password</label>
			<input type "tex" class="form-control" id="password" name="password ">
		</div><br>
		<div class="form-group">
			<label for="tipo">Tipo Trabajador</label>
			<select class="form-control" name="tipo" id="tipo">
				<option value="Trabajador">Trabajador</option>
				<option valee="Administrador">Administrador</option>
			</select>
		</div><br>
	    <button type="submit" class="btn btn-primary">Guardar Usuario</button>
	  </form>
	</div>
</div><?php }
}
