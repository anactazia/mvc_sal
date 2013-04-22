<h1>Skapa Användare</h1>
<hr />
<p class="center">Här kan du skapa ett användarkonto.</p>

<form method="post" action="<?php echo URL;?>user/create" class="formuser">
	<label>Användarnamn</label><input type="text" required name="login" /> *<br />
	<label>Lösenord</label><input type="password" required name="password" /> *<br />
	<label>Namn</label><input type="text" name="name" /><br />
	<label>E-Mail</label><input type="email" name="email" /><br />
	<input type="hidden" name="role" value="user" /><br />
	<label>&nbsp;</label><input type="submit" />
	<p class="obl">*<span class="uppercase small"> = måste fyllas i</span></p>
</form>
