<?php

namespace PhpDesignPattern\factory\animal\animals;

class Dog implements Ianimal
{
    public function speak() {
        return 'Vaaooo-Vaaooo';
    }
}