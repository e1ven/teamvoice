#Teamvoice

Teamvoice is a simple application that makes it easy to send an audio note to your entire team.

Let's say you just got out of a meeting with Mr. Big, and you want to update the rest of the organization, to let them know what to expect.

You could try to type out a message on your software KB, or you could just call one number, and tell the whole team what happened while you ride back to the Airport.

The team will receive a recording of what you said, as well as a text transcription. You'll receive accolates for being a good communicator. 

Everyone Wins.


# Tech Stuff
Teamvoice is a simple twilio application, that runs in PHP.

It recognizes as many users as you add to people.php - 
If someone calls who's callerID matches the one on the list, they'll be immediately authenticated, and allowed to send mail.

If not, they can enter a simple PIN that you set in handle-pin.php.

Finally, make sure you set the email addresses in transcribe.php

# Legal Stuff

You'll need a twilio account, which is your responsibility to setup.

Please don't spam people, you'll make the Dragon cry.

The code is licensed under the MIT/X11 license.

-CPD
