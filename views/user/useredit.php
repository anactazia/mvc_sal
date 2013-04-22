<h1>Användare</h1>
<hr />

<?php

echo '<p class="center">Här kan du ändra dina användaruppgifter:</p>';
echo '<form class="userdetails">';
echo '<label class="label">Användarnamn:</label><span class="details">' . $this->user['login'] . '</span><br />';
echo '<label class="label">Namn:</label><span class="details">' . $this->user['name'] . '</span><br />';
echo '<label class="label">Email:</label><span class="details">' . $this->user['email'] . '</span><br />';
echo '</form><hr />';

?>

<form class="formuser" method="post" action="<?php echo URL;?>user/usereditSave/<?php echo $this->user['id']; ?>">
	<label>Användarnamn</label><input type="text" required name="login" value="<?php echo $this->user['login']; ?>" /> *<br />
	<label>Lösenord</label><input type="text" required name="password"  /> *<br />
	<label>Namn</label><input type="text" name="name" value="<?php echo $this->user['name']; ?>" /><br />
	<label>E-Mail</label><input type="email" name="email" value="<?php echo $this->user['email']; ?>" /><br />
	<input type="hidden" name="role" value="<?php echo $this->user['role']; ?>" /><br />
	<label>&nbsp;</label><input type="submit" /><br />
	<p class="obl">*<span class="uppercase small"> = måste fyllas i</span></p>
	<?php echo '<a href="'.URL.'user/userdelete/'.$this->user['id'].'"><span class="delete">Ta bort konto</span></a>';
?>
	
</form>
