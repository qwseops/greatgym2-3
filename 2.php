<?php
	$referer = $_SERVER['HTTP_REFERER'];
	if($referer == "")
	{
		echo "<meta http-equiv=\"refresh\" content=\"0;url=https://www.google.com">";	
	}
?>