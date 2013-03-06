<?php


include "qrlib.php";
// create a QR Code with this text and display it
QRcode::png("1234567", "prueba.png", "H", 4, 4);
?>