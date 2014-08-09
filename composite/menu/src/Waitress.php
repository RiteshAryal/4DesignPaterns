<?php

class Waitress
{
    private $menuComponents;

    public function __construct($menu)
    {
        $this->menuComponents[] = $menu;
    }

    public function printMenu()
    {
        foreach ($this->menuComponents as $menu) {
            $menu->printMenu();
        }
    }
    
    public function printVeggitarianMenu()
    {
        return 'todo';
    }
}
