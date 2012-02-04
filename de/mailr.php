<?php

	$text = '';
	foreach($_POST as $key => $value) {
		$text .= $key.': '.$value."\r\n";
	}
	
	echo $text;
	
	  $headers = 'From: webmaster@easlogistics.de' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	
	mail('ms@phace.org', 'Anfrage', $text, $headers);
#	mail('info@easlogistics.de', 'Anfrage', $text, $headers);

?>
