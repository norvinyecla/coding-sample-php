<?php
use Symfony\Component\EventDispatcher\Event;

class IndexListener 
{

    public function onIndexAction(Event $event)
    {
    	$date = new DateTime();
        echo "Event triggered at: " . $date->format('Y-m-d H:i:s') . "\n";
    }

    public function onIndexTest()
    {
        echo "Hello.";
    }
}
