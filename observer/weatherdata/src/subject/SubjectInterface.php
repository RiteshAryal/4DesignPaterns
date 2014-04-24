<?php
/**
 * Subject Interface
 * Objects use this interface to register as observers and
 * also to remove themselves from being observers.
 * And each subject can have many observers.
 */
namespace subject;

use observers\ObserverInterface;

interface SubjectInterface
{
    public function registerObserver(ObserverInterface $o);
    public function removeObserver(ObserverInterface $o);
    public function notifyObservers();
}
