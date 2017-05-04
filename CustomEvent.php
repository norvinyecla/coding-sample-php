<?php

use Symfony\Component\EventDispatcher\GenericEvent;

class CustomEvent extends GenericEvent
{
	const NAME = 'custom.event.called';
}
