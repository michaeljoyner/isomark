<?php
/**
 * Created by PhpStorm.
 * User: carol
 * Date: 2/19/15
 * Time: 5:05 PM
 */

namespace App\Handlers\Events;


use ReflectionClass;

abstract class EventHandler {

    /**
     * @param $event
     * @return mixed
     */
    public function handle($event)
    {
        $eventName = $this->getEventName($event);
        if ($this->listenerIsRegistered($eventName))
        {
            return call_user_func([$this, 'when' . $eventName], $event);
        }
    }
    /**
     * @param $eventName
     * @internal param $method
     * @return bool
     */
    protected function listenerIsRegistered($eventName)
    {
        $method = "when{$eventName}";
        return method_exists($this, $method);
    }
    /**
     * @param $event
     * @return string
     */
    protected function getEventName($event)
    {
        return (new ReflectionClass($event))->getShortName();
    }

}