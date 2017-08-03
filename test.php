<?
$receiver="yourmail@site.com";
$sender="sender@domain.com"; //ideally the existing mailbox on your domain, where you host this script, the message will not go to the spam in this case

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://hackerone.com/programs/search?query=bounties%3Ayes&sort=published_at%3Adescending&page=1');
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept-Language: ru,en-US;q=0.8,en;q=0.6,uk;q=0.4','Accept: application/json, text/javascript, */*; q=0.01', 'X-Requested-With: XMLHttpRequest', 'Referer: https://hackerone.com/directory?query=bounties%3Ayes&sort=published_at%3Adescending&page=1', 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36'));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl, CURLOPT_TIMEOUT, 60);
$string=curl_exec($curl);
$pos=strpos($string,"name");
$pos2=strpos($string,"\"",$pos+7);
$prev=file_get_contents(dirname(__FILE__)."/program.txt");
$name=substr($string,$pos+7,$pos2-$pos-7);
if ($name!==$prev)
{
	mail($receiver, 'New Hackerone Program', "Go-go-go! New program - ".$name,'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charset=utf-8'."\r\n"."From: ".$sender."\r\n"."Reply-To: ".$sender."\r\n"."X-Mailer: PHP/" . phpversion());
	file_put_contents(dirname(__FILE__)."/".$name.".txt",$string,FILE_APPEND);
	file_put_contents(dirname(__FILE__)."/program.txt",$name);
}
curl_close($curl);
?>