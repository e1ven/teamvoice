<?php

	include 'people.php';	
	// if the caller is known, then greet them by name
	// otherwise, consider them just anohter monkey
	$needauth = 0;
	if(!$name = $people[$_REQUEST['From']])
		{
		$needauth = 1;
		$name = "";
		}

        header("content-type: text/xml");
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	echo "<Response>";
	echo "<Say> Hello " . $name . ", and welcome to TeamVoice.</Say>";	
	// now greet the caller
	if ( $needauth == 1 )
		{
		echo "<Say>Since TeamVoice does not recognize your Phone Number, you will need to authenticate.</Say>";
		echo "<Say>Please enter your PIN.</Say>";
		echo "<Gather numDigits='5' action='handle-pin.php' method='post'>";
		echo "<Say> </Say>";
		echo "</Gather>";

		}
	else
		{
		include 'record.php';
		}

echo "</Response>";

?>
