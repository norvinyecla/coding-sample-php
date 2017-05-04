<?php 
namespace Source;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Source\CustomEvent;

class IndexSubscriber implements EventSubscriberInterface
{
    /**
    * Returns list of events this subscriber is subscribed to.
    * @param: none
    * @return: array
    **/
    public static function getSubscribedEvents()
    {
        return array(
           CustomEvent::NAME => 'onIndexAction',
        );
    }


    /**
    * Prints the time everytime it is triggered.
    * @param: CustomEvent
    * @return: none
    *
    **/
    public function onIndexAction(CustomEvent $event)
    {
        $date = new \DateTime();
        echo "Event triggered at: " . $date->format('Y-m-d H:i:s') . "\n";
    }

}