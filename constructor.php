<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Objektorientiert</h1>

<p>Konstruktor

<?php
class User {
	public $erstellungsdatum;
	public $name;
	public $email;

	// Methode __construct() wird aufgerufen wird, sobald ein Objekt der Klasse erzeugt wird
	public function __construct($name, $email = "") {
		$this->name = $name;
		$this->email = $email;
		$this->erstellungsdatum = date("d.m.Y H:i:s");
	}
}
// Mit Parameterübergabe
$max = new User("Max Mustermann", "max@muster.de");
echo "Das Objekt von $max->name wurde erstellt am $max->erstellungsdatum";
?>

</body>
</html>