<?php
$servernimi='localhost';
$kasutajanimi='dariaevtina';
$parool='12345parool';
$admebaasinimi='dariaevtina';
$yhendus=new mysqli($servernimi,$kasutajanimi,$parool,$admebaasinimi);
$yhendus->set_charset('utf8');
//PHP lõpumärki pole vaja, et kogemata midagi välja ei trükitaks
?>
