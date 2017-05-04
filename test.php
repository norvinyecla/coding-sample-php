<?php
require __DIR__ . '/vendor/autoload.php';
use Symfony\Component\EventDispatcher\EventDispatcher;

$dispatcher = new EventDispatcher();

$listener = new IndexListener();
$dispatcher->addListener('site.index.action', array($listener, 'onIndexAction'));

