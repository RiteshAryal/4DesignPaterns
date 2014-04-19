<?php

/**
 * provides one and only one instance of a class (globally)
 * It is often use with Factory
 * Examples are: logging, cache, config settings, etc.
 * 
 * 3 Rules to follow
 * 1. private static member
 * 2. private constructor (ie. outside class cannot instantiate)
 * 3. static public method to return singleton object
 * 
 * GOF says: Insure the class has only one instance and provide a global point of access to it.
 * Basically, Abstract Factory, Builder and Prototype can use Singleton in their implementation.
 */

class Singleton
{
    //#1
    private static $_instance=null;
    
    //#2
    private function __construct()
    {

    }

    private function __clone()
    {

    }

    //#3
    public static function getInstance()
    {
        if (null === self::$_instance) {
            //echo 'created first time';
            self::$_instance = new singleton();
        }
        //echo 'used created one';
        return self::$_instance;
    }
}
