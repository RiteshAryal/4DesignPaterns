<?php

class Menu extends MenuComponent
{
    private $menuComponent;
    private $name;
    private $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menu)
    {
        $this->menuComponent[] = $menu;
    }

    public function getChild($index)
    {
        return $this->menuComponent[$index];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function printMenu()
    {
        echo "\n" .
        $this->getName() .
        ", " . $this->getDescription() .
        "\n------------------------------\n";
        if (!empty($this->menuComponent)) {
            foreach ($this->menuComponent as $menu) {
                $menu->printMenu();
            }
        }
    }
}
