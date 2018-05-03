<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Objektorientiert</h1>

<p>Design pattern / Get- und Set-Methoden 
<p>

<?php
class User {
	protected $email;
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) { //eine gültige E-Mail-Adresse wurde übergeben 
			$this->email = $email;
			return true;
		}
		return false;
	}
}	
$user = new User();
// $neue_email = "falsche-email-adresse";
$neue_email = "stefan.ehmig@mobil.hessen.de";
if($user->setEmail($neue_email)) {
   echo "Die E-Mail-Adresse wurde gespeichert";
} else {
   echo "Die E-Mail-Adresse konnte nicht gespeichert werden. Ggf. ist diese ungültig";
}
?>

</body>
</html>