<?php

namespace observers;

interface observerInterface
{
    public function update($temperature, $humidity, $pressure);
}