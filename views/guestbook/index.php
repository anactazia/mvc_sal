<h1>Gästbok</h1>
<hr />

<form method="post" action="<?php echo URL;?>guestbook/create" class="formguest">
	<label><span class="uppercase">Ämne</span></label><input type="text" required name="topic" /><br />
	<label><span class="uppercase">Meddelande</span></label><input type="text" required name="message" /><br />
	<label><span class="uppercase">Skribent</span></label><input type="text" required name="writer" /><br />
		
	<label>&nbsp;</label><input type="submit" />
</form>

<hr />

<?php

	foreach($this->guestbookList as $key => $value) {
		
echo '<table class="tableguest">';		
echo '<tr><td class="td1"><span class="tgtxt">Ämne:</span></td><td class="td2"><span class="td3">' . $value['topic'] . '</span></td></tr>';
echo '<tr><td class="td1"><span class="tgtxt">Meddelande:</span></td><td class="td2"><span class="td3">' . $value['message'] . '</span></td></tr>';
echo '<tr><td class="td1"><span class="tgtxt">Skribent:</span></td><td class="td2"><span class="td3">' . $value['writer'] . '</span></td></tr>';
echo '<tr><td class="td1"><a href="'.URL.'guestbook/edit/'.$value['id'].'"><span class="uppercase small">Edit</span></a>';
echo ' ' . '<a href="'.URL.'guestbook/delete/'.$value['id'].'"><span class="uppercase small">Delete</span></a></td></tr>';
echo '</table>';	
		
	}
?>
