<?php
/* Smarty version 3.1.30, created on 2017-06-17 11:51:53
  from "/home/users/rickertbrandsen/weapwork.9e.cz/web/app/view/templates/errorPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944fbb9c84395_09045465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5edb5d1f3ff05b5612134e8daa71f4085915917' => 
    array (
      0 => '/home/users/rickertbrandsen/weapwork.9e.cz/web/app/view/templates/errorPage.tpl',
      1 => 1497693101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5944fbb9c84395_09045465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<p id="error"> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 </p>
	<a href="/home">back to login page</a>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
