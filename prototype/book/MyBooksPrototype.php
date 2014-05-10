<?php

abstract class MyBooksPrototype
{
    protected $title;
    protected $topic;
    
    abstract function __clone();
    
    public function getTitle() {
        return $this->title;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function getTopic() {
        return $this->topic;
    }
    
    public function setTopic($topic) {
        $this->topic = $topic;
    }
    
    public function __toString() {
        return "Title: " . $this->title . " Topic: " . $this->topic . "\n";
    }
}