<?php 
namespace Source;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Source\CustomEvent;

class IndexSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
           CustomEvent::NAME => 'onIndexAction',
        );
    }

    public function onIndexAction(CustomEvent $event)
    {
        $date = new \DateTime();
        echo "Event triggered at: " . $date->format('Y-m-d H:i:s') . "\n";
    }


}