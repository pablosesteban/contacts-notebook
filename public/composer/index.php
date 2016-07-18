<?php

//Al utilizar composer para descargar la libreria de PHPQRCode, esta linea carga todas las clases necesarias de esta libreria
require_once 'vendor/autoload.php';

$name = "Pablo";
$lastName = "Santamarta Esteban";
$phone = "625628393";
$address = "C\ la Fruta, Nº14, 2º dcha";
$email = "pablo@gmail.com";

//Para la creacion de tarjetas tiene que tener este formato VCARD de tarjetas de visita
$card = "BEGIN:VCARD" . "\n";
$card .= "N:" . $lastName . ";" . $name . "\n";
$card .= "TEL;HOME:" . $phone . "\n";
$card .= "ADR;HOME:;;" . $address . "\n";
$card .= "EMAIL:" . $email . "\n";
$card .= "END:VCARD";

// \PHPQRCode: namespace
// \QRcode: class
// ::png method
\PHPQRCode\QRcode::png($card, "qrcode.png", "L", 4, 2);

echo "<img src='qrcode.png' />";

?>
