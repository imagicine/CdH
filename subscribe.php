<?php
$email = $_POST['email'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$formcontent="Email inscrito: $email";
$recipient = "imagicine@gmail.com";
$subject = "Alguem fez uma Carta | iMagiCine - Carta de Hogwarts";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>