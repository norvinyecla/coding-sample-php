<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/IndexListener.php';
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\GenericEvent;

$dispatcher = new EventDispatcher();
$listener = new IndexListener();
$event = new GenericEvent();

$dispatcher->addListener('site.index.action', array($listener, 'onIndexAction'));
