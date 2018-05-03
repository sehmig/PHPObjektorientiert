<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Objektorientiert</h1>

<p>Statische Methoden und Eigenschaften

<?php
class User {
	public $name;
	// Verwendet um FUnktionalitäten zu kapsel - Code besser lesbar machen
	// Methoden und Eigenschaften sind nicht an ein einzelnes Objekt gekoppelt
	// also beispielsweise nicht an einen einzelnen Nutzer, sondern sie gelten global.
	
	public static $allUsers = array();
	
	public static function numberOfUsers() {
		return count(self::$allUsers);
	}
	
	public static function createNewUser($name) {
		if(strlen($name) < 10) {
			echo "Nur User mit langen Namen sind erlaubt!<br>";
			return null;
		} else {
			$user = new User();
			$user->name = $name;
		
			self::$allUsers[] = $user;
		
			return $user;
		}
	}
}

User::createNewUser("Max Mustermann");
echo "Anzahl Nutzer: ".User::numberOfUsers()."<br>";
// mindestens 10 Zeichen
User::createNewUser("Lisa Kurz");
echo "Anzahl Nutzer: ".User::numberOfUsers()."<br>";
?>

</body>
</html>