<?php
/* Smarty version 3.1.30, created on 2017-06-17 11:52:05
  from "/home/users/rickertbrandsen/weapwork.9e.cz/web/app/view/templates/registerForm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944fbc5dafbc6_79458541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbeffa8600e8f7bf566eb6a4a6403687ad76fe64' => 
    array (
      0 => '/home/users/rickertbrandsen/weapwork.9e.cz/web/app/view/templates/registerForm.tpl',
      1 => 1497693097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5944fbc5dafbc6_79458541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form method="POST" action="/registration">
	<p> User email : </p>
	<input type="email" name="email">
	<p>Password :</p>
	<input type="Password" name="passwd">
	<p>is admin ? :</p>
	<input type="number" name="admin" max="1" min="0" placeholder="0 = no; 1 = yes">
	
	<button type="submit">REGISTER</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
