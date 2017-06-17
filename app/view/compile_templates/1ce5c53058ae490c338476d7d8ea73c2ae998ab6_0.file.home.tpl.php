<?php
/* Smarty version 3.1.30, created on 2017-06-17 11:52:30
  from "/home/users/rickertbrandsen/weapwork.9e.cz/web/app/view/templates/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944fbde8e57a2_14039990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ce5c53058ae490c338476d7d8ea73c2ae998ab6' => 
    array (
      0 => '/home/users/rickertbrandsen/weapwork.9e.cz/web/app/view/templates/home.tpl',
      1 => 1497693100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:logoutForm.tpl' => 1,
    'file:createForm.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5944fbde8e57a2_14039990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:logoutForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:createForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<p class="todosActual">Your todos:</p>

<p>Operations:</p>

<p>Delete:</p>

<form method="POST" action="/home/deleteNote">
<input type="number" name="noteId" placeholder="enter task id">
<button type="submit">&times / delete task</button>

</form>

<p>Update:</p>

<form method="POST" action="/home/updateNote">
		<input type="number" name="noteId" placeholder="enter task id">
		<input type="text" name="noteName" placeholder="tast name">
		<input type="text" name="noteContent" placeholder="task content">
		<input type="date" name="noteDateFinished" placeholder="task finished?">
		<button type="submit">Update task</button>
</form>

<table>
	<th>id</th>
	<th>Name</th>
	<th>Content</th>
	<th>Created</th>
	<th>Finished</th>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['content'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['created'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['finished'];?>
</td>
	</tr>


	   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
