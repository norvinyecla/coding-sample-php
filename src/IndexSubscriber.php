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
    *
    **/
    public static function getSubscribedEvents()
    {
        return array(
           CustomEvent::NAME => 'onIndexAction',
        );
    }


    /**
    * Displays the date and time when the function was triggered then logs it into 
    * log.txt
    * 
    * @param: CustomEvent
    * @return: none
    *
    **/
    public function onIndexAction(CustomEvent $event)
    {
        $date = new \DateTime();
        $line = "Event triggered at: " . $date->format('Y-m-d H:i:s') . "\n";
        $file = fopen('log.txt', 'a');
        fwrite($file, $line);
        fclose($file);

        echo $line;
    }

}