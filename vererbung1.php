<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Objektorientiert</h1>

<p>Vererbung1
<p>
<?php
class Oberklasse {
	function HelloWorld() {
		echo "Hello World <br>";	
	}
}

class Unterklasse extends Oberklasse {
	function HelloWorld() {
		parent::HelloWorld();
		echo "Hallo Welt <br>";				
	}
}

class Unterunterklasse extends Unterklasse {
	function HelloWorld() {
		echo "Bonjour monde <br>";	
	}
}

$object = new Unterunterklasse();
$object->HelloWorld();
?>

</body>
</html>