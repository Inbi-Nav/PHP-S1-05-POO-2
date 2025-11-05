<?php
abstract class Notificacion {
    protected $mensaje;
    protected $destinatario;

    public function __construct($mensaje, $destinatario) {
        $this->mensaje = $mensaje;
        $this->destinatario = $destinatario;
    }
    abstract public function enviar(); 
}

class NotificacionEmail extends Notificacion {
    public function enviar()
    {
        echo "<strong>Email a {$this->destinatario}:</strong> <span style=\"color:blue;\">{$this->mensaje}</span><br>";
    }
}

class NotificacionSMS extends Notificacion {
    public function enviar()
    {
        echo "<strong>SMS {$this->destinatario}:</strong> <span style=\"color:red;\">{$this->mensaje}</span><br>";
    }
}

class NotificacionCorreo extends Notificacion {
    public function enviar()
    {
        echo "<strong>Cita para {$this->destinatario}:</strong> <span style=\"color:blue;\">{$this->mensaje}</span><br>";
    }
}

function enviarNotificacion (Notificacion $notificacion) {
    $notificacion->enviar();
}
$NotificacionEmail = new NotificacionEmail("Rubén Alcalde ha donat retroacció per la tasca S1-02. PHP basics","userX@gmail.com");

$NotificationSms = new NotificacionSMS("Llamada Perdida", "+34 612 345 678");

$NotificationCorreo = new NotificacionCorreo("Cita resultados Análisis", "Rodrigo Lopez C. Santa Maria 123, 087541 Barcelona");

enviarNotificacion($NotificacionEmail);
echo "<br>";
enviarNotificacion($NotificationSms);
echo "<br>";
enviarNotificacion($NotificationCorreo);
?>