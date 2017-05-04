<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/IndexSubscriber.php';
use Symfony\Component\EventDispatcher\EventDispatcher;


$dispatcher = new EventDispatcher();
$subscriber = new IndexSubscriber();
$event = new CustomEvent();

$subscriber = new IndexSubscriber();
$dispatcher->addSubscriber($subscriber);
$dispatcher->dispatch('custom.event.called', $event);


