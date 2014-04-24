<?php
/**
 * Observer Interface
 * All potential observers need to implement the Observer interface.
 * This interface just has one method, update(), that gets called
 * when the Subject's state changes.
 *
 */
namespace observers;

interface ObserverInterface
{
    public function update($temperature, $humidity, $pressure);
}
