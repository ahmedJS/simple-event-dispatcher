<?php

use Psr\EventDispatcher\ListenerProviderInterface;

class ListenerProvider implements ListenerProviderInterface {
    public $listeners = array();

    function registerListener(callable $listener,string $type):void {
        $listener = array($type=>$listener);
        array_push($this->listeners,$listener);
    }

    function getListenersForEvent(object $event):iterable{
        foreach($this->listeners as $type => $listener ){
            if($event instanceof $)
        }
        return new ArrayIterator();
    }


}