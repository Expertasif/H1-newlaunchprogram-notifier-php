# Description
This tiny script will let you know, when the new H1 public program just start.

# Installation
Configure the $sender and $receiver mailbox variables in the script.

Then just put the test.php, and the program.txt files on your web server, and set the some executing interval in the CRON (i use 5 minutes).
Since the script uses `mail()` function to send the message, it must be configured on the server.

# Credits
https://twitter.com/h1_sp1d3r
