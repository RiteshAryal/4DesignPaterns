<?php
//error_reporting(E_ALL);
//ini_set('error_reporting', E_ALL);

namespace strategy\CD;

/*
 * The Strategy Design Pattern helps architect an object that can make use of 
 * algorithms in other objects on demand in lieu of containing the logic itself.
 */
class CdStrategy
{
    /**
     * CD Title
     * @var string
     */
    private $title;
    
    /**
     * The Music Band
     * @var string
     */
    private $band;
    
    /*
     * The Object of different type ie. Array, Json or XML which been chosed on demand
     * @var object
     */
    protected $_strategy;
    
    public function __construct($title, $band) {
        $this->title = $title;
        $this->band = $band;
    }
    /**
     * Returns CD's Title
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }
    
    /**
     * Returns CD's Band
     * @return string
     */
    public function getBand() {
        return $this->band;
    }
    
    /**
     * Sets Object of type Arrary or JSON or XML
     *
     */
    public function setStrategry($st) {
        $this->_strategy = $st;
    }
    
     /**
     * Gets Object of type Arrary or JSON or XML
     * @param object
     */
    public function get() {
        return $this->_strategy->get($this);
    }
}

