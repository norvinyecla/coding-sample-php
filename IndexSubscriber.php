<?php 

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
require __DIR__ . '/CustomEvent.php';

class IndexSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        // return the subscribed events, their methods and priorities
        return array(
           CustomEvent::NAME => 'onIndexAction',
        );
    }

    public function onIndexAction(CustomEvent $event)
    {
        $date = new DateTime();
        echo "Event triggered at: " . $date->format('Y-m-d H:i:s') . "\n";
    }


}