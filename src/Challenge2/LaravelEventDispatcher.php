<?php

namespace Interview\Challenge2;

//use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Events\Dispatcher;

class LaravelEventDispatcher implements EventDispatcherInterface
{
    private Dispatcher $dispatcher;

    public function dispatch(object $event)
    {
        $this->dispatcher->dispatch($event);
    }

    public function addListener(string $event, \Closure $listener)
    {
        $this->dispatcher = new Dispatcher();
        $this->dispatcher->listen($event, $listener);
    }
}