<?php
namespace PhpDesignPattern\factory\animal\animals;

class Cat implements Ianimal
{
    public function speak() {
        return 'Miaoo-Miaoo';
    }
}