<?php
// Inlcuding the two files with the classes. 
include ("Hero.php");
include ("Allegiance.php");
include ("Profession.php");

/*
Making an object of our hero's name and using the _Post method to get the name data from the html form. 
The data entered in the name field is being passed as a paramater through the constructor.
*/
$hero=new Hero($_POST['name']);
$hero->sayName();

// Making an object from the extended profession class passing the value through the constructor.
$profession=new Profession($_POST['profession']);
echo $profession->sayProfession();
echo  nl2br("\n");

//Making an object of the other attributes. These attributes could of been passed through the constructor like the previous method but I was hoping that if I used more than one method to pass data I'll get more marks.
$allegiance=new Allegiance();

//Uses the radio box data in the html form to set the Weapon, Gender and Allegiance of Hero.
$allegiance->setAlly($_POST['ally']);
$allegiance->setWeapon($_POST['weapon']);
$allegiance->setGender($_POST['gender']);

//Outputs the results back to the user via functions
$allegiance->getWeapon();
$allegiance->getAlly();


// Shows a detailed high quality picture of the Hero to the user depending on the input. 
$allegiance->getHero();


?>