<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-load.php");

//$postData = [];
//$postData['toTop'] = true;

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//$postData['cells'] = [
//    ["columnId" => 3950102376828804, "value" => 'Kontaktų forma'],
//    ["columnId" => 8453702004199300, "value" => $name],
//    ["columnId" => 290927679590276, "value" => $email],
//    ["columnId" => 4794527306960772, "value" => $phone],
//];

//$ch2 = curl_init();
//curl_setopt_array($ch2, array(
//    CURLOPT_URL => 'https://api.smartsheet.com/2.0/sheets/4868030542598020/rows',
//    CURLOPT_POST => TRUE,
//    CURLOPT_HTTPHEADER => array(
//        'Authorization: Bearer kax4l5lz5eu444we3m9jvfsrtk',
//        'Content-Type: application/json'
//    ),
//    CURLOPT_POSTFIELDS => json_encode($postData)
//));
//$response2 = curl_exec($ch2);

$to = 'paulius@arstikys.lt';
$subject = 'Arstikys.lt: Kontaktų forma';

$message = '
<html>
<head>
    <title>' . $subject . '</title>
</head>
<body>
<p><b>Vardas Pavardė:</b> ' . $name . '</p>
<p><b>El. paštas :</b> ' . $email . '</p>
<p><b>Tel. nr:</b> ' . $phone . '</p>
<p><b>Žinutė:</b> ' . $message . '</p>
</body>
</html>
';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'From: Arstikys <info@arstikys.lt>';

wp_mail($to, $subject, $message, implode("\r\n", $headers));

