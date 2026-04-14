<?php
$xml = new SimpleXMLElement('<student/>');

$student1 = $xml->addChild("student");
$student1 -> addChild("id","41");
$student1 -> addChild("name","soham");
$student1 -> addChild("age","22");
$student1 -> addChild("gender","male");
$student1 -> addChild("program","CDS");

$student2 = $xml->addChild("student");
$student2 -> addChild("id","36");
$student2 -> addChild("name","bhairavi");
$student2 -> addChild("age","22");
$student2 -> addChild("gender","female");
$student2 -> addChild("program","CDS");

$student3 = $xml->addChild("student");
$student3 -> addChild("id","11");
$student3 -> addChild("name","durgesh");
$student3 -> addChild("age","22");
$student3 -> addChild("gender","male");
$student3 -> addChild("program","CDS");

$student4 = $xml->addChild("student");
$student4 -> addChild("id","37");
$student4 -> addChild("name","mansi");
$student4 -> addChild("age","22");
$student4 -> addChild("gender","female");
$student4 -> addChild("program","CDS");

$student5 = $xml->addChild("student");
$student5 -> addChild("id","10");
$student5 -> addChild("name","upendra");
$student5 -> addChild("age","22");
$student5 -> addChild("gender","male");
$student5 -> addChild("program","CDS");

$xml -> asXML('student.xml');

echo "Hello Guys , Your Xml file is ready and Saved as student.xml";
?>