<?

include ("Hero.php");
include ("Allegiance.php");

$hero=new Hero($_POST['name']);
$hero->sayName();

$allegiance=new Allegiance();

$allegiance->setAlly($_POST['ally']);
$allegiance->setWeapon($_POST['weapon']);
$allegiance->setGender($_POST['gender']);

$allegiance->getAlly();
$allegiance->getWeapon();
$allegiance->getGender();

$allegiance->showAlly();
$allegiance->showWeapon();
$allegiance->showHero();


?>