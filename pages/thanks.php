<?php
	$log = fopen(dirname(__FILE__)."/../log/requirements.log", 'a');
	fwrite($log, "{$_GET['who']}|{$_GET['wish']}|{$_GET['purpose']}\n");
	fclose($log);
?>
<h2>Thanks</h2>
<center>
	<table border=0>
		<tr>
			<td>Your wishes will be <br/>considered... maybe</td>
			<td><img src=img/genius.png /></td>
		</tr>
	</table>
</center>
