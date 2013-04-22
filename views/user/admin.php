<h1>Admin</h1>
<hr />
<p class="center">Här kan du lägga till, ändra eller ta bort användare.</p>

<form method="post" action="<?php echo URL;?>user/create" class="formuser">
	<label>Användarnamn</label><input required type="text" name="login" /> *<br />
	<label>Lösenord</label><input required type="password" name="password" /> *<br />
	<label>Namn</label><input type="text" name="name" /><br />
	<label>E-Mail</label><input type="email" name="email" /><br />
	<label>Behörighet</label>
		<select name="role">
			<option value="user">Användare</option>
			<option value="admin">Administratör</option>
		</select><br />
	<label>&nbsp;</label><input type="submit" />
	<p class="obl">*<span class="uppercase small"> = måste fyllas i</span></p>
</form>

<hr />

<table class="tableuser">

<?php 		echo '<tr>';
		echo '<td><span class="uppercase small">Användarnamn</span></td>';
		echo '<td><span class="uppercase small">Namn</span></td>';
		echo '<td><span class="uppercase small">E-Mail</span></td>';
		echo '<td><span class="uppercase small">Behörighet</span></td>';
		echo '<td><span class="uppercase small">Ändra / Ta bort</span></td>'; 
		echo '</tr>';


 	foreach($this->userList as $key => $value) {
		
		echo '<tr>';
		echo '<td>' . $value['login'] . '</td>';
		echo '<td>' . $value['name'] . '</td>';
		echo '<td>' . $value['email'] . '</td>';
		echo '<td>' . $value['role'] . '</td>';
		echo '<td><a href="'.URL.'user/edit/'.$value['id'].'"><span class="uppercase small">Edit</span></a>' . ' / ' . ' 
		<a href="'.URL.'user/delete/'.$value['id'].'"><span class="uppercase small">Delete</span></a></td>';
		echo '</tr>';
	}
?>
</table>