<h2>Backlog</h2>
<?php
	echo '<br/>';
	$num = 0;
	foreach (split("\n", file_get_contents(dirname(__FILE__)."/../log/requirements.log")) as $requirement) {
		$num++;
		if (trim($requirement) != "") {
			list($who, $wish, $purpose) = split("\|", $requirement);
			echo "$num. <b>As a</b> $who, <b>I want</b> $wish <b>so I can</b> $purpose.<br/>";
		}
	}
	echo '<br/>';
?>
