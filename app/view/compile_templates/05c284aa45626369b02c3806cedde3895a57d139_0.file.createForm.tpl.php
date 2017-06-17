<?php
/* Smarty version 3.1.30, created on 2017-06-17 11:23:46
  from "/home/ra/www/libor/app/view/templates/createForm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944f5220bf775_22431067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05c284aa45626369b02c3806cedde3895a57d139' => 
    array (
      0 => '/home/ra/www/libor/app/view/templates/createForm.tpl',
      1 => 1497644154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944f5220bf775_22431067 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p> If you want to add some todo notes, use this form:</p>
<form method="POST" action="/libor/home/createNote">
	<p> Name: </p>
	<input type="text" name="noteName">
	<p>Content:</p>
	<input type="text" name="noteContent">
	<button type="submit">Create new todo note</button>
</form>
<?php }
}
