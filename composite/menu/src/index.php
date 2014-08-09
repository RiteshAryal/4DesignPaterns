<?php

/**
 * The Composite Pattern allows us to compose objects into tree structures to represent part-whole hierarchies.
 * Composite lets clients treat individual objects and compositions of objects uniformly.
 * 
 * 
 * Please see the Composite Patter Diagram to understand it more properly
 */
function __autoload($class)
{
    $fileName =  $class . '.php';
    //$fileName =  __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    include ($fileName);
}

$cakeMenu = new Menu("Cake House Menu", "Breakfast");
$lunchMenu = new Menu("Lunch Menu", "Lunch");
$dinnerMenu = new Menu("Dinner Menu", "Dinner");
$dessertMenu = new Menu("Dessert Menu", "Dessert");

$lunchMenu->add(new MenuItem("Rice", "Plain Rice yummi", true, 1.10));
$lunchMenu->add(new MenuItem("Daal", "Rahar Gravvy", true, 2.10));

$dessertMenu->add(new MenuItem("Rasbari", "Yummi Yummi rasbarri", true, 1.98));
$dessertMenu->add(new MenuItem("Curd", "Nice home made, low fat", true, 0.98));

$dinnerMenu->add(new MenuItem("Pasta", "Spaghetti with Chicket Sauce, and a slice of egg", false, 3.48));
$dinnerMenu->add(new MenuItem("Rotti", "Wheat White Item", true, 0.99));
$dinnerMenu->add(new MenuItem("Curry", "Mix Veggi with slice of Pappad", true, 3.99));
$dinnerMenu->add(new MenuItem("Chicket Curry", "Slice of Chicken", false, 4.99));
$dinnerMenu->add($dessertMenu);

$allMenu = new Menu("Main Menu", "All Menu Combined");
$allMenu->add($cakeMenu);
$allMenu->add($lunchMenu);
$allMenu->add($dinnerMenu);






$waitress = new Waitress($allMenu);
$allMenu->printMenu();
echo "\n";

//print veggi menu
echo 'Veggi Menu: ' . $waitress->printVeggitarianMenu();


