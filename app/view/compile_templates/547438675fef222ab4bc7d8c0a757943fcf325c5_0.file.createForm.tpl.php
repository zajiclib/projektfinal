<?php
/* Smarty version 3.1.30, created on 2017-06-17 11:52:30
  from "/home/users/rickertbrandsen/weapwork.9e.cz/web/app/view/templates/createForm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944fbde8eb5c4_31296857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '547438675fef222ab4bc7d8c0a757943fcf325c5' => 
    array (
      0 => '/home/users/rickertbrandsen/weapwork.9e.cz/web/app/view/templates/createForm.tpl',
      1 => 1497693104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944fbde8eb5c4_31296857 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p> If you want to add some todo notes, use this form:</p>
<form method="POST" action="/home/createNote">
	<p> Name: </p>
	<input type="text" name="noteName">
	<p>Content:</p>
	<input type="text" name="noteContent">
	<button type="submit">Create new todo note</button>
</form>
<?php }
}
