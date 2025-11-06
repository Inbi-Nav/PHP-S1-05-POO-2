<?php
abstract class Notification {
    protected $message;
    protected $recipient;

    public function __construct($message, $recipient) {
        $this->message = $message;
        $this->recipient = $recipient;
    }
    
    abstract public function send(); 
}
?>