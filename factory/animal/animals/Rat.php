<?php

namespace PhpDesignPattern\factory\animal\animals;

class Rat implements Ianimal
{
    public function speak() {
        return 'Chiuuu-Chiuuu';
    }
}