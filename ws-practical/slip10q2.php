<?php
$xml = new SimpleXMLElement('<employees/>');

$employee1 = $xml -> addChild('employee');
$employee1 -> addChild('EmpoyeeId' , '1');
$employee1 -> addChild('Name' , 'Soham');
$employee1 -> addChild('Position' , 'Boss');
$employee1 -> addChild('Department' , 'Computer Science');
$employee1 -> addChild('DateofJoining' , '13 jan 2005');

$employee2 = $xml -> addChild('employee');
$employee2 -> addChild('EmpoyeeId' , '2');
$employee2 -> addChild('Name' , 'Bairavi');
$employee2 -> addChild('Position' , 'CEO');
$employee2 -> addChild('Department' , 'Computer Science');
$employee2 -> addChild('date_of_joining' , '22 june 2005');

$employee3 = $xml -> addChild('employee');
$employee3 -> addChild('EmpoyeeId' , '3');
$employee3 -> addChild('Name' , 'Mansi');
$employee3 -> addChild('Position' , 'CMO');
$employee3 -> addChild('Department' , 'Sales');
$employee3 -> addChild('date_of_joining' , '4 Dec 2005');

$employee4 = $xml -> addChild('employee');
$employee4 -> addChild('EmpoyeeId' , '4');
$employee4 -> addChild('Name' , 'Durgesh');
$employee4 -> addChild('Position' , 'Sales Associate');
$employee4 -> addChild('Department' , 'Marketing');
$employee4 -> addChild('date_of_joining' , '12 march 2005');

$employee5 = $xml -> addChild('employee');
$employee5 -> addChild('EmpoyeeId' , '5');
$employee5 -> addChild('Name' , 'Upendra');
$employee5 -> addChild('Position' , 'Boss2');
$employee5 -> addChild('Department' , 'Computer Science');
$employee5 -> addChild('date_of_joining' , '4 feb 2005');

$xml -> asXML('Employees.xml');

echo "Your File is created and Downloaded";
?>