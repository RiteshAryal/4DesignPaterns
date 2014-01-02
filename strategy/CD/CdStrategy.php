<?php
//error_reporting(E_ALL);
//ini_set('error_reporting', E_ALL);

namespace strategy\CD;

/**
 * A CD class which has additional properties $_strategy which actually decides
 * the output of this object at run time
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
    
    /**
     * The Object of different type ie. Array, Json or XML which been chosed on demand
     * @var object
     */
    protected $_strategy;
    
    /**
     * Sets the properties
     * @param type $title
     * @param type $band
     */
    public function __construct($title, $band) {
        if (empty($title) || empty($band)) {
            throw new \Exception("Missing values for title or band");
        }
        $this->title = (string)$title;
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
     * @param object
     *
     */
    public function setStrategry($st) {
        $this->_strategy = $st;
    }
    
     /**
     * Gets Object of type Arrary or JSON or XML
     * @return (string) its variable ie. based on strategry used (xml or array or json)
     */
    public function get() {
        return $this->_strategy->get($this);
    }
}

