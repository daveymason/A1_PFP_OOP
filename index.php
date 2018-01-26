<!DOCTYPE html>
<html>
<!-- All of this code was learned using w3school.com, shawacademy.com and the two apps Codemurai and Sololearn.-->
<head>
<Title> Create Character </title>
</head>
<body>

<h1> Create your character!</h1>

<form method="post" action="Output.php">
What is your character's name?
<br> <input type="text" name="name" required> <br>

Choose your gender!<br>
<input type="radio" checked="checked" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male <br>

Choose your weapon! <br>
<input type="radio" checked="checked" name="weapon"
<?php if (isset($weapon) && $weapon=="bow") echo "checked";?>
value="bow">Bow
<input type="radio" name="weapon"
<?php if (isset($weapon) && $weapon=="sword") echo "checked";?>
value="sword">Sword <br>

Choose your allegiance! <br>
<input type="radio" checked="checked" name="ally"
<?php if (isset($ally) && $ally=="Red") echo "checked";?>
value="Red">Red
<input type="radio" name="ally"
<?php if (isset($ally) && $ally=="Blue") echo "checked";?>
value="Blue">Blue
<br>

Choose your Profession!<br>
<input type="radio" checked="checked" name="profession"
<?php if (isset($profession) && $profession=="beserker") echo "checked";?>
value="beserker">Beserker
<input type="radio" name="profession"
<?php if (isset($profession) && $profession=="assassin") echo "checked";?>
value="assassin">Assassin
<input type="radio" name="profession"
<?php if (isset($profession) && $profession=="survivalist") echo "checked";?>
value="survivalist">Survivalist
<input type="radio" name="profession"
<?php if (isset($profession) && $profession=="warrior") echo "checked";?>
value="warrior">Warrior
<br>
<br>
<input type="submit" value="Create Character!"/>
<hr/>
</form>
</body>
</html>	

