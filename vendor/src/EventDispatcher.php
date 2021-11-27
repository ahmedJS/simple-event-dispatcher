<?php

use Psr\EventDispatcher\ListenerProviderInterface;

class EventDispatcher implements Psr\EventDispatcher\EventDispatcherInterface {
    public ListenerProviderInterface $listenerProvider;

    function __construct( ListenerProviderInterface  $listenerProvider)
    {
        $this->listenerProvider = $listenerProvider;
    }
    function dispatch($event){
        $listeners = $this->listenerProvider->getListenersForEvent($event);
        foreach($listeners as $listener){
            $listener($event);
        }
    }
}