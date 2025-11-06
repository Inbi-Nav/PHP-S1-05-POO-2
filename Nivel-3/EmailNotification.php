<?php
require_once 'Notification.php';

class EmailNotification extends Notification {
    public function send() {
        echo "<strong>Email to {$this->recipient}:</strong> <span style=\"color:blue;\">{$this->message}</span><br>";
    }
}
?>