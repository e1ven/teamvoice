<?php

	// tell the caller that they should listen to their howl
	// and play the recording back, using the URL that Twilio posted
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
	<Say>Thanks. Your email is being sent out.</Say>
	<Play><?php 

		// Open the file and erase the contents if any 
		$fp = fopen("recordings.txt", "a"); 

		// Write the data to the file 
		fwrite($fp, $_REQUEST['RecordingUrl']); 

		// Close the file 
		fclose($fp); 
		?>
	</Play>
	<Say>Goodbye.</Say>
</Response>
