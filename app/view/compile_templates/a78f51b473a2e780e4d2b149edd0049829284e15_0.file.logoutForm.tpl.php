<?php
/* Smarty version 3.1.30, created on 2017-06-17 11:23:46
  from "/home/ra/www/libor/app/view/templates/logoutForm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944f52207be07_70468673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a78f51b473a2e780e4d2b149edd0049829284e15' => 
    array (
      0 => '/home/ra/www/libor/app/view/templates/logoutForm.tpl',
      1 => 1497632017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944f52207be07_70468673 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST" action="/libor/logout">
	<button type="submit">LOGOUT</button>
</form>
<?php }
}
