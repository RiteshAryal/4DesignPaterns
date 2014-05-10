<?php

include_once 'MyBooksPrototype.php';

class PhpBookPrototype extends MyBooksPrototype
{
    public function __construct() {
        $this->topic = 'PHP';
    }
    
    public function __clone() {
        ;
    }
}