<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 20:48:55
  from 'C:\xampp\htdocs\Progra\Programacion-\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef3a017e6f714_65383354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '470e430e2d666d53445f604645f3e545b71356a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\Programacion-\\templates\\Default.tpl',
      1 => 1593024532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/header.tpl' => 1,
    'file:Login.tpl' => 1,
    'file:Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_5ef3a017e6f714_65383354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("file:Login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
