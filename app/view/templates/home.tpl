{include file='header.tpl'}
{include file='logoutForm.tpl'}
{include file='createForm.tpl'}

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

	{foreach from=$data key=k item=i}
	<tr>
		<td>{$i.id}</td>
		<td>{$i.name}</td>
		<td>{$i.content}</td>
		<td>{$i.created}</td>
		<td>{$i.finished}</td>
	</tr>


	   {/foreach}
</table>

{include file='footer.tpl'}
