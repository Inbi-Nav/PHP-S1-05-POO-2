<?php
require_once 'Notification.php';

class MailNotification extends Notification {
    public function send() {
        echo "<strong>Mail to {$this->recipient}:</strong> <span style=\"color:green;\">{$this->message}</span><br>";
    }
}
?>