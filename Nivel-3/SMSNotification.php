<?php
require_once 'Notification.php';

class SMSNotification extends Notification {
    public function send() {
        echo "<strong>SMS to {$this->recipient}:</strong> <span style=\"color:red;\">{$this->message}</span><br>";
    }
}
?>