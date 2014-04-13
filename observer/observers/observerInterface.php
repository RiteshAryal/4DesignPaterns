<?php

namespace observer\observers;

interface observerInterface
{
    public function update($temperature, $humidity, $pressure);
}