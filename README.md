# Description
This tiny script will let you know, when the new H1 public program just start.


# Installation
Configure the $sender and $receiver mailbox variables in the script.

Then just put the test.php, and the program.txt files on your web server, and set the some executing interval in the CRON (i use 5 minutes).
Since the script uses `mail()` function to send the message, it must be configured on the server.

![](https://lh5.googleusercontent.com/M-SeCYH3Umzl_otQvc5e4eEf-zy_qkUYiD5XJZ9BZScEocD9-kMmhOoVG8Vg2OFRvbl5Rxp4pXB4nvY=w1920-h974)

Important: the query URL based on the H1 seacrh filters, and will notify only about new programs with `query=bounties`. It means that if you want to receive the notifications about program launch which not offer bounties - you should change the query URL in the script to the `query=type%3Ahackerone`, or modify it to support both types.


# TODO:
Support the BugCrowd program launch notificaction
