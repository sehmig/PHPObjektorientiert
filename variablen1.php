<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Objektorientiert</h1>

<p>Gültigkeit für Variablen

<?php
class User {
	public $name;
	protected $email;
	private $password;
	
	public function setEmail($newEmail) {
		if($this->isValidEmail($newEmail)) {
			$this->email = $newEmail;
		}
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setRandomPassword() {
		$randomPassword = strval(rand(1,10)); //Dies ist nicht sonderlich sicher
		$this->password = $this->hashPassword($randomPassword);
		return $randomPassword;
	}
	
	public function isCorrectPassword($password) {
		return $this->hashPassword($password) == $this->password;
	}
	
	protected function isValidEmail($email) { 
		return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
	}
	
	private function hashPassword($password) {
		return sha1($password);
	}
}

$max = new User();
$max->name = "Max Mustermann";

$max->setEmail("max@muster.de");
echo "Die E-Mail-Adresse ist: ".$max->getEmail()."<br />";

$randomPW = $max->setRandomPassword();
echo "Zufälliges Passwort: $randomPW <br />";
echo "Ist das Passwort 5 korrekt: ";
var_dump($max->isCorrectPassword("5"));
?>

</body>
</html>