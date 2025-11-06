<?php
require_once 'EmailNotification.php';
require_once 'SMSNotification.php';
require_once 'MailNotification.php';

$emailNotification = new EmailNotification(
    "Rubén Alcalde ha donat retroacció per la tasca S1-02. PHP basics",
    "userX@gmail.com"
);

$smsNotification = new SMSNotification(
    "Llamada Perdida", 
    "+34 612 345 678"
);

$mailNotification = new MailNotification(
    "Cita resultados Análisis", 
    "Rodrigo Lopez C. Santa Maria 123, 087541 Barcelona"
);

$emailNotification->send();
echo "<br>";
$smsNotification->send();
echo "<br>";
$mailNotification->send();
?>