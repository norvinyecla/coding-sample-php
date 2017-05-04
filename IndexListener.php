<?php
use Symfony\Component\EventDispatcher\Event;

class IndexListener 
{

    public function onIndexAction(Event $event)
    {
        echo "You called the index action!";
    }

    public function onIndexTest()
    {
        echo "Hello.";
    }
}
