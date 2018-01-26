<?php
/* In this class I used setters and getters to deal with the data.
 I originally had these variables to be called through the constructor
 but I wanted to use more than one class and more than one method to deal with data to show that I understand OOP on a basic level. 
 I didn't bother with the magic __GET and __SET methods because I saw on the internet that this isn't best practice.
*/
 class Allegiance
{
// Declare the variables.
  private $ally;
  private $gender;
  private $weapon;
  /* Daycent use of encapsulation to keep the data hidden.
 */
	public function setAlly($ally)
	{
		$this->ally=$ally;
	}	
	
	public function setGender($gender)
	{
		$this->gender=$gender;
	}
	
	public function setWeapon($weapon)
	{
		$this->weapon=$weapon;
	}


// Functions to send the data to the user. 
	public function getAlly()
	{
		echo "You have pledged allegiance with the $this->ally army.";
		echo  nl2br("\n");
	}
	
	public function getWeapon()
	{
		echo "You slaughter enemies with a $this->weapon.";
		echo  nl2br("\n");
	}
//The if statements here will handle the data from the user and send back an appropriate picture
	
	public function getHero()
	{
		if($this->gender=="male" && $this->weapon=="bow" && $this->ally=="Red")
		{
			echo  nl2br("\n");
			echo "<img src='RedMaleBow.jpg' title='RedMaleBow' alt='Error' />";
		}
	
		if($this->gender=="male" && $this->weapon=="bow" && $this->ally=="Blue")
		{
			echo  nl2br("\n");
			echo "<img src='BlueMaleBow.jpg' title='BlueMaleBow' alt='Error' />";
		}
		
		if($this->gender=="male" && $this->weapon=="sword" && $this->ally=="Red")
		{
			echo  nl2br("\n");
			echo "<img src='RedMaleSword.jpg' title='RedMaleSword' alt='Error' />";
		}
		
		if($this->gender=="male" && $this->weapon=="sword" && $this->ally=="Blue")
		{
			echo  nl2br("\n");
			echo "<img src='BlueMaleSword.jpg' title='BlueMaleSword' alt='Error' />";
		}
		
		if($this->gender=="female" && $this->weapon=="bow" && $this->ally=="Red")
		{
			echo  nl2br("\n");
			echo "<img src='RedFemaleBow.jpg' title='RedFemaleBow' alt='Error' />";
		}
		
		if($this->gender=="female" && $this->weapon=="bow" && $this->ally=="Blue")
		{
			echo  nl2br("\n");
			echo "<img src='BlueFemaleBow.jpg' title='BlueFemaleBow' alt='Error' />";
		}
		
		if($this->gender=="female" && $this->weapon=="sword" && $this->ally=="Red")
		{
			echo  nl2br("\n");
			echo "<img src='RedFemaleSword.jpg' title='RedFemaleSword' alt='Error' />";
		}
		
		if($this->gender=="female" && $this->weapon=="sword" && $this->ally=="Blue")
		{
			echo  nl2br("\n");
			echo "<img src='BlueFemaleSword.jpg' title='BlueFemaleSword' alt='Error' />";
		}
	}
}
?>