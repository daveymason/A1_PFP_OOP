<?php

// Extending the parent class so it was necessary to pass a value through the constructor upon initilisation. 
class Profession extends Hero 
{
	protected $profession;
	
	public function __construct($profession)
	{
		$this->profession=$profession;
	}
	
	// Using if statements to fix the "a assassin" problem.
	public function sayProfession()
	{
	if($this->profession=="assassin")
	return "You are an $this->profession.";
		
	if($this->profession=="beserker" || $this->profession=="survivalist" || $this->profession=="warrior")	
	return "You are a $this->profession.";
	
	}
	
}


?>

