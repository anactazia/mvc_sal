<h1>ADMIN</h1>
<hr />

<?php


echo '<p class="center">Här kan du ändra användarens uppgifter:</p>';
echo '<form class="userdetails">';
echo '<label class="label">Användarnamn:</label><span class="details">' . $this->user['login'] . '</span><br />';
echo '<label class="label">Namn:</label><span class="details">' . $this->user['name'] . '</span><br />';
echo '<label class="label">Email:</label><span class="details">' . $this->user['email'] . '</span><br />';
echo '<label class="label">Behörighet:</label><span class="details">' . $this->user['role'] . '</span><br />';
echo '</form><hr />';



?>

<form class="formuser" method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user['id']; ?>">
	<label>Användarnamn</label><input type="text" required name="login" value="<?php echo $this->user['login']; ?>" /> *<br />
	<label>Lösenord</label><input type="password" required name="password" /> *<br />
	<label>Namn</label><input type="text" name="name" value="<?php echo $this->user['name']; ?>" /><br />
	<label>E-Mail</label><input type="email" name="email" value="<?php echo $this->user['email']; ?>" /><br />
	<label>Behörighet</label>
		<select name="role" >
			<option value="user" <?php if($this->user['role'] == 'user') echo 'selected'; ?>>Användare</option>
			<option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected'; ?>>Administratör</option>
		</select><br />
	<label>&nbsp;</label><input type="submit" />
	<p class="obl">*<span class="uppercase small"> = måste fyllas i</span></p>
</form>