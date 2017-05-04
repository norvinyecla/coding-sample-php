<?php
require __DIR__ . '/vendor/autoload.php';
	
use Symfony\Component\EventDispatcher\EventDispatcher;
use Source\CustomEvent;
use Source\IndexSubscriber;

$dispatcher = new EventDispatcher();
$event = new CustomEvent();

$subscriber = new IndexSubscriber();
$dispatcher->addSubscriber($subscriber);

$dispatcher->dispatch('custom.event.called', $event);


