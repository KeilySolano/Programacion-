<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 20:36:07
  from 'C:\xampp\htdocs\Progra\Programacion-\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef39d17e09fc1_28238139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab35145d4a75d33583084bc26a79d8e7dd559dd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\Programacion-\\templates\\Login.tpl',
      1 => 1593021486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef39d17e09fc1_28238139 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-md-center">
	<div class="col-6">
	  <br><h1>Login</h1><br>
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
	    <button type="submit" class="btn btn-primary">Ingresar</button>
	  </form>
	</div>
</div><?php }
}
