<?php
	// if the caller pressed anything but 1 or 2 send them back
	if( strlen($_REQUEST['Digits']) != 5) {
		echo "<Response>";
		echo "<Say> I'm sorry, that PIN is not recognized.</Say>";
		echo "</Response>";
		die;
	}
	
	// otherwise, if 1 was pressed we Dial 3105551212. If 2 
	// we make an audio recording up to 30 seconds long.
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	if ($_REQUEST['Digits'] == '12345')
		{
		echo "<Response>";
		echo "<Say> PIN Accepted. Thank you.</Say>";
                include 'record.php';
	        echo "</Response>";
		}
	else 
		{
                header("Location: root.php");
                die;
		}
?>
