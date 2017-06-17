{include file='header.tpl'}

<form method="POST" action="/registration">
	<p> User email : </p>
	<input type="email" name="email">
	<p>Password :</p>
	<input type="Password" name="passwd">
	<p>is admin ? :</p>
	<input type="number" name="admin" max="1" min="0" placeholder="0 = no; 1 = yes">
	
	<button type="submit">REGISTER</button>
</form>

{include file='footer.tpl'}
