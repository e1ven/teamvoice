<?php       
   
   include 'people.php';

    if(!$name = $people[$_REQUEST['From']])
                {
                $needauth = 1;
                $name = "Some user";
                }

    if (!isset($_REQUEST['RecordingUrl'])) {
        echo "Must specify recording url";
        die;
    }
    
    if (!isset($_REQUEST['TranscriptionStatus'])) {
        echo "Must specify transcription status";
        die;
    }

 if (strtolower($_REQUEST['TranscriptionStatus']) != "completed") {
        $subject = "Error transcribing voicemail from ${_REQUEST['Caller']}";
        $body = "New have a new voicemail from ${_REQUEST['Caller']}\n\n";
        $body .= "Click this link to listen to the message:\n";
        $body .= $_REQUEST['RecordingUrl'];
    } else {
        $subject = "New TeamVoice message from " . $name;
        $body = $name . " has left a new TeamVoice for you.\n\n";
        $body .= "Click this link to listen to the message:\n";
        $body .= $_REQUEST['RecordingUrl'] . ".mp3";
	$body .= "\n\n\n--\n\n";

        $body .= "An automated Transcription (rough) follows:\n";
        $body .= $_REQUEST['TranscriptionText']."\n\n";
    }
    
    $headers = 'From: teamvoice@example.com' . "\r\n" .
        'X-Mailer: Twilio';
    mail("your-entire-team@example.com",$subject, $body, $headers);
?>    
