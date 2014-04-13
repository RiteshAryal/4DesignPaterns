<?php

namespace observer\subject;

use observer\observers\observerInterface;

interface subjectInterface
{
    public function registerObserver(observerInterface $o);
    public function removeObserver(observerInterface $o);
    public function notifyObservers();
}