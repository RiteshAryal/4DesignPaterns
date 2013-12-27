<?php


//Actual Strategy Implementation
$mycd = new CDusesStrategy('Chhekyoo Chhekyoo', 'Nepathya');

//xml output
$mycd->setStrategry(new CDasXMLStrategy());
echo '<pre>'; print_r($mycd->get()); echo '</pre>';

//json output
$mycd->setStrategry(new CDasJSONStrategy());
echo '<pre>'; print_r($mycd->get()); echo '</pre>';

//array output
$mycd->setStrategry(new CDasArray());
echo '<pre>'; print_r($mycd->get()); echo '</pre>';
