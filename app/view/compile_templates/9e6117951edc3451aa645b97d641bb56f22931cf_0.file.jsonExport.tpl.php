<?php
/* Smarty version 3.1.30, created on 2017-06-17 11:23:46
  from "/home/ra/www/libor/app/view/templates/jsonExport.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944f52212cf38_07728414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e6117951edc3451aa645b97d641bb56f22931cf' => 
    array (
      0 => '/home/ra/www/libor/app/view/templates/jsonExport.tpl',
      1 => 1497645926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944f52212cf38_07728414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST" action="/libor/jsonExporter">
	<button type="submit">Export to JSON</button>
</form>
<?php }
}
