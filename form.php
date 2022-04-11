<?php

$name=$_POST['nombre'];
$mail=$_POST['Email'];
$mensaje=$_POST['textarea'];

$para='romancinalli@hotmail.com';
$asunto='Este mail fue enviado desde la web';

mail($para, $asunto, utf8_decode($mensaje));

header('location:index.html');





















?>
