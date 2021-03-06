<?php
/**
 * Aurora - A HTTP Application Server of PHP Script
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/aurora
 * @license https://opensource.org/licenses/MIT
 */

namespace Aurora\Event;

abstract class EventAcceptor implements EventAcceptable
{
    use EventAccept;

    /**
     * @var \Aurora\Event\Dispatcher
     */
    protected $event;

    /**
     * @var object|null
     */
    protected $bind;

    abstract public function register();

    public function __construct(Dispatcher $event, $bind = null)
    {
        $this->event = $event;
        $this->bind = $bind;
    }

    /**
     * @return object|null
     */
    public function getBind()
    {
        return $this->bind;
    }

    /**
     * @return \Aurora\Event\Dispatcher
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param object $bind
     */
    public function setBind($bind)
    {
        $this->bind = $bind;
    }

    /**
     * @param \Aurora\Event\Dispatcher $event
     */
    public function setEvent(Dispatcher $event)
    {
        $this->event = $event;
    }
}