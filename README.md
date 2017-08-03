# Description
This tiny script will let you know, when the new H1 public program just start.
Important: the query URL based on the H1 seacrh filters, and will notify only about new programs with `query=bounties`. It means that if you want to receive the notifications about program launch which not offer bounties - you should change the query URL in the script to the `query=type%3Ahackerone`, or modify it to support both types.

# Installation
Configure the $sender and $receiver mailbox variables in the script.

Then just put the test.php, and the program.txt files on your web server, and set the some executing interval in the CRON (i use 5 minutes).
Since the script uses `mail()` function to send the message, it must be configured on the server.

![alt text](https://lh4.googleusercontent.com/bHbcFdIi_nyYHI_OSsvurZqBMfvyIMe_wUBivd36Mvs1lwCU_ovqclox45DTX9vVCVx-L8JLWUTOLns=w1920-h974)
