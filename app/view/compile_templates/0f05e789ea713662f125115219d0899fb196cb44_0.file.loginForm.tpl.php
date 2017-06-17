<?php
/* Smarty version 3.1.30, created on 2017-06-17 11:51:48
  from "/home/users/rickertbrandsen/weapwork.9e.cz/web/app/view/templates/loginForm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944fbb4d3e822_82434313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f05e789ea713662f125115219d0899fb196cb44' => 
    array (
      0 => '/home/users/rickertbrandsen/weapwork.9e.cz/web/app/view/templates/loginForm.tpl',
      1 => 1497693099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5944fbb4d3e822_82434313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form method="POST" action="/login">
	<p> email: </p>
	<input type="email" name="email">
	<p>Password :</p>
	<input type="Password" name="passwd">
	<button type="submit">LOGIN</button>
</form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
