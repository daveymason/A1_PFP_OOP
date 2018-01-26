<?php
// Class declaration
 class Hero
{
// Use of private access modifier to ensure other classes can't modify the member variables
  private $name;
/*
Name argument that would be called as a constructor parameter when object is created.
*/
	public function __construct($name)
	{
		$this->name =$name;
	}	
// Function to report the Hero name back to the user 
    public function sayName()
	{
		echo "You are the legendary $this->name!";
		echo  nl2br("\n");
	}
} 
?>