<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 20:46:54
  from 'C:\xampp\htdocs\Progra\Programacion-\templates\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef39f9e362877_96371942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '431ecebe064c685fb14ccf14a2dccf086ec55cb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\Programacion-\\templates\\Admin.tpl',
      1 => 1593024412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminCrearUser.tpl' => 1,
  ),
),false)) {
function content_5ef39f9e362877_96371942 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-contect-md-center">
	<div class="col-12">
		<ul class="nav alert-primary">
			<li class="nav-item">
				<h4>Usuario:</h4>
			</li>
			<li class="nav-item">
			</li>
			<li class="nav-item">
				<h4>Tipo:</h4>
			</li>
		</ul>
	</div>
</div>

<div>
	<div>
		<ul class="nav flex-column alert-danger">
			<br><br><br>
			<li class="nav-item">
				<a class="nav-link active" href="#">Crear Usuario</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="#">Habilitar/Deshabilitar Usuario</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="#">Ver Inventario</a>
			</li><br><br><br>
		</ul>
	</div>

	<div class="col-9">
		<?php $_smarty_tpl->_subTemplateRender("file:AdminCrearUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>

</div><?php }
}
