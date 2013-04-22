<h1>Gästbok: Edit</h1>
<hr />

<?php

echo '<table class="tableedit">';
echo '<tr><td colspan="2"><span class="uppercase">Meddelandet du vill ändra:</span><hr /></td></tr>';
echo '<tr><td class="td1"><span class="tgtxt">Ämne:</span></td><td class="td2"><span class="td3">' . $this->guestbook[1] . '</span></td></tr>';
echo '<tr><td class="td1"><span class="tgtxt">Meddelande:</span></td><td class="td2"><span class="td3">' . $this->guestbook[2] . '</span></td></tr>';
echo '<tr><td class="td1"><span class="tgtxt">Skribent:</span></td><td class="td2"><span class="td3">' . $this->guestbook[3] . '</span></td></tr>';
echo '</table><hr />';
?>

<form class="formguestedit" method="post" action="<?php echo URL;?>guestbook/editSave/<?php echo $this->guestbook['id']; ?>">
	<label><span class="uppercase">Ämne</span></label><input type="text" name="topic" value="<?php echo $this->guestbook['topic']; ?>" /><br />
	<label><span class="uppercase">Meddelande</span></label><input type="text" name="message" /><br />
	<label><span class="uppercase">Skribent</span></label><input type="text" name="writer" /><br />
		
	<label>&nbsp;</label><input type="submit" />
</form>