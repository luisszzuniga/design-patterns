<?php

interface Carrier {
    public function send();
}

class Mail implements Carrier {
    
    public function send()
    {
        echo "envoi par mail";
    }
}

class Twitter implements Carrier {
    
    public function send()
    {
        echo "envoi par Twitter";
    }
}

class Message {
    protected string $contenu;
    protected Carrier $sender;
    public
    
    public function send() {
        return $this->sender->send();
    }
}